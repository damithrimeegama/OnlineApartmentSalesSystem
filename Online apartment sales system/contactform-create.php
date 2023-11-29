<?php
session_start();
require 'config-contactus.php';

$Username=$_POST['userName'];
$PhoneNumber=$_POST['phoneNumber'];
$Address=$_POST['pAddress'];
$Email=$_POST['email'];
$Subject=$_POST['mySubject'];
$Inquiry=$_POST['inquiry'];

$query="INSERT INTO developer (Username,PhoneNumber,Address,Email,Subject,Inquiry) VALUES('$Username',$PhoneNumber,'$Address','$Email','$Subject','$Inquiry')";
   
if($connection->query($query))
    {
        $_SESSION["success"] = true;
        header("Location:contactForm.php");
    }
    else{
        echo "Error:". $connection->error;
    }
    $connection->close();
?>



