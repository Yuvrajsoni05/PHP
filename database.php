<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn =  mysqli_connect($servername, $username, $password);
if(!$conn)
{
    echo"Failed Coonection ".mysqli_connect_error();
}

$sql = "CREATE DATABASE istar2 ";

if(mysqli_query($conn, $sql))
{
    echo "Database Created ";
}
else{
    echo "Error ".mysqli_error($conn);
}
mysqli_close($conn);
?>


