<html>
<head>
	<title></title>
</head>
<body>
	<form action="proses_tambah.php" method="POST">
			nama :
			<select name="nama">
			<?php
			include 'koneksi.php';
			$sql = "select id,nama from user";
			$result = mysqli_query($connect,$sql);
			
			if (mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
			?>
				<option value="<?=$row['id'];?>">
						<?=$row['nama']; ?>
						</option>
						<?php
								}
						}
						?>
			</select>
			<br></br>
			
			Mata Pelajaran :
			
			<select name="matapelajaran">
			<?php
			include 'koneksi.php';
			$sql ="select id,matapelajaran from mata_pelajaran";
			$result = mysqli_query($connect,$sql);
			
			$nomor = 1;
			if (mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
				?>
						<option value="<?=$row['id'];?>">
							<?=$row['matapelajaran'];?>
						</option>				
			<?php
						}
			}
			?>
			</select>
			<br><br>
			<label>Nilai :
			<input type="number" name="nilaiangka" value="nilai">
			</label>
			<br><br>
			<input type="submit" value="tambah data">
	</form>
</body>
</html>
