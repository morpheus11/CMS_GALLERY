<?php 
include("..\init.php");

$user = new ClassUser();
$result_set = $user->find_all_users();
while($row = mysqli_fetch_array($result_set)){
echo $row['FirstName']."<br>";
}

 ?>
