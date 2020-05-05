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
	if(isset($_GET['kode_obat'])){
 		$kode_obat = $_GET['kode_obat']; 
 		$data_obat = $lib->get_by_id($kode_obat);
	}
	else
	{
   		header('Location:index.php');
	}
	if(isset($_POST['update'])){
	    $kode_obat = $_POST['kode_obat'];		
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
	    $status_update = $lib->update($kode_obat, $nama_obat, $gol_obat, $indikasi, $dosis, $pemberian, $kontraindikasi, $efeksamping, $hamilbusui, $interaksi_obat, $mekanisme_obat);
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
	<center><h2 class="text1">Data Obat</h2></center>
	<!-- caranya gini -->
	<!-- "./" ini untuk menggunakan folder saat ini berarti ini posisinya di -->
	<!-- localhost/jafar_obatku/admin/obat/ -->
	<!-- nah selanjutnya kita tinggal panggil filnya. misal proses.php -->
	<!--  -->
	<center><p class="text2"><a href="edit.php">Halaman Awal</a></p></center>
	<h3 class="text3">Ubah Obat</h3>
		<form action="" method="POST">
			<div class="tabel">
			<input type="hidden" name="kode_obat" value="<?php echo $data_obat['kode_obat']; ?>"/>
			<div class="form-group">
				<label for="nama_obat">Nama Obat :</label>
				<input type="text" class="form-control" id="nama_obat" value="<?php echo $data_obat['nama_obat']; ?>" name="nama_obat">
			</div>
			<div class="form-group">
				<label for="gol_obat">Golongan Obat :</label>
				<input type="text" class="form-control" id="gol_obat" value="<?php echo $data_obat['gol_obat']; ?>" name="gol_obat">
			</div>
			<div class="form-group">
				<label for="indikasi">Indikasi :</label>
				<input type="text" class="form-control" id="indikasi" value="<?php echo $data_obat['indikasi']; ?>" name="indikasi">
			</div>				
			<div class="form-group">
				<label for="dosis">Dosis :</label>
				<input type="text" class="form-control" id="dosis" value="<?php echo $data_obat['dosis']; ?>" name="dosis">
			</div>
			<div class="form-group">
				<label for="pemberian">Pemberian :</label>
				<input type="text" class="form-control" id="pemberian" value="<?php echo $data_obat['pemberian']; ?>" name="pemberian">
			</div>
			<div class="form-group">
				<label for="kontraindikasi">Kontraindikasi :</label>
				<input type="text" class="form-control" id="kontraindikasi
				" value="<?php echo $data_obat['kontraindikasi']; ?>" name="kontraindikasi">
			</div>
			<div class="form-group">
				<label for="efeksamping">Efek Samping :</label>
				<input type="text" class="form-control" id="efeksamping" value="<?php echo $data_obat['efeksamping']; ?>" name="efeksamping">
			</div>	
			<div class="form-group">
				<label for="hamilbusui">Kategori Hamil dan Menyusui :</label>
				<input type="text" class="form-control" id="hamilbusui" value="<?php echo $data_obat['hamilbusui']; ?>" name="hamilbusui">
			</div>
			<div class="form-group">
				<label for="interaksi_obat">Interaksi Obat :</label>
				<input type="text" class="form-control" id="interaksi_obat" value="<?php echo $data_obat['interaksi_obat']; ?>" name="interaksi_obat">
			</div>				
			<div class="form-group">
				<label for="mekanisme_obat">Mekanisme Obat :</label>
				<input type="text" class="form-control" id="mekanisme_obat" value="<?php echo $data_obat['mekanisme_obat']; ?>" name="mekanisme_obat">
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