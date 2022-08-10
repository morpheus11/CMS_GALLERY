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
		$this->openDbConnections();
	}



	public function openDbConnections()
	{
		$this->connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
     	if(mysqli_connect_errno()){
     		die("mysqli connectio die with error" . mysqli_error());
     	}

	}

	public function query($sql) {

	$result = mysqli_query($this->connection, $sql);
	
	return $result;	

	}

	private function confirm_query($result){

		if(!result) {
		die("Query Failed");	
		}

	}


	public function escape_string($string) {
		$escaped_string = mysqli_real_escape_string($this->connection,$string);
		return $escaped_string;


	}


}

 $database = new ClassDatabaseConnect();

 ?>