<?php
class ValidasiData
		{
			public function valid($nik,$koneksi){
				$sql=mysqli_query($koneksi,"UPDATE `Data` SET `validasi`=1 WHERE `noinduk`='$nik'");
				if($sql){
					return "<script>alert('Success')</script>";	
				}
				else{
					return "error";
				}
			}
		}
?>