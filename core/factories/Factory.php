<?php 
namespace app\core\factories;
/**
 * Class Factory
 */
abstract class Factory
{
	abstract static public function define(string $string) : array;
}