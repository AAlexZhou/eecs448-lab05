<?php
$mysqli = new mysqli("mysql.ecs.ku.edu","j567z112"," i-ngai3oH​","j567z112");
$user = $_POST['username'];
$post = $_POST['post'];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if ($post== null)
{
  echo "The post has no text"
}
$query = "select user_id from Users where user_id = '$user'"
if ($result = $mysqli->query($query))
{
  if ($row != $result->fetch_assoc())
  {
    echo "The user not exist";
  }
  else
  {
    $query = "INSERT INTO Posts(content,author_id)values('$post','$user')";
    echo "post save";
  }
  $result->free();
}
$mysqli->close();
 ?>
