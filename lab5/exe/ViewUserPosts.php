<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "j567z112", "i-ngai3oH", "j567z112");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user =$_POST['choice'];

$post ="select content from Posts where author_id = $user";

echo "<table>";
echo "<tr>";
echo "<th>Posts</th>";
echo "</tr>";
if ($result = $mysqli->query($post))
{
  while ($row = $result->fetch_assoc())
  {
    echo "<tr>";
    echo "<td>".$row['content']."</td>";
    echo "</tr>";
  }
  $result->free();
}
echo "</table>";
$mysqli->close();

 ?>
