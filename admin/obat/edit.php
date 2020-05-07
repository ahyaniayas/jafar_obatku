<!DOCTYPE html>
<?php include_once "../_part/header.php" ?>
<?php
include "../../_part/koneksi.php";
 
$sql = $koneksi->prepare("SELECT * FROM obat WHERE kode_obat = :kode_obat ");
$sql->bindParam(":kode_obat", $_GET['kode_obat']);
$sql->execute();
while($row=$sql->fetch())
{
?>
<html>
	<head>
		<title></title>
	</head>
<body>
	<div class="tambah">
	<center><h2 class="text1">Data Obat</h2></center>
	<!-- caranya gini -->
	<!-- "./" ini untuk menggunakan folder saat ini berarti ini posisinya di -->
	<!-- localhost/jafar_obatku/admin/obat/ -->
	<!-- nah selanjutnya kita tinggal panggil filnya. misal proses.php -->
	<!--  -->
	<center><p class="text2"><a href="index.php">Halaman Awal</a></p></center>
	<h3 class="text3">Ubah Obat</h3>
		<form action="proses_edit.php" method="POST">
			<div class="tabel">
			<input type="hidden" name="kode_obat" value="<?php echo $row['kode_obat']; ?>"/>
			<div class="form-group">
				<label for="nama_obat">Nama Obat :</label>
				<input type="text" class="form-control" id="nama_obat" value="<?php echo $row['nama_obat']; ?>" name="nama_obat">
			</div>
			<div class="form-group">
				<label for="gol_obat">Golongan Obat :</label>
				<input type="text" class="form-control" id="gol_obat" value="<?php echo $row['gol_obat']; ?>" name="gol_obat">
			</div>
			<div class="form-group">
				<label for="indikasi">Indikasi :</label>
				<input type="text" class="form-control" id="indikasi" value="<?php echo $row['indikasi']; ?>" name="indikasi">
			</div>				
			<div class="form-group">
				<label for="dosis">Dosis :</label>
				<input type="text" class="form-control" id="dosis" value="<?php echo $row['dosis']; ?>" name="dosis">
			</div>
			<div class="form-group">
				<label for="pemberian">Pemberian :</label>
				<input type="text" class="form-control" id="pemberian" value="<?php echo $row['pemberian']; ?>" name="pemberian">
			</div>
			<div class="form-group">
				<label for="kontraindikasi">Kontraindikasi :</label>
				<input type="text" class="form-control" id="kontraindikasi
				" value="<?php echo $row['kontraindikasi']; ?>" name="kontraindikasi">
			</div>
			<div class="form-group">
				<label for="efeksamping">Efek Samping :</label>
				<input type="text" class="form-control" id="efeksamping" value="<?php echo $row['efeksamping']; ?>" name="efeksamping">
			</div>	
			<div class="form-group">
				<label for="hamilbusui">Kategori Hamil dan Menyusui :</label>
				<input type="text" class="form-control" id="hamilbusui" value="<?php echo $row['hamilbusui']; ?>" name="hamilbusui">
			</div>
			<div class="form-group">
				<label for="interaksi_obat">Interaksi Obat :</label>
				<input type="text" class="form-control" id="interaksi_obat" value="<?php echo $row['interaksi_obat']; ?>" name="interaksi_obat">
			</div>				
			<div class="form-group">
				<label for="mekanisme_obat">Mekanisme Obat :</label>
				<input type="text" class="form-control" id="mekanisme_obat" value="<?php echo $row['mekanisme_obat']; ?>" name="mekanisme_obat">
			</div>					
				<button class="btn btn-success" type="submit" name="update">Simpan Perubahan</button>
		<br/>
		<br/>
		</div>
	</div>
	</form>
	</body>
</html>
<?php } ?>
<?php include_once "../_part/footer.php" ?>