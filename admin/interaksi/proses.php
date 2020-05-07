<?php
    include '../../_part/koneksi.php';
    if($_POST['proses']=="tambah"){
 
    $nama_interaksi = $_POST['nama_interaksi'];
    $interaksi = $_POST['interaksi'];

    $obat1 = $_POST['obat1'];
    $obat2 = $_POST['obat2'];
    $obat3 = $_POST['obat3'];
    $obat4 = $_POST['obat4'];
    $obat5 = $_POST['obat5'];
    $obat6 = $_POST['obat6'];

    $kode_obat = $obat1.",".$obat2.",".$obat3.",".$obat4.",".$obat5.",".$obat6;

    $sql = "INSERT INTO interaksi 
            (nama_interaksi, interaksi, kode_obat)
            VALUES ('$nama_interaksi','$interaksi','$kode_obat')";
    $row = $koneksi->prepare($sql);
    $row->execute();

    echo "<script>alert('Data Berhasil Disimpan'); location='index.php'</script>";
    
    }elseif($_POST['proses']=="edit"){

    $sql = $koneksi->prepare("UPDATE interaksi SET kode_interaksi = '$_POST[kode_interaksi]',

        nama_interaksi = '$_POST[nama_interaksi]',
        interaksi = '$_POST[interaksi]',
        kode_obat = '$_POST[kode_obat]',
        WHERE kode_interaksi = :kode_interaksi ");

    $sql->bindParam(":kode_interaksi", $_POST['kode_interaksi']);
    $sql->execute();
    echo "<script>alert('Data Berhasil Dirubah'); location='index.php'</script>";
        }
    ;
// untuk hapus
    if(isset($_GET['kode_interaksi'])){
    $sqlhapus = "DELETE FROM interaksi WHERE kode_interaksi = '$_GET[kode_interaksi]' ";
        // use exec() because no results are returned
    $koneksi->exec($sqlhapus);
    echo "<script>alert('Data Berhasil Dihapus'); location='index.php'</script>";
    }
?>