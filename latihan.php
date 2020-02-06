<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
<body>
<h1 align="center">Bypass my Password</h1>
<form action="" method="POST">
	<label>Nama:</label>
		<input type="text" name="nama">
	<br/>
	<label>Password:</label>
		<input type="password" name="pass">
	<br/>
	<button name="submit">Log In</button>
</form>

<?php

if (isset($_POST["submit"])){
	$nama = $_POST["nama"];
	$pass = $_POST["pass"];
	if($nama && $pass){
		if(strcmp(rand(), $nama) == 0){
			echo "FLAG{W3lc0Me_R1dh0}";
		}else{
			echo "Try Again";
		}
	}else{
		echo "Failed";
	}
}
#echo rand();
#perubahan pada comment
?>

</body>
</html>

