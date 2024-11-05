<?php


$a = 10; 

function myFunction() {
    global $a; 
    static $b = 0; 
    $c = 5; 
    $b++;
    echo "Global: $a, Static: $b, Local: $c<br>";
	
}

myFunction();
myFunction();
myFunction();
?>
