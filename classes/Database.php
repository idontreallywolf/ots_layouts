<?php

//	echo $config;

	class Database
	{
		private static $dbh;

		public static function DBH($cfg){

			if(!self::$dbh)
			{
				try {
					//$dbh = new PDO("mysql:host=".$host.';dbname='.$db, $user, $pass);
					self::$dbh = new PDO("mysql:host=".$cfg['database']['host'].';dbname='.$cfg['database']['db'], $cfg['database']['user'], $cfg['database']['pass']);
				} catch(PDOException $e){
					return "Error: ".$e->getMessage();
				}
			}
			return self::$dbh;
		}

	}

?>
