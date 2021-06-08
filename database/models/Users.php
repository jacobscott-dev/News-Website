<?php
namespace app\database\models;
use app\database\Connection;
use app\core\Application;
use app\database\QueryBuilder;
use PDO;

/**
 * Class Users
 */
class Users extends QueryBuilder
{
	
	public static function getUser($username, $password)
	{
		try{
			$stmt = self::$pdo->prepare("SELECT username, password, email, role FROM users WHERE username = '{$username}' and password = '".md5($password)."'");//returns a statement object
			$stmt->execute();//executes prepared statement
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			return $result;

		} catch(Exception $e ) {
			return false;
		}

	}

	public static function getUsername($username)
	{
		try{
			return self::selectByCol('username', $username, 'users');
				
		} catch(Exception $e ) {
			return false;
		}
	}

	public static function create($username, $email, $password)
	{
		
		$u = $username;
		$e = $email;
		$p = md5($password);

		$sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES (?,?,?)";
		$stmt = self::$pdo->prepare($sql);
		$stmt->execute([$u, $e, $p]);
	}
}