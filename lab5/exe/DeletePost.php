<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "j567z112", "i-ngai3oH", "j567z112");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$choice =$_POST['choice'];
foreach ($choice as $delete)
{
  $quary ="delete from Posts where author_id = '$delete'";
  if ($mysqli->query($quary))
  {
    echo "post id".$delete."deleted successful";
    echo "<br>";
  }

}
$mysqli->close();
 ?>
