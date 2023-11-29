<?php
require 'config-app.php';

   $query="SELECT Appointment,Username,Date FROM bookappointment";
   $result_set=mysqli_query($connection,$query);

   if ($result_set)
   {
    //checking number of records
    echo mysqli_num_rows($result_set)." Records found."."<hr>";
    //echo "Query is successful";

    $table='<table>';
    $table .='<tr><th>Appointment</th><th>Username</th><th>Date</th></tr>';
   while($record=mysqli_fetch_assoc($result_set))
   {
     $table .='<tr>';
     $table .= '<td>'. $record['Appointment']. '</td>';
     $table .= '<td>'. $record['Username']. '</td>';
     $table .= '<td>'. $record['Date']. '</td>';
     $table .='</tr>';
   }
   $table .='</table>';
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Select Query</title>
    <style>
        td,th
        {
            border:1px solid black;
            padding:10px;
        }
        table
        {
            border-collapse:collapse;
        }
    </style>
</head>
<body>
<?php
 echo $table;
?>

</body>
</html>