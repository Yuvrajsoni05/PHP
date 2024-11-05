<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program27</title>
</head>
<body>
    <h1>Arthmetic Opertion</h1>
	
    <h3>1 Addition</h3>
    <h3>2 Subtraction</h3>
    <h3>3 Division</h3>
    <h3>4 Multiplication</h3>
   


    <form method="post">
        <table border="0">
            <tr>
                <td><input type="text" name="num1" value=""placeholder="Enter Value 1"></td>
            </tr>
            <tr>
                <td><input type="text" name="num2" value=""placeholder="Enter Value 2"></td>
            </tr>
            <tr>
                <td><input type="text" name="option" value="" placeholder="Enter value 1-4"></td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>


        </table>

    </form>



<?php
if (isset($_POST['submit'])){
    $a = $_POST['num1'];
    $b =  $_POST['num2'];
    $c = $_POST['option'];

    switch($c){
        case 1:
            $r = $a + $b;
            echo " Addtion of program = ".$r;
            break;
        case 2:
            $r = $a - $b;
            echo " Subtraction of program = ".$r;
            break;
        case 3:
            $r = $a / $b;
            echo " divisition of program = ".$r;
            break;
        case 4:
            $r = $a * $b;
            echo  "Multiplication of program ".$r;
            break;
        default:
        echo ("invalid option");
    }
    return 0;

}
?>

</body>
</html>