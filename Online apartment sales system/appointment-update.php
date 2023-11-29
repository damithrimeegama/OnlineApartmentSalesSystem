<?php
require 'config-app.php';

 $query="UPDATE bookappointment SET Basis='R' WHERE Appointment=11";
 $result_set= mysqli_query($connection,$query);

 //mysqli_affected_rows() = returns number of rows affected

 if ($result_set)
 {
    echo mysqli_affected_rows($connection)." Records updated.";
 }
 else
 {
    echo "Database query failed.";
 }
?>
