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
	public $username;
	public $password;
	public $first_name;
	public $last_name;

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

} // END class ClassUser 

 ?>