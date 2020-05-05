<!-- 
pada page atau tambah.php ini berfungsi untuk menampilakn halaman dan fungsi halaman ini adalah untuk meenambahkan data
-->
<!DOCTYPE html>
<?php include_once "../_part/header.php" ?>
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/dataTables.bootstrap4.min.css">
	<script src="../../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="../../assets/plugins/jquery/jquery.dataTables.min.js"></script>
	<script src="../../assets/plugins/bootstrap/js/dataTables.bootstrap4.min.js"></script>
	<script>
	    $(document).ready(function() {
	      $('#example').DataTable();
	    } );
	</script>
<?php
include('proses.php');
$lib = new Library();
if(isset($_POST['tambah'])){
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
    $add_status = $lib->add_data($nama_obat, $gol_obat, $indikasi, $dosis, $pemberian, $kontraindikasi, $efeksamping, $hamilbusui, $interaksi_obat, $mekanisme_obat);
    if($add_status){
    header('index.php');
    }
}
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
	<center><p class="text2"><a href="edit.php">Halaman Awal</a></p></center>
	<h3 class="text3">Tambah Obat</h3>
		<div class="tabel">
		<form action="" method="POST">
			<div class="form-group">
				<label for="nama_obat">Nama Obat :</label>
				<input type="text" class="form-control" id="nama_obat" placeholder="Nama Obat" name="nama_obat">
			</div>
			<div class="form-group">
				<label for="gol_obat">Golongan Obat :</label>
				<input type="text" class="form-control" id="gol_obat" placeholder="Golongan Obat" name="gol_obat">
			</div>
			<div class="form-group">
				<label for="indikasi">Indikasi :</label>
				<textarea type="text" class="form-control" id="indikasi" placeholder="Indikasi" name="indikasi"></textarea>
			</div>				
			<div class="form-group">
				<label for="dosis">Dosis :</label>
				<textarea type="text" class="form-control" id="dosis" placeholder="Dosis" name="dosis"></textarea>
			</div>
			<div class="form-group">
				<label for="pemberian">Pemberian :</label>
				<textarea type="text" class="form-control" id="pemberian" placeholder="Pemberian" name="pemberian"></textarea>
			</div>
			<div class="form-group">
				<label for="kontraindikasi">Kontraindikasi :</label>
				<textarea type="text" class="form-control" id="kontraindikasi
				" placeholder="Kontraindikasi" name="kontraindikasi"></textarea>
			</div>
			<div class="form-group">
				<label for="efeksamping">Efek Samping :</label>
				<textarea type="text" class="form-control" id="efeksamping" placeholder="Efek Samping" name="efeksamping"></textarea>
			</div>	
			<div class="form-group">
				<label for="hamilbusui">Kategori Hamil dan Menyusui :</label>
				<textarea type="text" class="form-control" id="hamilbusui" placeholder="Kategori Hamil dan Menyusui" name="hamilbusui"></textarea>
			</div>
			<div class="form-group">
				<label for="interaksi_obat">Interaksi Obat :</label>
				<textarea type="text" class="form-control" id="interaksi_obat" placeholder="Interaksi Obat" name="interaksi_obat"></textarea>
			</div>				
			<div class="form-group">
				<label for="mekanisme_obat">Mekanisme Obat :</label>
				<textarea type="text" class="form-control" id="mekanisme_obat" placeholder="Mekanisme Obat" name="mekanisme_obat"></textarea>
			</div>					
				<button class="btn btn-success" type="submit" name="tambah">Simpan Obat</button>
			<br/>
			<br/>
		</div>
	</div>
	</form>
	</body>
</html>
<?php include_once "../_part/footer.php" ?>