<html>
	<head>
		<title>Latihan</title>
	</head>
	<body>
		<a href="tambah.php">Tambah Data</a>
		<br>
		<br>
		<table border="1" cellpadding="10">
			<tr>
				<td>No</td>
				<td>NIM</td>
				<td>Nama</td>
				<td>Email</td>
				<td>Alamat</td>
				<td></td>
			</tr>
			<?php
			include 'koneksi.php';
			$nomor  = 1;
			$sql    = "select * from mahasiswa";
			$result = mysqli_query($connect,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['nim']."</td>
						<td>".$row['nama']."</td>
						<td>".$row['email']."</td>
						<td>".$row['alamat']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'>Edit</a>
							<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah anda yakin ingin menghapus data ini?\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			?>
		</table>
	</body>
</html>
