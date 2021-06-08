<?php 
namespace app\controllers;
use app\controllers\Controller;
use app\core\Application;
use app\core\Request;
use app\core\Form;
use app\core\Session;
use app\database\models\Articles;
use app\database\models\Users;

/**
 * Class AuthController
 */
class AuthController extends Controller
{

	public function login()
	{
		$params = [];
		$password = $username = '';

		if($_SERVER["REQUEST_METHOD"] == "POST") {

			if (empty($_POST["username"])) {
				$params['usernameErr'] = "Please enter your username.";
			} else {
				$username = Form::cleanInput($_POST["username"]);
			}

			if (empty($_POST["password"])) {
				$params['passwordErr'] = "Please enter your password.";
			} else {
				$password = Form::cleanInput($_POST["password"]);
			}


			//determine username and password match
			if(Users::getUser($username, $password)){
				$user = Users::getUser($username, $password);
				Session::set('Current_User', $user['username']);
				Session::set('User_Email', $user['email']);
				Session::set('User_Role', $user['role']);
				header("Location: /home");
		 	} elseif (!empty($username) || !empty($password)) {
		 		$params = [];
		 		$params['invalidUser'] = 'Please enter a valid username or password.';
		 	}
		 		
		}
		//redirect back to login and display errors	
		$this->render->setLayout('login');
		return $this->render('login', $params);
	}

	public function signUp()
	{
		$params = [];
		$password = $username = $email = '';

		if($_SERVER["REQUEST_METHOD"] == "POST") {

			if (empty($_POST["username"])) {
				$params['usernameErr'] = "Please enter a username.";
			} else {
				$username = Form::cleanInput($_POST["username"]);
			}

			if (empty($_POST["email"])) {
				$params['emailErr'] = "Please enter an email address.";
			} else {
				$email = Form::cleanInput($_POST["email"]);
			}

			if (empty($_POST["password"])) {
				$params['passwordErr'] = "Please enter a password.";
			} else {
				$password = Form::cleanInput($_POST["password"]);
			}

			//check if username already exists in users table
			if(Users::getUsername($username) ){
				$params['usernameErr'] = "Username already exists.";
				$this->render->setLayout('login');
				return $this->render('sign_up', $params);
			}

			//if inputs are valid and not empty
				if (!Form::validateUsername($username) && !empty($username) ) {
					$params['usernameErr'] = "Invalid username.";
				} 
				if (!Form::validatePassword($password) && !empty($password)) {
					$params['passwordErr'] = "Invalid password.";
				} 
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($email)) {
					$params['emailErr'] = "Invalid email address.";
				} 

				if (Form::validateUsername($username) && Form::validatePassword($password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
					//create user in users table	
					Users::create($username, $email, $password);
					header("Location: /home");
				}
				
			//redirect back to sign_up and display errors	
			$this->render->setLayout('login');
			return $this->render('sign_up', $params);
		}
	}
}