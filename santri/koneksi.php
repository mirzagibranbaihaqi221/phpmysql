<?php
$servername = "localhost";
$username   = "root";
$password   = "1234";
$dbname    	= "maperu";

//kita bkin koneksunya bro :)
$connect = mysqli_connect($servername, $username, $password, $dbname);

//buat cek koneksi
if (!$connect) {
			die("connection failed:" .mysql_connect_error());
}

$sql = "CREATE TABLE user (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
tanggal_lahir DATE NOT NULL
)";
mysqli_query($connect, $sql);
?>
