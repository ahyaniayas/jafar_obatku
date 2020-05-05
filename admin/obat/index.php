<?php include_once "../_part/header.php" ?>
<?php 
include('proses.php');
$lib = new Library();
$data_obat = $lib->show();

if(isset($_GET['hapus_obat']))
{
    $kode_obat = $_GET['hapus_obat'];
    $status_hapus = $lib->delete($kode_obat);
    if($status_hapus)
    {
        header('Location: index.php');
    }
}
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="home">
                <h3 class="text1">Data Obat</h3>
            </div>
            <div class="card-body">
                <a href="tambah.php" class="btn btn-success">Tambah Obat</a>
                <hr/>
                <table id="tabel-kamus" class="table table-striped" width="60%">
                    <thead>
                    <tr>    
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Golongan Obat</th>
                        <th>Indikasi</th>
                        <th>Dosis</th>
                        <th>Pemberian</th>
                        <th>Kontraindikasi</th>
                        <th>Efek Samping</th>
                        <th>Kategori Hamil dan Menyusui</th>
                        <th>Interaksi Obat</th>
                        <th>Mekanisme Obat</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody><?php 
                    $no = 1;
                    foreach($data_obat as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_obat']."</td>";
                        echo "<td>".$row['gol_obat']."</td>";
                        echo "<td>".$row['indikasi']."</td>";
                        echo "<td>".$row['dosis']."</td>";
                        echo "<td>".$row['pemberian']."</td>";
                        echo "<td>".$row['kontraindikasi']."</td>";
                        echo "<td>".$row['efeksamping']."</td>";
                        echo "<td>".$row['hamilbusui']."</td>";
                        echo "<td>".$row['interaksi_obat']."</td>";
                        echo "<td>".$row['mekanisme_obat']."</td>";
                        echo "<td><a class='btn btn-info' href='edit.php?kode_obat=".$row['kode_obat']."'>Ubah</a>
                        <a class='btn btn-danger' href='index.php?hapus_obat=".$row['kode_obat']."'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
<?php include_once "../_part/footer.php" ?>