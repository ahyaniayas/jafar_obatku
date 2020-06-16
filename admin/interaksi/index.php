<?php include_once "../_part/header.php" ?>
    <?php
        include '../../_part/koneksi.php';
    ?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Data Interaksi</h1>
          <hr class="garis-judul"/>
      <!-- ====================== BAGIAN ISI ATAS ====================== -->

      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
      <a href="tambah.php" class="btn btn-success mb-5">Tambah Interaksi</a>
      <table id="tabel-interaksi" class="table table-striped" width="100%">
          <thead>
            <tr>
              <th>No</th>    
              <th>Nama Interaksi</th>
              <th>Interaksi</th>
              <th>Obat</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
          <?php 
              $sql = "SELECT * FROM interaksi";
              $row = $koneksi->prepare($sql);
              $row->execute();
              $hasil = $row->fetchAll(PDO::FETCH_OBJ);
              $no = 0;
              foreach($hasil as $isi){
                $no++;

                $kode_obat = explode(",", $isi->kode_obat);
                $nama_obat = "";
                for($i=0; $i<count($kode_obat); $i++){
                  $kode = $kode_obat[$i];
                  $sqlObat = "SELECT nama_obat FROM obat WHERE kode_obat='$kode'";
                  $rowObat = $koneksi->prepare($sqlObat);
                  $rowObat->execute();
                  $isiObat = $rowObat->fetch(PDO::FETCH_OBJ);

                  $nama_obat .= $isiObat->nama_obat.", ";
                }
                $nama_obat = rtrim($nama_obat, ", ");
              ?>
                  <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $isi->nama_interaksi; ?></td>
                      <td><?php echo $isi->interaksi; ?></td>
                      <td><?php echo $nama_obat; ?></td>
                      <td><a class='btn btn-info' href="edit.php?kode_interaksi=<?php echo $isi->kode_interaksi; ?>">Ubah</a><p><br/></p>
                      <a class='btn btn-danger' href="proses.php?kode_interaksi=<?php echo $isi->kode_interaksi; ?>">Hapus</a></td>
                  </tr>
              <?php } ?>
         </tbody>
      </table>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "../_part/footer.php" ?>