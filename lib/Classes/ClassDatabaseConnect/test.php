<?php
include("ClassDatabaseConnect.php");
$sql = "SELECT
  users.FirstName,
  users.LastName,
  users.Age,
  users.Hometown,
  users.Job
FROM users
WHERE users.id = 1";
/*
*Initialization with only one method from ClassDatabaseConnect
*/

$result = $database->query($sql);
$user_found = mysqli_fetch_array($result);

echo $user_found['FirstName']." ".$user_found['LastName']." ".$user_found['Age']." ".$user_found ["Hometown"]." ".$user_found ["Job"];

?>



