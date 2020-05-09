<?php
    include '../../_part/koneksi.php';

    if(!empty($_POST['proses'])){
        if($_POST['proses']=="tambah"){
     
            $nama_interaksi = $_POST['nama_interaksi'];
            $interaksi = $_POST['interaksi'];

            $obat1 = $_POST['obat1'];
            $obat2 = $_POST['obat2'];
            $kode_obat = $obat1.",".$obat2;

            $sql = "INSERT INTO interaksi 
                    (nama_interaksi, interaksi, kode_obat)
                    VALUES ('$nama_interaksi','$interaksi','$kode_obat')";
            $row = $koneksi->prepare($sql);
            $row->execute();

            echo "<script>alert('Data Berhasil Disimpan'); location='index.php'</script>";
        
        }elseif($_POST['proses']=="edit"){

            $kode_interaksi = $_POST['kode_interaksi'];
            $nama_interaksi = $_POST['nama_interaksi'];
            $interaksi = $_POST['interaksi'];

            $obat1 = $_POST['obat1'];
            $obat2 = $_POST['obat2'];
            $kode_obat = $obat1.",".$obat2;

            $sql = "UPDATE interaksi SET 
                nama_interaksi = '$nama_interaksi',
                interaksi = '$interaksi',
                kode_obat = '$kode_obat'
                WHERE kode_interaksi = '$kode_interaksi'";
            $row = $koneksi->prepare($sql);
            $row->execute();
            echo "<script>alert('Data Berhasil Dirubah'); location='index.php'</script>";
        }
    }

    // untuk hapus
    if(isset($_GET['kode_interaksi'])){
        $kode_interaksi = $_GET['kode_interaksi'];
        $sql = "DELETE FROM interaksi WHERE kode_interaksi = '$kode_interaksi'";
        $row = $koneksi->prepare($sql);
        $row->execute();
    echo "<script>alert('Data Berhasil Dihapus'); location='index.php'</script>";
    }
?>