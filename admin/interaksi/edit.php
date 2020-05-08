<?php include_once "../_part/header.php" ?>

	<?php
		include '../../_part/koneksi.php';

		$kode_interaksi = $_GET['kode_interaksi'];

		$sqlEdit = "SELECT * FROM interaksi WHERE kode_interaksi='$kode_interaksi'";
		$rowEdit = $koneksi->prepare($sqlEdit);
		$rowEdit->execute();
		$isiEdit = $rowEdit->fetch(PDO::FETCH_OBJ);

		$nama_interaksi = $isiEdit->nama_interaksi;
		$interaksi = $isiEdit->interaksi;
        $kode_obat = explode(",", $isiEdit->kode_obat);
	?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Edit Interaksi</h1>
		  <hr class="garis-judul"/>
      <!-- ====================== BAGIAN ISI ATAS ====================== -->

      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
		<div class="row">
			<div class="col-lg-12 text-right">
				<a href="./index.php" class="btn btn-primary">Kembali</a>
			</div>
		</div>
		<?php
	        $sql = "SELECT * FROM obat ORDER BY nama_obat";
	        $row = $koneksi->prepare($sql);
	        $row->execute();
	        $hasil = $row->fetchAll(PDO::FETCH_OBJ);
     	?>
	      <form action="./proses.php" method="POST">
			<div class="form-group">
	        	<h5 class="col-lg-12">Nama Interaksi</h5>
	        	<input type="text" class="form-control" name="nama_interaksi" value="<?= $nama_interaksi ?>" placeholder="Nama Interaksi">
	        </div>
	        <div class="row">
	          <div class="col-lg-6">

	            <div class="input-group mb-3">
	              <div class="input-group-prepend">
	                <span class="input-group-text">Obat 1</span>
	              </div>
	              <select class="form-control" name="obat1">
	                <option value="">--- Pilih Obat 1 ---</option>
	                <?php foreach($hasil as $isi) { ?>
	                <option value="<?= $isi->kode_obat ?>" <?= $kode_obat[0]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
	                <option value="<?= $isi->kode_obat ?>" <?= $kode_obat[1]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
	                <option value="<?= $isi->kode_obat ?>" <?= $kode_obat[2]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
	                <option value="<?= $isi->kode_obat ?>" <?= $kode_obat[3]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
	                <option value="<?= $isi->kode_obat ?>" <?= $kode_obat[4]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
	                <option value="<?= $isi->kode_obat ?>" <?= $kode_obat[5]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
	                <?php } ?>
	              </select>
	            </div>
	          </div>
	        </div>
	        <div class="form-group">
	        	<h5 class="col-lg-12">Interaksi</h5>
	        	<textarea class="form-control" name="interaksi" placeholder="Keterangan Interaksi"><?= $interaksi ?></textarea>
	        </div>
	        <div class="form-group">
	        	<div class="text-right">
	        		<input type="hidden" name="kode_interaksi" value="<?= $kode_interaksi ?>">
	        		<button type="submit" name="proses" value="edit" class="btn btn-primary">Edit Interaksi</button>
	        	</div>
	        </div>
	      </form>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>
<?php include_once "../_part/footer.php" ?>