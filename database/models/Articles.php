<?php
namespace app\database\models;
use app\core\Application;
use app\database\models\Model;
use app\database\QueryBuilder;
use ArrayObject;
/**
 * Class ArticlesModel
 *
 *@package app\database\models;
 */
class Articles extends QueryBuilder
{
	public static function getArticles(int $numArticles) : array
	{
		return self::selectNumber($numArticles,'articles');	
	}

	public static function getAllArticles() : array
	{
		return self::selectAll('articles');	
	}

	public static function getArticle(int $articleId) : array
	{	
		return self::selectById($articleId, 'articles');	
	}

	public static function getCategory(string $category) : array
	{
		$results = self::$pdo->prepare("select * from `articles` where category= :category ");
		$results->bindParam(':category', $category);
		$results->execute();
		return $results->fetchAll();
	}

}