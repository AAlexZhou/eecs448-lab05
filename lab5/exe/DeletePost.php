<?php
$mysqli = new mysqli("mysql.ecs.ku.edu","j567z112"," i-ngai3oH​","j567z112");
$user =$_POST['choice']
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$choice =$_POST['choice']
foreach ($choice as $delete)
{
  $quary ="delete from Posts where post_id = '$delete'";
  echo "post id".$delete."deleted successful";
  echo "<br>";
}
$mysqli->close();
 ?>
