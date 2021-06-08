<?php
namespace app\controllers;
use app\core\Application;
use app\core\Render;

/**
 * Class Controller
 *
 * @package app\core
 **/
class Controller
{
	protected Render $render;

	public function __construct()
	{
		$this->render = Application::$app->getRender();
	}

	public function render($view, $params = '')
	{
		return $this->render->renderView($view, $params);
	}
}  
?>