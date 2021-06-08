<?php
namespace app\controllers;
use app\core\Application;

/**
 * ErrorLogger
 */
class ErrorLogger
{
	public static function log($error)
	{
		error_log($error, 3, '/storage/temp/errors.log');
	}
}