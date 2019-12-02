<html>
	<head>
		<title>edit</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID = $_GET['id'];
		$sql ="select * from matapelajaran_santri where id = $ID";
		$result = mysqli_query($connect,$sql);
		$row  =mysqli_fetch_assoc($result);
		?>
			<form action="proses_edit.php" method="POST">
				<input type="hidden" value=<?= $_GET['id']?>" name="id">
				Nama :
				
				<select name="nama">
				<?php
				include 'koneksi.php';
				$sql = "select id,nama from user";
				$result = mysqli_query($connect,$sql);
				
				if (mysqli_num_rows($result)>0) {
					while($row = mysqli_fetch_assoc($result)) {
					
							if ($row['id'] == $row1['nama']) {
								echo "<option value='$row[id]' selected>$row[nama]</option>";
								} else {
								echo "<option value='$row[id]'>$row[nama]</option>";
							} 
					}
				}
				?>
				</select>
				<br><br>
				
				Mata Pelajaran:
				
				<select>
					<?php
					include 'koneksi.php';
					$sql = "select id,matapelajaran from mata_pelajaran";
				$result = mysqli_query($connect,$sql);
				
				if (mysqli_num_rows($result)>0) {
					while($row = mysqli_fetch_assoc($result)) {
					
							if ($row['id'] == $row1['matapelajaran']) {
								echo "<option value='$row[id]' selected>$row[matapelajaran]</option>";
								} else {
								echo "<option value='$row[id]'>$row[matapelajaran]</option>";
							} 
					}
				}
				?>
					</select>
			</form>
	</body>
</html>
