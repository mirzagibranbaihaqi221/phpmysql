<html>
	<head>
		<title>mengedit data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID  		=$_GET['id'];
		$sql    ="select * from user where id = $ID";
		$result =mysqli_query($connect,$sql);
		$row 		=mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID;?>">
			NAMA : <br>
			<input type="text" name="nama" value="<?php echo $row['nama']?>"><br>
			EMAIL : <br>
			<input type="email" name="email" value="<?php echo $row['email']?>"><br>
			PASSWORD : <br>
			<input type="password" name="password" value="<?php echo $row['password']?>"><br>
			TANGGAL LAHIR :<br>
			<input type="date" name="tanggal_lahir" value="<?php
			echo $row['tanggal_lahir']?>"><br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>
