<?php include_once "_part/header.php" ?>
	<?php
	include('./_part/koneksi.php');

  $kode_obat = $_GET['kode_obat']; /*tangkapan ini lebih baik disimpen ke variabel*/
  $sql = "SELECT * FROM obat WHERE kode_obat = '$kode_obat'"; /*Script sql lebih baik disimpan dalam 1 variabel sendiri*/
  $row = $koneksi->prepare($sql); /*nah disini baru masukkan variable sql yang berisi script sqlnya*/ 
  $row->execute();

  $isi = $row->fetch(PDO::FETCH_OBJ);
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
        <label class="text2" type="text" class="" id="nama_obat" name="nama_obat">"<?php echo $isi->nama_obat; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="gol_obat">Golongan Obat :</label><br/>
        <label class="text2" type="text" class="" id="gol_obat" name="gol_obat">"<?php echo $isi->gol_obat; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="indikasi">Indikasi :</label><br/>
        <label class="text2" type="text" id="indikasi" name="indikasi">"<?php echo $isi->indikasi; ?>"</label>
      </div>        
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="dosis">Dosis :</label><br/>
        <label class="text2" type="text" id="dosis" name="dosis">"<?php echo $isi->dosis; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="pemberian">Pemberian :</label><br/>
        <label class="text2" type="text" id="pemberian" name="pemberian">"<?php echo $isi->pemberian; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="kontraindikasi">Kontraindikasi :</label><br/>
        <label class="text2" type="text" id="kontraindikasi" name="kontraindikasi">"<?php echo $isi->kontraindikasi; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="efeksamping">Efek Samping :</label><br/>
        <label class="text2" type="text" id="efeksamping" name="efeksamping">"<?php echo $isi->efeksamping; ?>"</label>
      </div>  
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="hamilbusui">Kategori Hamil dan Menyusui :</label><br/>
        <label class="text2" type="text" id="hamilbusui" name="hamilbusui">"<?php echo $isi->hamilbusui; ?>"</label>
      </div>
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="interaksi_obat">Interaksi Obat :</label><br/>
        <label class="text2" type="text" id="interaksi_obat" name="interaksi_obat">"<?php echo $isi->interaksi_obat; ?>"</label>
      </div>        
      <div class="form-group">
        <div class="detil">
        <label class="text1" for="mekanisme_obat">Mekanisme Obat :</label><br/>
        <label class="text2" type="text" id="mekanisme_obat" name="mekanisme_obat">"<?php echo $isi->mekanisme_obat; ?>"</label>
        </div>
      </div>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>
<?php include_once "_part/footer.php" ?>