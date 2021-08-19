<?php
class InputData
		{
			public function insert($nik,$nama,$asal,$valid,$koneksi){
				$sql=mysqli_query($koneksi,"insert into data values ('$nik','$nama','$asal','$valid')");
				if($sql){
					echo "<script>alert('Success')</script>";
					return "<script>window.location('index.php')</script>";	
				}
				else{
					return "<script>window.location('index.php')</script>";			
				}
			}
		}
?>