<<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>
</head>
<body>

    <h2>Enter Your Name</h2>

    <form action="display.php" method="post">
        <label>User Name:</label>
        <input type="text" name="username" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>

</body>
</html>