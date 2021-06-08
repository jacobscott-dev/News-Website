<?php
namespace app\core;

/**
 * Class Router
 * A routing system works by mapping an HTTP request to a request handler based 
 * on the request method and path specified in the URL of the request.
 *
 * @package app\core;
 */
class Router 
{
	private Request $request;
	private Response $response;
	private $params;
	private $controller;
	private array $routes = [];

	/**
	* Router constructor.
	*
	* @param \app\core\Request $request
	* @param \app\core\Response $response
	*/

	public function __construct()
	{
		$this->request = new Request();
		$this->response = new Response();		
	}

	public function setParams($params)
	{
		$this->params = $params;
	}

	public function getParams()
	{
		return $this->params;
	}

	public function getController()
	{
		return $this->controller;
	}

	public function get($path, $callback)
	{
		$this->routes['get'][$path] = $callback;
	}

	public function post($path, $callback)
	{
		$this->routes['post'][$path] = $callback;
	}

	public function resolve()
	{
		$path = $this->request->getPath();//gets uri e.g. /home
		$method = $this->request->method();//gets method get, post etc...
		$callback = $this->routes[$method][$path] ?? false;

		if ($callback === false) {
			$this->response->setStatusCode(404);
			die(require '../views/_404.php');
		}
		
		//change string to object instance to be callable.
		$this->controller = new $callback[0]();
		$callback[0] = $this->controller;

		return call_user_func($callback);
	}	
}