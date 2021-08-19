<?php
class DeleteData
		{
			//fungsi untuk menghapus data
			public function delete($nik,$koneksi){
				$sql=mysqli_query($koneksi,"delete from data where noinduk='$nik'");
				if($sql){
					echo "<script>alert('Success')</script>";
					return "<script>windows.location('index.php')</script>";	
				}
				else{
					return "<script>window.location('index.php')</script>";			
				}
			}
		}
?>