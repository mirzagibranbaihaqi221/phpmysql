<html>
	<head>
		<title>tugas database</title>
	</head>
		<body>
			<a href="tambah.php">tambah data</a>
			<br>
			<br>
			<table border="1" cellpadding="10">
				<tr>
					<td>NO</td>
					<td>NAMA</td>
					<td>EMAIL</td>
					<td>PASSWORD</td>
					<td>TANGGAL LAHIR</td>
					<td>edit dan hapus</td>
				</tr>
				<?php
				include 'koneksi.php';
				$nomor  = 1;
				$sql    = "select * from user";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)){
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['nama']."</td>
						<td>".$row['email']."</td>
						<td>".$row['password']."</td>
						<td>".$row['tanggal_lahir']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'>Edit</a>
							<a href='delete.php?id=".$row['id']."'onclick='javascript:return confirm(\"anda serius ingin menghapus data ini\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
				?>
			</table>
		</body>
</html>
