<?php include_once "_part/header.php" ?>
	<?php
		include './_part/koneksi.php';
    $interaksi = '';
    if(isset($_POST['proses'])){

      $obat1 = $_POST['obat1'];
      $obat2 = $_POST['obat2'];
      $obat3 = $_POST['obat3'];
      $obat4 = $_POST['obat4'];
      $obat5 = $_POST['obat5'];
      $obat6 = $_POST['obat6'];

      $kode_obat = $obat1.",".$obat2.",".$obat3.",".$obat4.",".$obat5.",".$obat6;
    
      $sqlcek = "select interaksi from interaksi where kode_obat='$kode_obat'";
      $rowcek = $koneksi->prepare($sqlcek);
      $rowcek->execute();
      $isicek = $rowcek->fetch(PDO::FETCH_OBJ);

      $interaksi = $isicek->interaksi;
    }
?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Cek Interaksi Antar Obat</h1>
		  <hr class="garis-judul"/>
      <!-- ====================== END OF BAGIAN ISI ATAS ====================== -->

      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
      <?php
        $sql = "SELECT * FROM obat ORDER BY nama_obat";
        $row = $koneksi->prepare($sql);
        $row->execute();
        $hasil = $row->fetchAll(PDO::FETCH_OBJ);
      ?>
      <form action="./interaksi.php" method="POST">
        <div class="row">
          <div class="col-lg-6">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 1</span>
              </div>
              <select class="form-control" name="obat1">
                <option value="">--- Pilih Obat 1 ---</option>
                <?php foreach($hasil as $isi) { ?>
                <option value="<?= $isi->kode_obat ?>"><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 2</span>
              </div>
              <select class="form-control" name="obat2">
                <option value="">--- Pilih Obat 2 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>"><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 3</span>
              </div>
              <select class="form-control" name="obat3">
                <option value="">--- Pilih Obat 3 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>"><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 4</span>
              </div>
              <select class="form-control" name="obat4">
                <option value="">--- Pilih Obat 4 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>"><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 5</span>
              </div>
              <select class="form-control" name="obat5">
                <option value="">--- Pilih Obat 5 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>"><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 6</span>
              </div>
              <select class="form-control" name="obat6">
                <option value="">--- Pilih Obat 6 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>"><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="text-right">
              <button type="submit" name="proses" value="cek" class="btn btn-primary">Cek Interaksi</button>
            </div>
          </div>
        
        </div>
      </form>

      <hr>
      <h3>Hasil dan Penjelasan</h3>
      <div class="form-group">
        <textarea class="form-control"><?= $interaksi; ?></textarea>
      </div>
      <!-- ====================== END BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "_part/footer.php" ?>