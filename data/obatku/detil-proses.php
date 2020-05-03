<?php

if(isset($_POST['simpan'])){

	include('koneksi.php');

		$id = $_POST['kode_obat'];

		$nama_obat = $_POST['nama_obat'];

		$indikasi = $_POST['indikasi'];

			$update = mysqli_query($koneksi,"UPDATE nama_obat SET nama_obat='$nama_obat', indikasi='$indikasi' WHERE kode_obat='$id'");

			if($update){
				echo 'data berhasil disimpan <a href="kamus.php">kembali</a>';
			}else{
				echo 'data gagal disimpan <a href="kamus.php">kembali</a>';
			}

		}else{
			echo '<script>windows.history.back()</script>';
		}
?>