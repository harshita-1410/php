<?php

$user="";
$pass="";

if(isset($_COOKIE["username"]))
{
    $user=$_COOKIE["username"];
}

if(isset($_COOKIE["password"]))
{
    $pass=$_COOKIE["password"];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Remember Me</title>
</head>
<body>

<h2>Login Form</h2>

<form action="remember.php" method="post">

Username:
<input type="text" name="username" value="<?php echo $user; ?>"><br><br>

Password:
<input type="password" name="password" value="<?php echo $pass; ?>"><br><br>

<input type="checkbox" name="remember"> Remember Me

<br><br>

<input type="submit" value="Login">

</form>

</body>
</html>