<?php
require 'config-app.php';

$query="DELETE FROM bookappointment WHERE appointment=11 LIMIT 1";
$result_set= mysqli_query($connection,$query);

//mysqli_affected_rows() = returns number of rows affected

if ($result_set)
{
   echo mysqli_affected_rows($connection)." Records Deleted.";
}
else
{
   echo "Database query failed.";
}
?>
