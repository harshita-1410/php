<!DOCTYPE html>
<html>
<head>
    <title>array_push() Example</title>
</head>
<body>

<h2>array_push() Function</h2>

<?php
$arr = array("Apple", "Banana", "Mango");

echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";

// Add elements
array_push($arr, "Orange", "Grapes");

echo "<h3>Array After array_push():</h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";
?>

</body>
</html>