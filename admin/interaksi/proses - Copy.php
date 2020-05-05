<!-- pada page ini fungsi nya adalah untuk mengekseskusi ketika kita klik sumbit dan akan mengeksekuysi nya untuk memasukan ke database -->
<?php
if(!empty($_POST["tambah"])){
	include_once("../../_part/koneksi.php"); 
// include yang berarti memasukan koneksi.php yang sudah di buat tadi yang berfungsi mengatur host, username, dan juga database yang sudah di buat tadi
		$kode_interaksi = isset($_POST[';kode_interaksi']) ? $_POST['kode_interaksi'] : "";
		$nama_interaksi = $_POST['nama_interaksi'];
		$interaksi = $_POST['interaksi'];
		$kode_obat = $_POST['kode_obat'];
// dan di atas adalah variabel yang nanti nya akan di pake untuk di bawah ini untuk memasukan ke database pada saat kita klik submit
$simpan = ("INSERT INTO interaksi (kode_interaksi, nama_interaksi, interaksi, kode_obat) VALUES ('$kode_interaksi','$nama_interaksi','$interaksi','$kode_obat')");
        
$input = mysqli_query($koneksi, $simpan); 
// di atas adalah coding untuk mengeksekusi ketika kita klik sumbit dan akan di masukan ke database

	if($input){

		echo 'data berhasil disimpan <a href = "view.php">Kembali</a>'; 
// logika jika input berhasil maka akan tampil seperti di atas
	}else{

		echo 'gagal menambahkan data <a href = "view.php">Kembali</a>';
// tapi jika gagal input maka akan keluar seperti di atas
	}


	}else{
		echo '<script>window.history.back()</script>';
// untuk menetralisir pada saat kita klik back di browser
}

?>