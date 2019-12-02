<html>
	<head>
	<title> edit</title>
	</head>
	<body>
		<?php
			include 'koneksi.php';
			$ID = $_GET['id'];
			$sql = "select * from mata_pelajaran where id=$ID";
			$result = mysqli_query($connect,$sql);
			$row = mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID;?>">
			Mata Pelajaran : <br>
			<input type="name" name="matapelajaran" >
			<input type="submit" value="Submit">
			</form>
	</body>
</html>
