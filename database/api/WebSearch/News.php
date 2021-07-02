<?php 
namespace app\database\api\WebSearch;
/**
 * News
 */
class News
{
	private static $url = 'https://contextualwebsearch-websearch-v1.p.rapidapi.com/api/search/NewsSearchAPI?';
	
	public static function getAPI()
	{
		return self::$url;
	}
}