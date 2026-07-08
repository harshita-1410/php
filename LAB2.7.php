<?php

$conn = mysqli_connect("localhost","root","","test");

if(!$conn)
{
    die("Connection Failed");
}

$sql = "SELECT
HOUR(NOW()) AS hr,
MINUTE(NOW()) AS min,
SECOND(NOW()) AS sec,
DATE_FORMAT(NOW(),'%d-%m-%Y %h:%i:%s %p') AS datetime";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

echo "<h2>MySQL Time Functions</h2>";

echo "HOUR() : ".$row['hr']."<br><br>";

echo "MINUTE() : ".$row['min']."<br><br>";

echo "SECOND() : ".$row['sec']."<br><br>";

echo "DATE_FORMAT() : ".$row['datetime'];

mysqli_close($conn);

?>