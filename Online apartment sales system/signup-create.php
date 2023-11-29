<?php

$connection=mysqli_connect('localhost','root','','signupdetails');

if(mysqli_connect_errno())
{
    die('Database connection failed'.mysqli_connect_errno());
}
else
{
    //echo "Connection successful.";
}
echo '<br>';


$Email=$_POST["email"];
$Password=$_POST["password"];

$query="INSERT INTO userdetails(email,password) VALUES('$Email','$Password')";

$result=mysqli_query($connection,$query);

if($result)
{
   // echo "1 record added";
}
else
{
   //echo "Query failed";
}

?>