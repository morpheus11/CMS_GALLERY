<?php 
echo ("ClassUser.php connected"."<br>");
/**
 * undocumented ClassUser
 *
 * @package default
 * @author 
 **/
class ClassUser 
{

	public $id;
	public $UserName;
	public $PassWord;
	public $FirstName;
	public $LastName;

	public static function find_all_users() {

	return self::find_this_query("SELECT * FROM users");

	}

	public static function find_user_by_id($user_id){

		global $database;
		$result_set = $database->query("SELECT * FROM users WHERE id = $user_id");
		$found_user= mysqli_fetch_array($result_set);
		return $found_user;

	}

	public static function find_this_query($sql) {
		global $database;
		$result_set = $database->query($sql);
		return $result_set;
	}

private static function instantation(){

$the_object = new self;

$the_object->id 		= $found_user['id'];
$the_object->UserName 	= $found_user['UserName'];
$the_object->PassWord 	= $found_user['PassWord'];
$the_object->FirstName 	= $found_user['FirstName'];
$the_object->LastName 	= $found_user['LastName'];
}






} // END class ClassUser 

 ?>