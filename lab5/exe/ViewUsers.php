<?php
$mysqli = new mysqli("mysql.ecs.ku.edu","j567z112"," i-ngai3oH​","j567z112");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query ="select * from Users";
echo "<table>";
echo "<tr>";
echo "<th>Users</th>";
echo "</tr>";
if ($result = $mysqli->query($query))
{
   while ($row = $result->fetch_assoc())
   {
     echo "<tr>";
     echo "<td>".$row['user_id']."</td>";
     echo "</tr>";
   }
   $result->free();
}
echo "</table>";
$mysqli->close();
 ?>
