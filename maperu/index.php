<html>
<head>
	<title>MAPERU</title>
</head>
<body>
	<a href="tambah.php">Tambah data</a>
	<br><br>
	<table border= "1" cellpadding="10">
		<tr>
			<td>No</td>
			<td>Mata pelajaran</td>
			<td>edit</td>
		</tr>
		<?php
		include 'koneksi.php';
		$nomor = 1;
		$sql   = "SELECT * FROM mata_pelajaran";
		$result= mysqli_query($connect,$sql);
	
		if(mysqli_num_rows($result)>0){
		while ($row = mysqli_fetch_assoc($result)) {
		echo "
		<tr>
			<td>".$nomor++."</td>
			<td>".$row['matapelajaran']."</td>
			<td>
			<a href='edit.php?id=".$row['id']."'>edit</a>
			<a href='delete.php?id=".$row['id']."'onclick='javascript:return confirm(\"apakah anda ingin menghapus data\")'>hapus</a>
		</td>
		</tr>
		";
		}
		}
		?>
		</table>
</body>
</html>
