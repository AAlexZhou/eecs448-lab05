<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "j567z112", "i-ngai3oH", "j567z112");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user = $_POST["username"];
$post = $_POST["post"];
if ($post!= null)
{
  $query = "select user_id from Users where user_id = '$user'";
  if ($result = $mysqli->query($query))
  {
    if ($row = $result->fetch_assoc())
    {
      $query = "INSERT INTO Posts(content,author_id)values('$post','$user')";
      if($mysqli->query($query))
      {
          echo "post save";
      }
      else {
         echo "error post ";
      }

    }
    else
    {

    echo "user not exsit";
    }
    $result->free();
  }
}
else {
    echo "The post has no text";
}
$mysqli->close();
 ?>
