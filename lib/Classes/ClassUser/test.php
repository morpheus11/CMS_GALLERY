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
$user->id           = $found_user['id'];
$user->UserName     = $found_user['UserName'];
$user->PassWord     = $found_user['PassWord'];
$user->FirstName    = $found_user['FirstName'];
$user->LastName     = $found_user['LastName'];

echo $user->UserName;
print_r($user)

 ?>
