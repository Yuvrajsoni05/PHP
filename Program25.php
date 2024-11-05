<?php

$x = "Yuvraj soni";
echo "This is String  ".$x;


$int = 42;
echo "This Integer: ".$int;
echo "<br>";


$floatVar = 3.14;
echo "Float: ";
var_dump($floatVar);
echo "<br>";

$True = true;
$False = false;
echo "Boolean:  ".$True , $False;
echo "<br>";


$a = array("Yuvraj","Yash","Yuvi");
echo "I like ".$a[0]." ".$a[1]." ".$a[2]; 
echo "<br><br>";

class MyClass {
    public $property1 = "I am a property";
}
$objectVar = new MyClass();
echo "Object: ";
var_dump($objectVar);
echo "<br>";

?>
