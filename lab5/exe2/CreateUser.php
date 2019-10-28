<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "j567z112", "i-ngai3oH", "j567z112");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user = $_POST['Username'];
$query="INSERT INTO Users(user_id)values('$user')";
if ($user==null)
{
  echo "the username is empty";
}
elseif ($mysqli->query($query)=== True)
{
  echo "Username created successfully";
}
else {
  echo "The user already exists";
}
$mysqli->close();
 ?>
