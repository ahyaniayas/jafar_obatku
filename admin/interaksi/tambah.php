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
		$nama_interaksi = $_POST['nama_interaksi'];
		$interaksi = $_POST['interaksi'];
		$kode_obat = $_POST['kode_obat'];
    $add_status = $lib->add_data($nama_interaksi, $interaksi, $kode_obat);
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
	<center><h2 class="text1">Data Interaksi</h2></center>
	<!-- caranya gini -->
	<!-- "./" ini untuk menggunakan folder saat ini berarti ini posisinya di -->
	<!-- localhost/jafar_obatku/admin/obat/ -->
	<!-- nah selanjutnya kita tinggal panggil filnya. misal proses.php -->
	<!--  -->
	<center><p class="text2"><a href="edit.php">Halaman Awal</a></p></center>
	<h3 class="text3">Tambah Interaksi</h3>
		<div class="tabel">
		<form action="" method="POST">
			<div class="form-group">
				<label for="nama_interaksi">Nama Interaksi :</label>
				<input type="text" class="form-control" id="nama_interaksi" placeholder="Nama Interaksi" name="nama_interaksi">
			</div>
			<div class="form-group">
				<label for="interaksi">Interaksi :</label>
				<textarea type="text" class="form-control" id="interaksi" placeholder="Interaksi" name="interaksi"></textarea>
			</div>
			<div class="form-group">
				<label for="kode_obat">Kode Obat :</label>
				<input type="text" class="form-control" id="kode_obat" placeholder="Kode Obat" name="kode_obat">
			</div>				
				<button class="btn btn-success" type="submit" name="tambah">Simpan Interaksi</button>
			<br/>
			<br/>
		</div>
	</div>
	</form>
	</body>
</html>
<?php include_once "../_part/footer.php" ?>