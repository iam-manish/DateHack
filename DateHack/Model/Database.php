<?php namespace Model;

use PDO;
class Database 
{
	
	protected $user = "root";
	protected $pass  = "";
	
	function __construct()
	{
		try{
			$this->dbh = new PDO('mysql:host=localhost;dbname=datehack', $this->user, $this->pass);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}
	}


	function insert($data,$table){
		$userData =  array_keys($data);
	  	$insertValue = implode(',',$userData);
	  	$keys = array_keys($data);
	  	$valuesWithColon = implode(', :', $keys);
	  	$query =  'INSERT INTO ' . $table . ' ('.$insertValue.') VALUES (:'.$valuesWithColon.')';
	  	$runQuery = $this->dbh->prepare($query);
	  	$insert = $runQuery->execute($data);
	  	if($insert){
	  		return "ok";
	  	}
	  	else{
	  		return "error";
	  	}
	}
}