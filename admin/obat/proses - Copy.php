<!-- pada page ini fungsi nya adalah untuk mengekseskusi ketika kita klik sumbit dan akan mengeksekuysi nya untuk memasukan ke database -->
<?php
if(!empty($_POST["tambah"])){
	include_once("../../_part/koneksi.php"); 
// include yang berarti memasukan koneksi.php yang sudah di buat tadi yang berfungsi mengatur host, username, dan juga database yang sudah di buat tadi
		$kode_obat = isset($_POST[';kode_obat']) ? $_POST['kode_obat'] : "";
		$nama_obat = $_POST['nama_obat'];
		$gol_obat = $_POST['gol_obat'];
		$indikasi = $_POST['indikasi'];
		$dosis = $_POST['dosis'];
		$pemberian = $_POST['pemberian'];
		$kontraindikasi = $_POST['kontraindikasi'];
		$efeksamping = $_POST['efeksamping'];
		$hamilbusui = $_POST['hamilbusui'];
		$interaksi_obat = $_POST['interaksi_obat'];
		$mekanisme_obat = $_POST['mekanisme_obat'];
// dan di atas adalah variabel yang nanti nya akan di pake untuk di bawah ini untuk memasukan ke database pada saat kita klik submit
$simpan = ("INSERT INTO obat (kode_obat, nama_obat, gol_obat, indikasi, dosis, pemberian, kontraindikasi, efeksamping, hamilbusui, interaksi_obat, mekanisme_obat) VALUES ('$kode_obat','$nama_obat','$gol_obat','$indikasi','$dosis','$pemberian','$kontraindikasi','$efeksamping','$hamilbusui','$interaksi_obat','$mekanisme_obat')");
        
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