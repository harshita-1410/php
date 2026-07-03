<!DOCTYPE html>
<html>
<head>
    <title>array_pop() Example</title>
</head>
<body>

<h2>array_pop() Function</h2>

<?php
$arr = array("Apple", "Banana", "Mango", "Orange");

echo "<h3>Original Array:</h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";

// Remove last element
$removed = array_pop($arr);

echo "<h3>Removed Element:</h3>";
echo $removed;

echo "<h3>Array After array_pop():</h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";
?>

</body>
</html>