<?php
namespace app\core;

/**
 * Class Form
 */
class Form
{
	//escape form data
	public static function cleanInput($data)
	{
		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}

	public static function validateUsername($username)
	{
		if (preg_match('/^[a-z\d_]{5,20}$/i',$username)) {
  			return true;
  		} else {
  			return false;
  		}
	}

	public static function validatePassword($password)
	{
		//min 8 characters, 1 uppercase, 1 number, 1 special character
		if(preg_match('/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/', $password)) {
			return true;
		} else {
			return false;
		}
	}
}