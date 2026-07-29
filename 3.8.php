<?php

if(isset($_COOKIE["visitor"]))
{
    echo "<h2>Welcome Back!</h2>";
}
else
{
    setcookie("visitor","yes",time()+60*60*24*30);

    echo "<h2>Welcome! You are visiting for the first time.</h2>";
}

?>