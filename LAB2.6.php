<?php

$conn = mysqli_connect("localhost","root","","test");

if(!$conn)
{
    die("Connection Failed");
}

$query = "SELECT
DAYOFWEEK(NOW()) AS DayOfWeek,
WEEKDAY(NOW()) AS WeekDay,
DAYOFMONTH(NOW()) AS DayOfMonth,
DAYOFYEAR(NOW()) AS DayOfYear,
DAYNAME(NOW()) AS DayName";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

echo "<h2>MySQL Date Functions</h2>";

echo "DAYOFWEEK(): " . $row['DayOfWeek'] . "<br><br>";

echo "WEEKDAY(): " . $row['WeekDay'] . "<br><br>";

echo "DAYOFMONTH(): " . $row['DayOfMonth'] . "<br><br>";

echo "DAYOFYEAR(): " . $row['DayOfYear'] . "<br><br>";

echo "DAYNAME(): " . $row['DayName'];

mysqli_close($conn);

?>