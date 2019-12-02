<?php
include 'koneksi.php';
$ID           =$_POST['id'];
$nama         =$_POST['nama'];
$email        =$_POST['email'];
$password     =$_POST['password'];
$tanggal_lahir=$_POST['tanggal_lahir'];

$sql = "UPDATE user SET nama = '$nama', email = '$email', password = '$password', tanggal_lahir = '$tanggal_lahir' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
