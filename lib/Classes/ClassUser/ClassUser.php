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
	public static function find_all_users() {

		global $database;
		$result_set = $database->query("SELECT * FROM users");
		return $result_set;

	}

	public static function find_user_by_id($user_id){

		global $database;
		$result_set = $database->query("SELECT * FROM users WHERE id = 2");
		$found_user= mysqli_fetch_array($result_set);
		return $found_user;

	}

} // END class ClassUser 

 ?>