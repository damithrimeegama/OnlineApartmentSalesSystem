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
?>

<?php
if(isset($_POST["submit"]))
{
    $Email=$_POST["email"];
    $Password=$_POST["password"];
    $hashed_password= sha1($Password);

    require_once 'functions.inc.php'
   if(emptyInputs($Email,$Password) !== false)
   {
    exit();
   }
   LoginUser($Email,$Password);
}

?>
