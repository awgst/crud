<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
</head>
<body>
	<!-- program ini merupakan program untuk menamplkan data karyawan
		dengan menggunakan html dan php.
	-->
	<h1>Data Karyawan</h1>
	<form action="cari.php" method="POST">
		<p>Cari </p><input type="text" name="cari">
		<input type="submit" value="submit">
	</form>
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
			//menamplkan data ke dalam tabel dengan menggunakan fetch_array diman data akan dipecah mdan dikelompokkan menjadi array sesuai indeks dari tabel yang ada di dalam database
			include 'koneksi.php';
			$sql=mysqli_query($koneksi,"select * from data");
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
						<td><a href='validasiData.php'>Validasi</a></td>";	
					}
					?>
				</tr>
			<?php }
		?>
	</table>
	<br>
	<form method="POST">
		<table>
			<tr>
				<td>No Induk</td>
				<td><input type="text" name="nik" required="required"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required="required"></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="asal" required="required"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	<?php
		include 'koneksi.php';
		include 'tambah.php';
		if(!empty($_POST['submit'])){
			$nik=$_POST['nik'];
			$nama=$_POST['nama'];
			$asal=$_POST['asal'];
			$valid=0;
			$input=new InputData();
			$input -> insert($nik,$nama,$asal,$valid,$koneksi);
			header("location: index.php");	
		}
		
	?>
</body>
</html>