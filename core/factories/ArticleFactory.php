<?php 
namespace app\core\factories;
use app\core\factories\Factory;
/**
 * Class ArticleFactory
 */
class ArticleFactory extends Factory
{
	
	public static function define(string $category) : array
	{
		$category = strtolower($category);
		return [

			"title" => ucfirst("$category Article"),

			
			"excerpt" => "Integer sagittis $category risus et fermentum.",

			"body" => "Ipsum $category sit amet, consectetur adipiscing elit. Phasellus quis tincidunt ligula. Donec tempor mollis purus vitae lacinia. Donec ut fermentum magna. Nam in faucibus urna. Fusce id risus risus. Integer sagittis tincidunt risus et fermentum. ",

			"category" => "$category",

			"image" => "$category.jpg",

		];
	}
}