<?php 
namespace app\database\seeders;
use app\core\Session;
/**
 * Class ArticleSeeder
 */
class ArticleSeeder 
{
	public static function seed()
	{
		$category = array('health', 'business', 'science', 'sport');
		foreach ($category as $cat) {
			$query_fields = [
          		'autoCorrect' => 'true',
          		'pageNumber' => 1,
          		'pageSize' => 1,
          		'safeSearch' => 'false',
          		'q' => "$cat";
  			];
  			$curl = curl_init(News::getAPI() . '?' . http_build_query($query_fields));
  			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  			curl_setopt($curl, CURLOPT_HTTPHEADER, [
         	 'X-Rapidapi-Host: contextualwebsearch-websearch-v1.p.rapidapi.com',
         	 'X-RapidAPI-Key: d551a50efbmsh842e8bdf709d4fbp100594jsn8f8a108864d1'
  			]);
 		 	$response = json_decode(curl_exec($curl), true);
 			 curl_close($curl);
  			$news = $response['value'];
		}
		Session::set('Seeded', 'true');
	}
}