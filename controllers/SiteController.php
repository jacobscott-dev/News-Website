<?php
namespace app\controllers;
use app\controllers\Controller;
use app\core\Application;
use app\core\Request;
use app\core\Session;
use app\database\api\WebSearch\WebSearchAPI;

/**
 * Class SiteController
 *
 * @package app\controllers
 */
class SiteController extends Controller
{

	public function index()
	{
		//redirect to home page
		header("Location: /home");
	}

	public function login()
	{
		$this->render->setLayout('login');
		return $this->render('login');
	}

		public function logout()
	{
		Session::destroy();
		header("Location: /home");
	}

	public function home()
	{
		$this->render->setLayout('main');
		//$params = WebSearchAPI::trendingNews();
		return $this->render('home');
	}

		public function health()
	{
		$this->render->setLayout('articles_layout');
		//$params = Articles::getCategory('health');
		return $this->render('health');
	}

		public function science()
	{
		$this->render->setLayout('articles_layout');
		//$params = Articles::getCategory('science');
		return $this->render('science');
	}

		public function sport()
	{
		$this->render->setLayout('articles_layout');
		//$params = Articles::getCategory('sport');
		return $this->render('sport');
	}

		public function business()
	{
		$this->render->setLayout('articles_layout');
		//$params = Articles::getCategory('business');
		return $this->render('business');
	}
	
	public function allArticles()
	{
		$this->render->setLayout('articles_layout');
		//$params = Articles::getAllArticles();
		return $this->render('articles');
	}

	public function showArticle()
	{
		$id = Application::$app->getRouter()->getParams();
		$this->render->setLayout('articles_layout');
		//$params = Articles::getArticle($id);

		if ((int)$params > 0) {
			return $this->render('article');
		} else {
			die(require '../views/_404.php');
		}
	}

	public function sign_up()
	{
		$this->render->setLayout('login');
		return $this->render('sign_up');
	}

	public function admin()
	{
		$this->render->setLayout('admin_layout');
		return $this->render('admin');
	}
}

?>