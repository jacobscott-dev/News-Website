<?php 
namespace app\core;
/**
 * Class Render
 */
class Render
{
	private string $layout = 'login';

	public function setLayout($layout)
	{
		$this->layout = $layout;
	}

	public function getLayout()
	{
		return $this->layout;
	}

	public function renderView($view, $params)
	{
		$view = $this->view($view, $params);
		$layout = $this->layout();
		return str_replace('{{content}}', $view, $layout); 
	}

	private function layout()
	{
		$layout = $this->layout;
		ob_start();//starts output cacheing.
		include_once Application::$ROOT_DIR."/views/layouts/$layout.php";
		return ob_get_clean();//clears the buffer.
	}
	private function view($view, $params)
	{
		ob_start();//starts output cacheing.
		include_once Application::$ROOT_DIR."/views/$view.php";
		return ob_get_clean();//clears the buffer.
	}
}