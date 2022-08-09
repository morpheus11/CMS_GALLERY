<?php 

require_once("config.php");

/**
 * ClassDatabaseConnect function openDbConnections for connect with db
 * or give error info
 */
class ClassDatabaseConnect
{
	public $connection;



	function __construct(){
		echo "string";
		$this->openDbConnections();
	}



	public function openDbConnections()
	{
		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
     	if(mysqli_connect_errno()){
     		die("mysqli connectio die with error" . mysqli_error());
     	}

	}
}

 $database = new ClassDatabaseConnect();

 ?>