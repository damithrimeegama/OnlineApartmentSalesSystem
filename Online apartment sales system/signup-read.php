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

   $query="SELECT UserID,Email,Password FROM userdetails";
   $result_set=mysqli_query($connection,$query);

   if ($result_set)
   {
    //checking number of records
    echo mysqli_num_rows($result_set)." Records found."."<hr>";
    //echo "Query is successful";

    $table='<table>';
    $table .='<tr><th>UserID</th><th>Email</th><th>Password</th></tr>';
   while($record=mysqli_fetch_assoc($result_set))
   {
     $table .='<tr>';
     $table .= '<td>'. $record['UserID']. '</td>';
     $table .= '<td>'. $record['Email']. '</td>';
     $table .= '<td>'. $record['Password']. '</td>';
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