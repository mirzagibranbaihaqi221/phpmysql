<?php
$servername = "localhost";
$username   = "root";
$password   = "123456";
$dbname     = "latihan";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE mahasiswa (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
nim VARCHAR(30) NOT NULL,
nama VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
alamat VARCHAR(100)
)";
mysqli_query($connect, $sql)
// if (mysqli_connect_error()) {
//     die("Database connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>