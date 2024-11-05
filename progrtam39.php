
<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Connection Failed " .mysqli_connect_error());
}

$sql = "CREATE DATABASE country";
if (mysqli_query($conn , $sql)){
    if (mysqli_select_db($conn, 'country')){
        $sql = "CREATE TABLE city ( id INT(6)UNSIGNED PRIMARY KEY  AUTO_INCREMENT ,cityname  VARCHAR(255),area VARCHAR(255),Population  INT(11) NOT NULL )" ;
        if (mysqli_query($conn , $sql)){
            echo  "Table  created successfully";
    
        }
        else{
            echo "Error creating table ";
        }
    }
   
}
else{
    echo "Error Creating Database " .mysqli_error($conn);
}
mysqli_close($conn)


?>
    
