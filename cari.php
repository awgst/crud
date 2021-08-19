<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
</head>
<body>
	<table>
		<!-- untuk mencari data -->
<table border="1">
		<tr>
			<td>No Induk</td>
			<td>Nama</td>
			<td>Asal</td>
			<td>Tervalidasi</td>
			<td>Action</td>
			<td>Validasi</td>
		</tr>
		<?php
			//pencarian dilakukan dengn sql untuk mencari berdassarkan input yang ada, no induk atau nama, dan dicookkan denga  data yang ada menggunakan operasi LIKE %%
			//menamplkan data ke dalam tabel dengan menggunakan fetch_array diman data akan dipecah mdan dikelompokkan menjadi array sesuai indeks dari tabel yang ada di dalam database
			include 'koneksi.php';
			$pencarian=$_POST['cari'];
			$sql=mysqli_query($koneksi,"select * from data where noinduk LIKE '%$pencarian%' OR nama LIKE '%$pencarian%'");
			while($query=mysqli_fetch_array($sql)){?>
				<tr>
					<td><?=$query['noinduk']?></td>
					<td><?=$query['nama']?></td>
					<td><?=$query['asal']?></td>
					<td><?php 
					$valditas=$query['validasi'];
					if($valditas==1){
						echo "Sudah Tervalidasi";
					}
					else{
						echo "Belum Tervalidasi";	
					}
					?></td>
					<td><a href="editdata.php?nik=<?=$query['noinduk']?>">Edit</a> | <a href="deletedata.php?nik=<?=$query['noinduk']?>">Delete</a></td>
					<?php
					if($valditas==1){
						echo "
						<td></td>";
					}
					else{
						echo "
						<td><a href='validasi.php'>Validasi</a></td>";	
					}
					?>
				</tr>
			<?php }
		?>
	</table>
	<a href="index.php">Kembali</a>
</body>
</html>