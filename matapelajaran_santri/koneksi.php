<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "1234";
	$dbname     = "maperu";
	
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$connect){
		die("connection failed: " . mysqli_connect_error());
	}
	$sql = "CREATE TABLE matapelajaran_santri(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	nama VARCHAR(30) NOT NULL,
	matapelajaran VARCHAR(30) NOT NULL,
	nilaiangka INT(11) NOT NULL,
	nilaihuruf VARCHAR(30) NOT NULL
	)";
	mysqli_query($connect,$sql)
?>
