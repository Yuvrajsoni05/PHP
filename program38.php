<html>
<head>
    <title>Palindrome Checker</title>
</head>

<body>
    <form method="post">
        <input type="text" name="number" placeholder="Enter Number" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number'];

        $t = $number;  // Store the original number
        $rev = 0;

        // Loop to reverse the number
        while ($number > 0) {
            $var = $number % 10;
            $rev = ($rev * 10) + $var;
            $number = $number / 10;  // Ensure integer division
        }

        // Check if the original number and reversed number are equal
        if ($t == $rev) {
            echo "Number is a palindrome";
        } else {
            echo "Number is not a palindrome";
        }
    }
    ?>
</body>
</html>
