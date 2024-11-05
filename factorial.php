<html>
<head>
<title>Fibonaccis</title>
</head>
<body>
<form action="" method="post">

<input type="number"name="num1" placeholder="Enter Your Number">
<input type="submit" value="submit" >

</form>

<?php
function fac($n){
	if($n == 1 || $n == 0){
		return 1;
	}
	elseif($n > 1){
		return $n *fac($n-1);
}
else{
	return "Enter Valid Number";
}
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$num = $_POST['num1'];
	
	echo "Factorial of ".$num."is".fac($num);


}
?>


</body>
</html>
