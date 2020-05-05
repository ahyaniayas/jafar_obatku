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
	if(isset($_GET['kode_interaksi'])){
 		$kode_interaksi = $_GET['kode_interaksi']; 
 		$data_interaksi = $lib->get_by_id($kode_interaksi);
	}
	else
	{
   		header('Location:index.php');
	}
	if(isset($_POST['update'])){
	    $kode_interaksi = $_POST['kode_interaksi'];		
		$nama_interaksi = $_POST['nama_interaksi'];
		$interaksi = $_POST['interaksi'];
		$kode_obat = $_POST['kode_obat'];
	    $status_update = $lib->update($kode_interaksi, $nama_interaksi, $interaksi, $kode_obat);
	    if($status_update)
	    {
	        header('Location:index.php');
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
	<h3 class="text3">Ubah Interaksi</h3>
		<form action="" method="POST">
			<div class="tabel">
			<input type="hidden" name="kode_interaksi" value="<?php echo $data_interaksi['kode_interaksi']; ?>"/>
			<div class="form-group">
				<label for="nama_interaksi">Nama Interaksi :</label>
				<input type="text" class="form-control" id="nama_interaksi" value="<?php echo $data_interaksi['nama_interaksi']; ?>" name="nama_interaksi">
			</div>
			<div class="form-group">
				<label for="interaksi">Interaksi :</label>
				<input type="text" class="form-control" id="interaksi" value="<?php echo $data_interaksi['interaksi']; ?>" name="interaksi">
			</div>
			<div class="form-group">
				<label for="indikasi">Kode Obat :</label>
				<input type="text" class="form-control" id="kode_obat" value="<?php echo $data_interaksi['kode_obat']; ?>" name="kode_obat">
			</div>									
				<button class="btn btn-success" type="submit" name="update">Simpan Perubahan</button>
		<br/>
		<br/>
		</div>
	</div>
	</form>
	</body>
</html>
<?php include_once "../_part/footer.php" ?>