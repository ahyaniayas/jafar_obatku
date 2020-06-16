<?php include_once "_part/header.php" ?>
	<?php
		include './_part/koneksi.php';
    $obat = array("", "", "", "", "", "", "", "", "", "");
    if(isset($_POST['proses'])){
      $obat = array();
      $obat[] = $_POST['obat1'];
      $obat[] = $_POST['obat2'];
      $obat[] = $_POST['obat3'];
      $obat[] = $_POST['obat4'];
      $obat[] = $_POST['obat5'];
      $obat[] = $_POST['obat6'];
      $obat[] = $_POST['obat7'];
      $obat[] = $_POST['obat8'];
      $obat[] = $_POST['obat9'];
      $obat[] = $_POST['obat10'];

      $whereCek = "";
      for($i=0; $i<count($obat); $i++){
        for($ii=0; $ii<count($obat); $ii++){
          if($obat[$i]!=$obat[$ii] && (!empty($obat[$i]) && !empty($obat[$ii]))){
            $obat1 = $obat[$i];
            $obat2 = $obat[$ii];
            $whereCek .= "kode_obat='$obat1,$obat2' OR kode_obat='$obat2,$obat1' OR ";
          }
        }
      }
      $whereCek = !empty($whereCek)? rtrim($whereCek, " OR "): "0";
      $whereCek = "WHERE ".$whereCek;
    
      $sqlCek = "SELECT * FROM interaksi $whereCek";
      $rowCek = $koneksi->prepare($sqlCek);
      $rowCek->execute();
      $hasilCek = $rowCek->fetchAll(PDO::FETCH_OBJ);
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
                <option value="<?= $isi->kode_obat ?>" <?= $obat[0]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
                <option value="<?= $isi->kode_obat ?>" <?= $obat[1]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
                <option value="<?= $isi->kode_obat ?>" <?= $obat[2]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 4</span>
              </div>
              <select class="form-control" name="obat4">
                <option value="">--- Pilih Obat 4 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>" <?= $obat[3]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
                <option value="<?= $isi->kode_obat ?>" <?= $obat[4]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 6</span>
              </div>
              <select class="form-control" name="obat6">
                <option value="">--- Pilih Obat 6 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>" <?= $obat[5]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 7</span>
              </div>
              <select class="form-control" name="obat7">
                <option value="">--- Pilih Obat 7 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>" <?= $obat[6]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 8</span>
              </div>
              <select class="form-control" name="obat8">
                <option value="">--- Pilih Obat 8 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>" <?= $obat[7]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>
  
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 9</span>
              </div>
              <select class="form-control" name="obat9">
                <option value="">--- Pilih Obat 9 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>" <?= $obat[8]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Obat 10</span>
              </div>
              <select class="form-control" name="obat10">
                <option value="">--- Pilih Obat 10 ---</option>
                <?php foreach($hasil as $isi){ ?>
                <option value="<?= $isi->kode_obat ?>" <?= $obat[9]==$isi->kode_obat? "selected": "" ?>><?= $isi->nama_obat ?></option>
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
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Obat</th>
            <th>Interaksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($hasilCek)){ ?>
          <?php 
          $no=0; 
          foreach($hasilCek as $isiCek){ 
            $no++; 

            $kode_obat = explode(",", $isiCek->kode_obat);
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
            <td><?= $no ?></td>
            <td><?= $nama_obat ?></td>
            <td><?= $isiCek->interaksi ?></td>
          </tr>
          <?php } ?>
          <?php }else{ ?>
          <tr>
            <td colspan="4" style="text-align: center;">*** Interaksi tidak ditemukan ***</td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- ====================== END BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "_part/footer.php" ?>