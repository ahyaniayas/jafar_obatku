<?php
include "../../_part/koneksi.php";

{
$sql = "DELETE FROM obat WHERE kode_obat = '$_GET[kode_obat]' ";
 
// use exec() because no results are returned
$koneksi->exec($sql);
}
$koneksi = null;
header("location:index.php");
?>