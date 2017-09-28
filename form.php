<?php
if(isset($_POST['submit'])){
	
	$name = array("rainner", "maria", "johndoe", "nathan", "janedoe");
	
	$min = 5;
	$max = 10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(strlen($username) < $minimum){
		echo "Username harus memiliki panjang 5 atau lebih";
	}
	
	if(strlen($username) > $maximum){
		echo "Username tidak boleh lebih panjang dari 10";
	}
	
	if(!in_array($username, $name)){
		echo "maaf, akses ditolak";
	}else{
		echo "selamat datang";
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Forms</title>
</head>
<body>
<form action="form.php" method="post">
	<input type="text" placeholder="Enter Username"/>
	<input type="Password" placeholder="Enter Password"/>
	<br/>
	<input type="submit" name="submit" />
</form>
	
</body>
</html>