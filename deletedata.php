<?php
	include 'koneksi.php';
	include 'delete.php';
	$nik=$_GET['nik'];
	$deleteData=new DeleteData();
	$deleteData -> delete($nik,$koneksi);
	header("location: index.php");
?>