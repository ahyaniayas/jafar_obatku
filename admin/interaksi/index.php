<?php include_once "../_part/header.php" ?>
<?php 
include('proses.php');
$lib = new Library();
$data_interaksi = $lib->show();

if(isset($_GET['hapus_interaksi']))
{
    $kode_interaksi = $_GET['hapus_interaksi'];
    $status_hapus = $lib->delete($kode_interaksi);
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
                <h3 class="text1">Data Interaksi</h3>
            </div>
            <div class="card-body">
                <a href="tambah.php" class="btn btn-success">Tambah Interaksi</a>
                <hr/>
                <table id="example" class="table table-striped" width="60%">
                    <thead>
                    <tr>    
                        <th>No</th>
                        <th>Nama Interaksi</th>
                        <th>Interaksi</th>
                        <th>Kode Obat</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody><?php 
                    $no = 1;
                    foreach($data_interaksi as $row)
                    {
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['nama_interaksi']."</td>";
                        echo "<td>".$row['interaksi']."</td>";
                        echo "<td>".$row['kode_obat']."</td>";
                        echo "<td><a class='btn btn-info' href='edit.php?kode_interaksi=".$row['kode_interaksi']."'>Ubah</a>
                        <a class='btn btn-danger' href='index.php?hapus_interaksi=".$row['kode_interaksi']."'>Hapus</a></td>";
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