<?php
namespace app\core;
/**
 * Class Request
 *
 * @package app\core;
 */
class Request 
{
	public function getPath()
	{
		$path = htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/');//If no REQUEST_URI, it is '/'

		$parts = explode('/', $path);

		//if there are perameters such as an article id e.g. article/1
		//set those parameters in the router
		if (isset($parts[2])) {
			Application::$app->getRouter()->setParams($parts[2]);
			$path = '/' . $parts[1];
		}
		
		//returns just the path without perameters e.g. /article
		return $path;
	}

	public function method()
	{
		return strtolower($_SERVER['REQUEST_METHOD']);//gets the request such as GET or POST, converts to lowercase.
	}

}