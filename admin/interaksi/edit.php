<?php include_once "../_part/header.php" ?>
<?php
include "../../_part/koneksi.php";
 
$sql = $koneksi->prepare("SELECT * FROM interaksi WHERE kode_interaksi = :kode_interaksi ");
$sql->bindParam(":kode_interaksi", $_GET['kode_interaksi']);
$sql->execute();
while($row=$sql->fetch())
{
?>
	<div class="tambah">
	<center><h2 class="text1">Data Interaksi</h2></center>
	<!-- caranya gini -->
	<!-- "./" ini untuk menggunakan folder saat ini berarti ini posisinya di -->
	<!-- localhost/jafar_obatku/admin/obat/ -->
	<!-- nah selanjutnya kita tinggal panggil filnya. misal proses.php -->
	<!--  -->
	<center><p class="text2"><a href="index.php">Halaman Awal</a></p></center>
	<h3 class="text3">Ubah Interaksi</h3>
		<form action="./proses.php" method="POST">
			<div class="tabel">
			<input type="hidden" name="kode_interaksi" value="<?php echo $row['kode_interaksi']; ?>"/>
			<div class="form-group">
				<label for="nama_interaksi">Nama Interaksi :</label>
				<input type="text" class="form-control" id="nama_interaksi" value="<?php echo $row['nama_interaksi']; ?>" name="nama_interaksi">
			</div>
			<div class="form-group">
				<label for="interaksi">Interaksi :</label>
				<input type="text" class="form-control" id="interaksi" value="<?php echo $row['interaksi']; ?>" name="interaksi">
			</div>
			<div class="form-group">
				<label for="indikasi">Kode Obat :</label>
				<input type="text" class="form-control" id="kode_obat" value="<?php echo $row['kode_obat']; ?>" name="kode_obat">
			</div>									
				<button type="submit" class="btn btn-success" name="proses" value="edit">Simpan Perubahan</button>
		<br/>
		<br/>
		</div>
	</div>
	</form>
</div>
<?php } ?>
<?php include_once "../_part/footer.php" ?>