<?php


$server = "localhost";
$username = "root";
$password = "";
$database = "istar";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn)
{
    die("connection failed ".mysqli_connect_error());

}
$sql = "CREATE TABLE it_db4 (id int(6) unsigned auto_increment primary key , firstname varchar(20) not null, lastname varchar(20) not null,email varchar(20))";
if(mysqli_query($conn, $sql))  {
    echo "table It Dept Created ";
    $s =  "INSERT INTO it_db4(firstname,lastname,email) VALUES ('YUVRAJ','SONI','soniyuvraj@gmail.com')";
    if(mysqli_query($conn, $s))
    {
        echo "Data Inserted" ;
    }

    else{
        echo "Error".$s."<br>".mysqli_error($conn);
    }
 }
else {
    echo "Error ". mysqli_error($conn);
}
mysqli_close($conn);

?>