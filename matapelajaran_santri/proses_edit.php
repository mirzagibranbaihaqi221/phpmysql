<?php
	include 'koneksi.php';
	$ID		=$_POST['id'];
	$nama =$_POST['nama'];
	$matapelajaran =$_POST['matapelajaran'];
	$nilaiangka =$_POST['nilaiangka'];
	$nilaihuruf =$_POST['nilaihuruf'];
	
	$sql = "UPDATE matapelajaran_santri SET  nama='$nama',matapelajaran='$matapelajaran',nilaiangka='$nilaiangka',
	nilaihuruf'$nilaihuruf' WHERE id = '$ID'";
	mysqli_query($connect,$sql);
	header('location:index.php');
?>
