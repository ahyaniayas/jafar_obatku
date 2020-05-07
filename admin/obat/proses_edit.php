<?php
include "../../_part/koneksi.php";

{
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
echo $sql->rowCount() . " Record update successfully";
}
$koneksi = null;
header("location:index.php");
?>