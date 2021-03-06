<?php include_once "../_part/header.php" ?>
<?php 
include('../../_part/koneksi.php');
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
                    <tbody>
                    <?php 
                        $sql = "SELECT * FROM obat";
                        $row = $koneksi->prepare($sql);
                        $row->execute();
                        $hasil = $row->fetchAll(PDO::FETCH_OBJ);
                        $no = 0;
                        foreach($hasil as $isi){
                          $no++;
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $isi->nama_obat; ?></td>
                                <td><?php echo $isi->gol_obat; ?></td>
                                <td><?php echo $isi->indikasi; ?></td>
                                <td><?php echo $isi->dosis; ?></td>
                                <td><?php echo $isi->pemberian; ?></td>
                                <td><?php echo $isi->kontraindikasi; ?></td>
                                <td><?php echo $isi->efeksamping; ?></td>
                                <td><?php echo $isi->hamilbusui; ?></td>
                                <td><?php echo $isi->interaksi_obat; ?></td>
                                <td><?php echo $isi->mekanisme_obat; ?></td>
                                <td><a class='btn btn-info' href="edit.php?kode_obat=<?php echo $isi->kode_obat; ?>">Ubah</a>
                                <a class='btn btn-danger' href="proses_hapus.php?kode_obat=<?php echo $isi->kode_obat; ?>">Hapus</a></td>
                            </tr>
                        <?php } ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </body>
</html>
<?php include_once "../_part/footer.php" ?>