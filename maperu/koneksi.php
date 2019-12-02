<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "1234";
	$dbname     = "maperu";
	
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$connect){
		die("connection failed: " . mysqli_connect_error());
	}
	$sql = "CREATE TABLE mata_pelajaran(
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	matapelajaran VARCHAR(30) NOT NULL
	)";
	mysqli_query($connect, $sql)
?>
