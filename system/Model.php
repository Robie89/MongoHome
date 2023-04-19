<?php

class Model
{
       public static function Init()
            {
	        $uri = "mongodb+srv://Trebor:AHmoj361@cluster0.dbyjexa.mongodb.net/test";
		    $client = new MongoDB\Client($uri);
		    self::$db = $client->db_football_club;
            }
	   public static function InsertContact($contact)
	        {
	            if($contact)
				{
					$collection = self::$db->players;
					return $collection -> insertOne($contact);
				}
				return null;
	        }
       public static function SelectPlayers()
	   {
		   $collection = self::$db->players;
		   $sort  = ['firstname' => 1];
		   $list = $collection->find([], ['sort' => $sort]);
		   return $list->toArray();
	   }
	   
public static $db;
}