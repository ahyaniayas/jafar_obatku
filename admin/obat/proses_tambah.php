<?php
include "../../_part/koneksi.php";
 
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
 
{
    $sql = "INSERT INTO obat (nama_obat, gol_obat, indikasi, dosis, pemberian, kontraindikasi, efeksamping, hamilbusui, interaksi_obat, mekanisme_obat)
        VALUES ('$nama_obat','$gol_obat','$indikasi','$dosis','$pemberian','$kontraindikasi','$efeksamping','$hamilbusui','$interaksi_obat','$mekanisme_obat')";
    $koneksi->exec($sql);
}
header("location:index.php");
?>