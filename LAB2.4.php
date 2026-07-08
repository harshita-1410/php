<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>

<h2>PHP String Functions Demo</h2>

<?php

// Any String
$str = "Hello World Welcome to PHP";

echo "<h3>Original String:</h3>";
echo $str;

echo "<hr>";

// 1. strlen()
echo "<b>1. strlen()</b><br>";
echo "Length of String: " . strlen($str);

echo "<hr>";

// 2. strpos()
echo "<b>2. strpos()</b><br>";
echo "Position of 'World': " . strpos($str, "World");

echo "<hr>";

// 3. str_word_count()
echo "<b>3. str_word_count()</b><br>";
echo "Total Words: " . str_word_count($str);

echo "<hr>";

// 4. strrev()
echo "<b>4. strrev()</b><br>";
echo "Reverse String: " . strrev($str);

echo "<hr>";

// 5. strtolower()
echo "<b>5. strtolower()</b><br>";
echo "Lowercase: " . strtolower($str);

echo "<hr>";

// 6. strtoupper()
echo "<b>6. strtoupper()</b><br>";
echo "Uppercase: " . strtoupper($str);

?>

</body>
</html>