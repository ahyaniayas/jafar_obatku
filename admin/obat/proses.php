<?php
	include '../../_part/koneksi.php';
	if($_POST['proses']=="simpan"){
 
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

	$sql = "INSERT INTO obat 
			(nama_obat, gol_obat, indikasi, dosis, pemberian, kontraindikasi, efeksamping, hamilbusui, interaksi_obat, mekanisme_obat)
    		VALUES ('$nama_obat','$gol_obat','$indikasi','$dosis','$pemberian','$kontraindikasi','$efeksamping','$hamilbusui','$interaksi_obat','$mekanisme_obat')";
    $row = $koneksi->prepare($sql);
    $row->execute();
    echo "<script>alert('Data Berhasil Disimpan'); location='index.php'</script>";
	}
	elseif($_POST['proses']=="edit"){

	$sql = $koneksi->prepare("UPDATE obat SET kode_obat = '$_POST[kode_obat]',

	nama_obat = '$_POST[nama_obat]',
	gol_obat = '$_POST[gol_obat]',
	indikasi = '$_POST[indikasi]',
	dosis = '$_POST[dosis]',
	pemberian = '$_POST[pemberian]',
	kontraindikasi = '$_POST[kontraindikasi]',
	efeksamping = '$_POST[efeksamping]',
	hamilbusui = '$_POST[hamilbusui]',
	interaksi_obat = '$_POST[interaksi_obat]',
	mekanisme_obat = '$_POST[mekanisme_obat]'
	WHERE kode_obat = :kode_obat ");

	$sql->bindParam(":kode_obat", $_POST['kode_obat']);
	$sql->execute();
	echo "<script>alert('Data Berhasil Dirubah'); location='index.php'</script>";
		}
	;
// untuk hapus
	if(isset($_GET['kode_obat'])){
	$sqlhapus = "DELETE FROM obat WHERE kode_obat = '$_GET[kode_obat]' ";
	 	// use exec() because no results are returned
	$koneksi->exec($sqlhapus);
	echo "<script>alert('Data Berhasil Dihapus'); location='index.php'</script>";
	}
?>