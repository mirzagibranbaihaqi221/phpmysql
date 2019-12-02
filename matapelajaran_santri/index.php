<html>
<head>
	<title>matapelajaran santri</title>
</head>
<body>
	<a href="tambah.php">Tambah data</a>
	<br><br>
	<table border ="1" cellpadding="10">
		<tr>
			<td>No</td>
			<td>Nama Santri</td>
			<td>Mata Pelajaran</td>
			<td>Nilai Angka</td>
			<td>Nilai Huruf</td>
			<td>Edit</td>
			<td>DELETE</td>
		
		</tr>
		<?php
		include 'koneksi.php';
		
		function santri($id,$connect){
			$sql = "select * from user where id=".$id;
			$result = mysqli_query($connect,$sql);
			$row = mysqli_fetch_assoc($result);
			return $row['nama'];
		}
			function maperu($id,$connect) {
					$sql = "select * from mata_pelajaran where id=".$id;
					$return = mysqli_query($connect,$sql);
					$row =mysqli_fetch_assoc($return);
					return $row['matapelajaran'];
			}
		
			
			$nomor  = 1;
			$sql	  = "SELECT * FROM matapelajaran_santri";
			$result = mysqli_query($connect,$sql);
			
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?= $nomor++ ?></td>
				<td><?= santri($row['nama'], $connect) ?></td>
				<td><?= maperu($row['matapelajaran'], $connect) ?></td>
				<td><?= $row['nilaiangka'] ?></td>
				<td><?= $row['nilaihuruf'] ?></td>
				<td><a href="edit.php?id=<?= $row['id'];?>">Edit</a></td>
				<td><a href="delet.php?id=<?= $row['id'];?>">Delete</a></td>
			</tr>
			<?php
		
			}

		?>
		
	</table>
</body>
</html>
