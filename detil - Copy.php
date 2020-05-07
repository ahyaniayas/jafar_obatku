<?php include_once "_part/header.php" ?>

	<?php
		  include('./admin/obat/proses.php');
  $lib = new Library();
  if(isset($_GET['kode_obat'])){
    $kode_obat = $_GET['kode_obat']; 
    $data_obat = $lib->get_by_id($kode_obat);
  }
	?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Kamus Obat</h1>
		  <hr class="garis-judul"/>
      <!-- ====================== BAGIAN ISI ATAS ====================== -->

      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    	<div class="form-group">
        <div class="detil">
        <label class="text1" for="nama_obat">Nama Obat :</label><br/>
        <label class="text2" type="text" class="" id="nama_obat" name="nama_obat">"<?php echo $data_obat['nama_obat']; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="gol_obat">Golongan Obat :</label><br/>
        <label class="text2" type="text" class="" id="gol_obat" name="gol_obat">"<?php echo $data_obat['gol_obat']; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="indikasi">Indikasi :</label><br/>
        <label class="text2" type="text" id="indikasi" name="indikasi">"<?php echo $data_obat['indikasi']; ?>"</label>
      </div>        
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="dosis">Dosis :</label><br/>
        <label class="text2" type="text" id="dosis" name="dosis">"<?php echo $data_obat['dosis']; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="pemberian">Pemberian :</label><br/>
        <label class="text2" type="text" id="pemberian" name="pemberian">"<?php echo $data_obat['pemberian']; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="kontraindikasi">Kontraindikasi :</label><br/>
        <label class="text2" type="text" id="kontraindikasi" name="kontraindikasi">"<?php echo $data_obat['kontraindikasi']; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="efeksamping">Efek Samping :</label><br/>
        <label class="text2" type="text" id="efeksamping" name="efeksamping">"<?php echo $data_obat['efeksamping']; ?>"</label>
      </div>  
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="hamilbusui">Kategori Hamil dan Menyusui :</label><br/>
        <label class="text2" type="text" id="hamilbusui" name="hamilbusui">"<?php echo $data_obat['hamilbusui']; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="interaksi_obat">Interaksi Obat :</label><br/>
        <label class="text2" type="text" id="interaksi_obat" name="interaksi_obat">"<?php echo $data_obat['interaksi_obat']; ?>"</label>
      </div>        
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="mekanisme_obat">Mekanisme Obat :</label><br/>
        <label class="text2" type="text" id="mekanisme_obat" name="mekanisme_obat">"<?php echo $data_obat['mekanisme_obat']; ?>"</label>
        </div>
      </div>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "_part/footer.php" ?>