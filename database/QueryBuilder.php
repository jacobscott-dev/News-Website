<?php 
namespace app\database;
use app\database\models\Model;
/**
 * Class QueryBuilder
 */
class QueryBuilder extends Model
{
	protected static function selectNumber(int $num, $tablename) : array
	{
		$results = self::$pdo->prepare("select * from $tablename Limit $num");
		$results->execute();
		return $results->fetchAll();
	}

	protected static function selectAll($tablename) : array
	{
		$results = self::$pdo->prepare("select * from $tablename");
		$results->execute();
		return $results->fetchAll();
	}

	protected static function selectById($id, $tablename) : array
	{
		$results = self::$pdo->prepare("select * from $tablename where id= :id ");
		$results->bindParam(':id', $id);
		$results->execute();
		return $results->fetchAll();
	}

	protected static function selectByCol($col, $item, $tablename) : array
	{
		$results = self::$pdo->prepare("select :item from $tablename where $col= :item ");
		$results->bindParam(':item', $item);
		$results->execute();
		return $results->fetchAll();
	}
}