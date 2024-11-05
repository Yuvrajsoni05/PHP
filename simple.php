
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
function factorial($n){
	
	$res = 1;
	
	for($i = 1; $i <= $n ; $i++){
		$res *= $i ;
	}
	return $res;
	
}
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$num = $_POST['number'];
		$res = factorial($num);
		echo "This is your factorial ".$res ; 
	}




?>

</body>
</html>
