<html>
	<head>
		<title>Edit Data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID     = $_GET['id'];
		$sql    = "select * from mahasiswa where id=$ID";
		$result = mysqli_query($connect,$sql);
		$row    = mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>">
			NIM : <br>
			<input type="text" name="nim" value="<?php echo $row['nim']; ?>"><br>
			Nama : <br>
			<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
			Email : <br>
			<input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
			Alamat : <br>
			<input type="text" name="alamat" value="<?php echo $row['alamat']; ?>"><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>