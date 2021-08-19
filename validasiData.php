<?php
	include 'koneksi.php';
	include 'validasi.php';
	$nik=$_GET['nik'];
	$valid=new ValidasiData();
	$valid -> valid($nik,$koneksi);
	header("location: index.php");
?>