<?php include_once "_part/header.php" ?>

	<?php
		include './_part/koneksi.php';
	?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Cek Interaksi Antar Obat</h1>
		  <hr class="garis-judul"/>
      <!-- ====================== BAGIAN ISI ATAS ====================== -->

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
              <button type="submit" class="btn btn-primary">Cek Interaksi</button>
            </div>
          </div>
        
        </div>
      </form>

      <hr>
      <h3>Hasil dan Penjelasan</h3>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "_part/footer.php" ?>