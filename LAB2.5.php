<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Calculator</h2>

<form method="post">
    Number 1:
    <input type="number" name="num1" required><br><br>

    Number 2:
    <input type="number" name="num2" required><br><br>

    Operation:
    <select name="op">
        <option value="+">Addition</option>
        <option value="-">Subtraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
    </select>

    <br><br>

    <input type="submit" name="btn" value="Calculate">
</form>

<?php

function calculator($a,$b,$op)
{
    if($op=="+")
        return $a+$b;
    elseif($op=="-")
        return $a-$b;
    elseif($op=="*")
        return $a*$b;
    elseif($op=="/")
    {
        if($b!=0)
            return $a/$b;
        else
            return "Cannot divide by zero";
    }
}

if(isset($_POST['btn']))
{
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $op=$_POST['op'];

    echo "<h3>Answer = ".calculator($a,$b,$op)."</h3>";
}

?>

</body>
</html>