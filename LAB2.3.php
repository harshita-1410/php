<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>

<h2>PHP Array Functions</h2>

<?php
// 1) array_change_key_case()
echo "<h3>1. array_change_key_case()</h3>";

$student = array(
    "Name" => "Aarchiben",
    "Course" => "BCA",
    "City" => "Rajkot"
);

echo "<b>Original Array:</b><br>";
print_r($student);

echo "<br><b>Keys in Lowercase:</b><br>";
print_r(array_change_key_case($student, CASE_LOWER));

echo "<br><b>Keys in Uppercase:</b><br>";
print_r(array_change_key_case($student, CASE_UPPER));


// 2) array_count_values()
echo "<hr><h3>2. array_count_values()</h3>";

$colors = array("Red", "Blue", "Red", "Green", "Blue", "Red");

echo "<b>Original Array:</b><br>";
print_r($colors);

echo "<br><b>Count of Values:</b><br>";
print_r(array_count_values($colors));


// 3) array_pop()
echo "<hr><h3>3. array_pop()</h3>";

$fruits = array("Apple", "Banana", "Mango", "Orange");

echo "<b>Original Array:</b><br>";
print_r($fruits);

array_pop($fruits);

echo "<br><b>After array_pop():</b><br>";
print_r($fruits);


// 4) array_push()
echo "<hr><h3>4. array_push()</h3>";

$numbers = array(10, 20, 30);

echo "<b>Original Array:</b><br>";
print_r($numbers);

array_push($numbers, 40, 50);

echo "<br><b>After array_push():</b><br>";
print_r($numbers);


// 5) sort()
echo "<hr><h3>5. sort()</h3>";

$marks = array(78, 45, 90, 60, 55);

echo "<b>Original Array:</b><br>";
print_r($marks);

sort($marks);

echo "<br><b>Sorted Array:</b><br>";
print_r($marks);

?>

</body>
</html>