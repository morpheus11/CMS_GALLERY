<?php 
include("..\init.php");
echo("___all_classes_connected_above______"."<br>");
echo("_________________________________"."<br>");


/*
*Method for find all users
*/
$result_set = ClassUser::find_all_users();
while($row = mysqli_fetch_array($result_set)){
echo $row['FirstName']."<br>";
}


/*
*Method for find special user by id
*/
$found_user = ClassUser::find_user_by_id(3);




$user = new ClassUser();
$user->id = $found_user['id'];
$user->username = $found_user['UserName'];
$user->password = $found_user['PassWord'];
$user->first_name = $found_user['FirstName'];
$user->last_name = $found_user['LastName'];

echo $user->username;


 ?>
