<html>
<head>
<title></title>
</head>

<body>


<form method ="POST">

<input type = "text" name="name" placeholder="Enter Name"><br>
<input type = "password" name="password" placeholder="Enter Password">
<br>
<input type="submit" value="submit" >

</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$name = $_POST['name'];
	$pass = $_POST['password'];
	
	if($name == "yuvraj" && $pass == "1234"){
		
		echo "login succesfully";
	}
	else{
		
		echo "password is not same";
	}
}


?>

</body>
</html>