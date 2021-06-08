<?php
namespace app\database;
use PDO;

/**
 * Class Connection
 *
 * @package app\database
 */
class Connection
{
	public static function connect($database)
	{
		try {
			return new PDO("mysql:host=127.0.0.1;dbname=$database", 'root', '');

		}catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}