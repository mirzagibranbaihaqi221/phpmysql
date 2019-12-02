<?php
	include 'koneksi.php';
	
	$matapelajaran = $_POST['matapelajaran'];
	
	$sql = "insert into mata_pelajaran (matapelajaran) values ('$matapelajaran')";
	$data=mysqli_query($connect,$sql);
	header('location:index.php');
	
	if($data){
		echo "berhasil";
	}else{
		echo "gagal";
	}
?>
