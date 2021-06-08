<?php
namespace app\database\models;
use app\database\Connection;
use app\core\Application;

/**
 * Class Model
 *
 *@package app\core
 */

class Model
{
	protected static $pdo;

	public function __construct()
	{
		self::$pdo = Connection::connect(Application::$DATABASE);
	}

}
	