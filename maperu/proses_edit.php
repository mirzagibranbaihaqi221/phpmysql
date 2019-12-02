<?php
include 'koneksi.php';
$ID = $_POST['id'];
$matapelajaran = $_POST['matapelajaran'];
$sql = "UPDATE mata_pelajaran SET matapelajaran = '$matapelajaran' WHERE id = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
