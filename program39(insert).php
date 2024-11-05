<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "country";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $cityname = $_POST['cityname'];
    $area = $_POST['area'];
    $population = $_POST['population'];
}

$sql = "INSERT INTO City (cityname, area, population) VALUES ('$cityname', '$area', $population)";

if (mysqli_query($conn, $sql)) {
    echo "New city record inserted successfully!";
} else {
    echo "error  ". mysqli_error($conn);
}


mysqli_close($conn);
?>
