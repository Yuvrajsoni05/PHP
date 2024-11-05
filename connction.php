<?php
$Servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($Servername,$username,$password);

if ($conn)
{
    echo "Connction Successfully";
}
else
{
    echo "Connction Failed".mysqli_connect_error();
}

?>
