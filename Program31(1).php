<?php
if (isset($_POST['submit'])) {
    $n = $_POST['no'];
    $t = $n;
    $s = 0;

    while($n != 0) {
        $d = $n % 10;
        $s = $s + ($d * $d * $d);
        $n = $n / 10;  // Ensuring $n becomes an integer
    }

    if ($t == $s) {
        echo "Armstrong number";
    } else {
        echo "Not an Armstrong number";
    }
}
?>
<html>
 <body>
 <div>
 <form action="" method="post">
 <table> 
 <tr>
 <td><input type="number" name="no" placeholder="Enter Three-Digit Number"/></td>
 </tr>
 <tr>
 <td>
 <input type="submit" name="submit" value="Check"/> 
 </td> 
 </tr>
 </table> 
 </form>
 </div>
 </body>
</html>
