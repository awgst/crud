<?php
class EditData
		{
			public function edit($nik,$nama,$asal,$koneksi){
				$sql=mysqli_query($koneksi,"UPDATE `Data` SET `noinduk`='$nik',`nama`='$nama',`asal`='$asal' WHERE `noinduk`='$nik'");
				if($sql){
					echo "<script>alert('Success')</script>";
					return "<a href='index.php'>Kembali</a>";	
				}
				else{
					return "Gagal, <a href='index.php'>Kembali</a>";			
				}
			}
		}
?>