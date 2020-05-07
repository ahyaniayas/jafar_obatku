<?php include_once "_part/header.php" ?>
  <?php
    include './_part/koneksi.php';
    if(isset($_GET['kode_obat'])){
    $kode_obat = $_GET['kode_obat']; 
  }
  ?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Kamus Obat</h1>
		  <hr class="garis-judul"/>
      <!-- ====================== BAGIAN ISI ATAS ====================== -->

      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
      <table id="example" class="table table-striped">
        <thead>
          <tr>
            <!-- perhatikan -->
            <th>No</th>  <!-- ini kolom ke 0 -->
            <th>Nama</th> <!-- ini kolom ke 1 -->
            <th>Indikasi</th> <!-- dan seterusnya -->
            <th>Dosis</th>
            <th>Pemberian</th>
            <th>Kontraindikasi</th>
            <th>Efek Samping</th>
            <th>Kategori Hamil dan Menyusui</th>
            <th>Interaksi Obat</th>
            <th>Mekanisme Obat</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        $sql = "SELECT * FROM obat where kode_obat=?";
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
            <td><?php echo $isi->indikasi; ?></td>
            <td><?php echo $isi->dosis; ?></td>
            <td><?php echo $isi->pemberian; ?></td>
            <td><?php echo $isi->kontraindikasi; ?></td>
            <td><?php echo $isi->efeksamping; ?></td>
            <td><?php echo $isi->hamilbusui; ?></td>
            <td><?php echo $isi->interaksi_obat; ?></td>
            <td><?php echo $isi->mekanisme_obat; ?></td>                                                
          </tr>

        <?php } ?>
        </tbody>
      </table>    	
      </div>
      </div>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "_part/footer.php" ?>