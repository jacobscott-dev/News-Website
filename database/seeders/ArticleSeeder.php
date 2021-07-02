<?php 
namespace app\database\seeders;
use app\core\factories\ArticleFactory;
use app\database\models\Articles;
use app\core\Session;
/**
 * Class ArticleSeeder
 */
class ArticleSeeder extends Articles
{
	public static function seed()
	{
		$category = array('health', 'business', 'science', 'sport');

		foreach ($category as $key) {
			$article = ArticleFactory::define($key);
			Articles::create($article);
		}
		Session::set('Seeded', 'true');
	}
}