<?php
include 'koneksi.php';
$nim    = $_POST['nim'];
$nama   = $_POST['nama'];
$email  = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "insert into mahasiswa (nim, nama, email, alamat) values ('$nim','$nama','$email','$alamat')";
mysqli_query($connect,$sql);
header('location:index.php');
?>