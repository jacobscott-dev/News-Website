<?php


namespace app\core;
use app\database\models\Model;
use app\controllers\Controller;
use app\core\Render;
use app\core\Session;

/**
 * Class Application
 * Accesses main components of the project, such as routers, requests, databases 
 * etc..
 *
 * @package app\core;
 */
class Application 
{
	private Model $model;
	public static string $ROOT_DIR;
	public static string $DATABASE;
	private Router $router; 
	private Render $render;
	public static Application $app;

	public function __construct($rootPath)
	{
		self::$ROOT_DIR = $rootPath;
		self::$DATABASE = 'jsdatabase';
		self::$app = $this;
		$this->model = new Model();
		$this->router = new Router(); 
		$this->render = new Render();
		
	}

	public function getRender()
	{
		return $this->render;
	}

	public function getRouter()
	{
		return $this->router;
	}

	public function run()
	{
		echo $this->router->resolve();
	}
}

?>