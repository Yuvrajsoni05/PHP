<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
<form method="post">
    <input type="number" name="number1">
    <br><br>
    <input type="number"name="number2">
    <br>
    <input type="submit" name="submit"value="add">
    <input type="submit" name="submit"value="sub">
    <input type="submit" name="submit"value="mul">
    <input type="submit" name="submit"value="div">
</form>
<?php



    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $result = 0;
    $sub_value = $_POST['submit']

    if($sub_value = 'add')
    // $sum = $number1 + $number2;

    // echo "The sum of $number1 and $number2 is ".$sum;

    




?>
    
</body>
</html>