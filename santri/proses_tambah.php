<?php
include 'koneksi.php';
$nama          = $_POST['nama'];
$email         = $_POST['email'];
$password      = $_POST['password'];
$tanggal_lahir = $_POST['tanggal_lahir'];

$sql = "insert into user (nama, email, password, tanggal_lahir)
values ('$nama','$email','$password','$tanggal_lahir')";
mysqli_query($connect,$sql);
header('location:index.php');
?>
