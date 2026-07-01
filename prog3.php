<!DOCTYPE html>
<html>
<head>
    <title>Reverse Array in PHP</title>
</head>
<body>

<h2>Reverse an Array</h2>

<form method="post">
    Enter array values (separated by commas):<br><br>
    <input type="text" name="numbers" placeholder="10,20,30,40,50" required>
    <br><br>
    <input type="submit" name="submit" value="Reverse Array">
</form>

<?php
if (isset($_POST['submit'])) {
    // Get input from user
    $input = $_POST['numbers'];

    // Convert string into array
    $array = explode(",", $input);

    // Reverse the array
    $reversedArray = array_reverse($array);

    // Display original array
    echo "<h3>Original Array:</h3>";
    echo implode(", ", $array);

    // Display reversed array
    echo "<h3>Reversed Array:</h3>";
    echo implode(", ", $reversedArray);
}
?>

</body>
</html>