<?php
include("ClassDatabaseConnect.php");
$sql = "SELECT
  user.FirstName,
  user.LastName,
  user.Age,
  user.Hometown,
  user.Job
FROM user
WHERE user.id = 1";
/*
*Initialization with only one method from ClassDatabaseConnect
*/
$result = $database->query($sql);
$user_found = mysqli_fetch_array($result);

echo $user_found['FirstName']." ".$user_found['LastName'];


?>



