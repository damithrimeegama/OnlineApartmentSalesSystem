<?php

$connection=mysqli_connect('localhost','root','','appointment');

if(mysqli_connect_errno())
{
    die('Database connection failed'.mysqli_connect_errno());
}
else
{
    //echo "Connection successful.";
}
echo '<br>';
?>
