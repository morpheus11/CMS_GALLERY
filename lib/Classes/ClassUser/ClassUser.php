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
	public function find_all_users() {

		global $database;
		$result_set = $database->query("SELECT * FROM user");
		return $result_set;

	}

} // END class ClassUser 

 ?>