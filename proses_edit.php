<?php
include 'koneksi.php';
$ID    = $_POST['id'];
$nim    = $_POST['nim'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', email = '$email', alamat = '$alamat' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>