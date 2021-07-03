<?php 
namespace app\database\seeders;
use app\core\Session;
use app\database\api\WebSearch\News;
/**
 * Class ArticleSeeder
 */
class ArticleSeeder 
{
	public static function seed(string $cat, int $num = 1)
	{
		$query_fields = [
          	'autoCorrect' => 'true',
          	'pageNumber' => 1,
          	'pageSize' => $num,
          	'safeSearch' => 'false',
          	'q' => "$cat"
  		];
  		$curl = curl_init(News::getAPI() . '?' . http_build_query($query_fields));
  		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  		curl_setopt($curl, CURLOPT_HTTPHEADER, [
          'X-Rapidapi-Host: contextualwebsearch-websearch-v1.p.rapidapi.com',
          'X-RapidAPI-Key: d551a50efbmsh842e8bdf709d4fbp100594jsn8f8a108864d1'
  		]);
 		$response = curl_exec($curl);
 		curl_close($curl);
 		die($response['value']);	 
 		return $response['value'];

		//Session::set('Seeded', 'true');
	}
}