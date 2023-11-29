<?php
session_start();
require 'config-app.php';

    $Username = $_POST["username"];
    $Date = $_POST["appTime"];
    $Basis = $_POST["fav_type1"];
    $View = $_POST["fav_type2"];

    $query="INSERT INTO bookappointment (Username,Date,Basis,View) VALUES('$Username','$Date','$Basis','$View')";
    $connection=mysqli_connect('localhost','root','','appointment');

    if($connection->query($query))
    {
        $_SESSION["success"] = true;
        header("Location:appointment.php");
    }
    else{
        echo "Error:". $connection->error;
    }
    $connection->close();
?>


