<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<form method="POST">
		<table>
			<?php
			include 'koneksi.php';
			$nik=$_GET['nik'];
			$sql=mysqli_query($koneksi,"select * from data where noinduk='$nik'");
			$query=mysqli_fetch_array($sql)
			?>
			<tr>
				<td>No Induk</td>
				<td><input type="text" name="nik" required="required" value="<?=$query['noinduk']?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" required="required" value="<?=$query['nama']?>"></td>
			</tr>
			<tr>
				<td>Asal</td>
				<td><input type="text" name="asal" required="required" value="<?=$query['asal']?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
	<?php
		include 'koneksi.php';
		include 'edit.php';
		if(!empty($_POST['submit'])){
			$nik=$_POST['nik'];
			$nama=$_POST['nama'];
			$asal=$_POST['asal'];
			$input=new EditData();
			$input -> edit($nik,$nama,$asal,$koneksi);
			header("location: index.php");
		}	
	?>
</body>
</html>