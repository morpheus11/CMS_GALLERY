<?php 

require_once("config.php");

/**
 * ClassDatabaseConnect function openDbConnections for connect with db
 * or give error info
 */
class ClassDatabaseConnect
{
	private $connection;
	
	function openDbConnections()
	{
		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
     	if(mysqli_connect_errno()){
     		die("mysqli connectio die with error" . mysqli_error());
     	}

	}
}

 ?>