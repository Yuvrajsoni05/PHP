<html>
<head>
<title>Factorial </title>

</head>
<body>

<form method = "post">

<input type="number" name="number" placeholder="Enter Number">
<input type="submit" value="submit">



</form>
<?php 

function fac($n){
	$res = 1;
	for($i = 1 ; $i <= $n; $i++){
		$res *= $i ;
	}
	return $res;
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$number = $_POST['number'];
	$res = fac($number);
	echo $res;
	
}

?>

</body>
</html>
