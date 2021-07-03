<?php 
namespace app\database\api\WebSearch;
/**
 * News
 */
class WebSearchAPI
{
	public static function trendingNews(int $num = 6) 
	{
		$url = 'https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/TrendingNewsAPI?';
		$query_fields = [
          	'pageNumber' => 1,
          	'pageSize' => $num,
          	'location' => 'uk',
  			];

  		$curl = curl_init($url . '?' . http_build_query($query_fields));

  		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  		curl_setopt($curl, CURLOPT_HTTPHEADER, [
          'X-Rapidapi-Host: contextualwebsearch-websearch-v1.p.rapidapi.com',
          'X-RapidAPI-Key: d551a50efbmsh842e8bdf709d4fbp100594jsn8f8a108864d1'
  		]);

 		$response = json_decode(curl_exec($curl), true);
 		$news = $response['value'];
 		curl_close($curl);
 		return $news;
	}
}