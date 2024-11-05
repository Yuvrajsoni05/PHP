<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program28</title>
</head>

<body>
    <form method="post">
        <input type="number" name="n" value="" placeholder="Enter n value" required>
        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['n'];
        
        $x = 0;
        $y = 1;

        echo "Fibonacci Series: ";
        for($i = 0; $i < $a; $i++) {
            echo $x . " ";
            $c = $x + $y;
            $x = $y;
            $y = $c;
        }
    }
    ?>
</body>
</html>
