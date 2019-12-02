<?php
	include 'koneksi.php';
	$nama		= $_POST['nama'];
	$matapelajaran = $_POST['matapelajaran'];
	$nilaiangka =$_POST['nilaiangka'];

	
	if ($nilaiangka ===100){
		$nilaihuruf = "A";
	}	elseif ($nilaiangka < 100 && $nilaiangka >= 80) {
	$nilaihuruf = "B";
	} else {$nilaihuruf = "C";}
	
	
	$sql = "INSERT INTO matapelajaran_santri(nama,matapelajaran,nilaiangka,nilaihuruf) values ('$nama','$matapelajaran','$nilaiangka','$nilaihuruf')";
	
	$result = mysqli_query($connect,$sql);
	header('location:index.php');
	
	
?>
