<?php
	$db="karyawan";
	$name="root";
	$pass="";
	$host="localhost";
	$koneksi=mysqli_connect($host,$name,$pass,$db);
	if($koneksi){
		echo "Koneksi Sukses";
	}
	else{
		echo "Koneksi Gagal";
	}

?>