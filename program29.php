<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program29</title>
</head>
<body>
<form method="post">
<label>Number 1</label><br>
<input type="number" name="n1" value="" placeholder="Enter Number">
<input type="submit" name="submit">
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $a = $_POST['n1'];
};

if($a % 2 == 0){
    echo "odd";
}
else{
    echo "even";

}
?>


    
</body>
</html>