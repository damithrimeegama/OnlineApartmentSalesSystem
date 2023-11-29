<?php
require 'config-contactus.php';

   $query="SELECT Username,PhoneNumber,Address,Email,Subject,Inquiry FROM developer";
   $result_set=mysqli_query($connection,$query);

   if ($result_set)
   {
    //checking number of records
    echo mysqli_num_rows($result_set)." Records found."."<hr>";
    //echo "Query is successful";

    $table='<table>';
    $table .='<tr><th>Username</th><th>PhoneNumber</th><th>Address</th><th>Email</th><th>Subject</th><th>Inquiry</th></tr>';
   while($record=mysqli_fetch_assoc($result_set))
   {
     $table .='<tr>';
     $table .= '<td>'. $record['Username']. '</td>';
     $table .= '<td>'. $record['PhoneNumber']. '</td>';
     $table .= '<td>'. $record['Address']. '</td>';
     $table .= '<td>'. $record['Email']. '</td>';
     $table .= '<td>'. $record['Subject']. '</td>';
     $table .= '<td>'. $record['Inquiry']. '</td>';
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