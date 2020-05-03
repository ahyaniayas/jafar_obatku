<!DOCTYPE html>
<html>
<head>
	<title>Sistem Interaksi Antar Obat</title>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- CSS -->
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="http://localhost/obatku/interaksi.php">Interaksi Antar Obat</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/obatku/index.php">Halaman Utama</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/obatku/interaksi.php">Interaksi Antar Obat</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/obatku/kamus.php">Kamus Obat</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/obatku/pustaka.php">Tinjauan Pustaka</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="http://localhost/obatku/tentang.php">Tentang Kami</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Interaksi -->	
  <div id="interaksi" class="interaksi">
    <div class="container">
      <div class="row">
        <div class="tengah">
          <label class="text1">Cek Interaksi Antar Obat</label>
      <hr class="garis-text1" />
      <br/>
  <a class="text2">Daftar Obat yang Akan Dicek : </a><br/>
	<br/>
	<table style="text-align: center;font-family: sans-serif;border-collapse: collapse;" align="center" border="0" width="100%">
		<tr>
			<th style="background: #fff;color: #fff;font-weight: bold; padding: 5px; width: 180px"></th>
			<th style="background: #fff;color: #fff;font-weight: bold; padding: 5px; width: 280px"></th>
			<th style="background: #fff;color: #fff;font-weight: bold; padding: 5px; width: 120px"></th>
			<th style="background: #fff;color: #fff;font-weight: bold; padding: 5px; width: 180px"></th>
			<th style="background: #fff;color: #fff;font-weight: bold; padding: 5px; width: 280px"></th>
		</tr>
		<tr>
			<td style="background-color: #ebebeb; font-size: large">Obat 1 :</td>
			<td style="background-color: #ebebeb"><select style="width: 200px" name="namaobat1" id="o1" onchange="obat1()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></td>
			<td></td>
			<td style="background-color: #ebebeb; font-size: large">Obat 4 :</td>
			<td style="background-color: #ebebeb"><select style="width: 200px" name="namaobat4" id="o4" onchange="obat4()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></td>
		</tr>
		<tr>
			<td style="background-color: #b5ffc1; font-size: large">Obat 2 :</td>
			<td style="background-color: #b5ffc1"><select style="width: 200px" name="namaobat2" id="o2" onchange="obat2()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></td>
			<td></td>
			<td style="background-color: #b5ffc1; font-size: large">Obat 5 :</td>
			<td style="background-color: #b5ffc1"><select style="width: 200px" name="namaobat5" id="o5" onchange="obat5()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></td>
		</tr>
		<tr>
			<td style="background-color: #ebebeb; font-size: large">Obat 3 :</td>
			<td style="background-color: #ebebeb"><select style="width: 200px" name="namaobat3" id="o3" onchange="obat3()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></td>
			<td></td>
			<td style="background-color: #ebebeb; font-size: large">Obat 6 :</td>
			<td style="background-color: #ebebeb"><select style="width: 200px" name="namaobat6" id="o6" onchange="obat6()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></td>
		</tr>
	</table>
	<br/>
	<button style="margin-left: 500px" onclick="all()"; class="btn btn-primary center-block">Cek Interaksi</button>
	<br/>
	<br/>
  	<a class="text3">Hasil dan Penjelasan Interaksi Antar Obat : </a><br/>	
	<br/>
	<br/>
	<br/>
	<br/>
	<p align="center">cara 1</p>
	<p align="center">if o12 = nama_antarobat;</p>
	<p align="center">then select interaksi</p>
	<p align="center">from interaksi</p>
	<p align="center">join obat.kode_obat=relasi.kode_obat; join interaksi.kode_interaksi=relasi.kode_interaksi</p>
	<p align="center">where nama_antarobat="o12"</p>
	<p align="center">else ""</p>
	<br/>
	<p align="center">if o13 = nama_antarobat;</p>
	<p align="center">then select interaksi</p>
	<p align="center">from interaksi</p>
	<p align="center">join obat.kode_obat=relasi.kode_obat; join interaksi.kode_interaksi=relasi.kode_interaksi</p>
	<p align="center">where nama_antarobat="o13"</p>
	<p align="center">else ""</p>
	<br/>
	<p align="center">dst sampe o56</p>
	<br/>
	<p align="center">cara 2</p>
	<br/>
	<p align="center">INTERAKSI 1 & 2 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o12"</p>
	<br/>
	<p align="center">INTERAKSI 1 & 3 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o13"</p>
	<br/>
	<p align="center">INTERAKSI 1 & 4 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o14"</p>
	<br/>
	<p align="center">INTERAKSI 1 & 5 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o15"</p>
	<br/>
	<p align="center">INTERAKSI 1 & 6 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o16"</p>
	<br/>
	<p align="center">INTERAKSI 2 & 3 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o23"</p>
	<br/>
	<p align="center">INTERAKSI 2 & 4 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o24"</p>
	<br/>
	<p align="center">INTERAKSI 2 & 5 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o25"</p>
	<br/>
	<p align="center">INTERAKSI 2 & 6 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o26"</p>
	<br/>
	<p align="center">INTERAKSI 3 & 4 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o34"</p>
	<br/>
	<p align="center">INTERAKSI 3 & 5 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o35"</p>
	<br/>
	<p align="center">INTERAKSI 3 & 6 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o36"</p>
	<br/>
	<p align="center">INTERAKSI 4 & 5 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o45"</p>
	<br/>
	<p align="center">INTERAKSI 4 & 6 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o46"</p>
	<br/>
	<p align="center">INTERAKSI 5 & 6 = select interaksi from interaksi join obat.kode_obat=relasi.kode_obat join interaksi.kode_interaksi=relasi.kode_interaksi where nama_antarobat="o56"</p>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Obat 1</th>
			<th><select name="namaobat1" id="t1" onchange="obat99()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></th>
		</tr>
		<tr>
			<th>Obat 2</th>
			<th><select name="namaobat2" id="t2" onchange="obat98()" text= "Pilih Obat">
					<option value="">Pilih Obat</option>
					<?php 
						include 'koneksi.php';
						$sql = "select * from obat";
						$hasil= mysqli_query($koneksi, $sql);
						$no=0;
						while ($data = mysqli_fetch_array($hasil)) {
						$no++;
					?>
					<option value="<?php echo $data['nama_obat'];?>"><?php echo $data['nama_obat'];?></option>
					<?php
						}
					?>
				</select></th>
			<th>
			</th>
		</tr>
	</table>
	<br/>
	<br/>
		<input type="text" id="z1"> <input type="text" id="z2">
			<p id="test"></p>
		<button onclick="z12()">Tampilkan Hasil Obat 1 dan Obat 2</button>
	<br/>
		<input type="text" id="z12">
		<p id="z12"></p>
	<br/>
		<input type="submit" value="Test" onclick="o12">
	<br/>
	<?
		include 'koneksi.php'
		$sql = "if (';"
	<?php  ?>
	<br/>
</div>
</div>
</div>
</div>
 <!-- TENTANG -->
  <div id="tentang" class="about">
    <div id="copyright" class="copyright">
      &copy; Copyright MJ 2020
    </div>
  </div>
 <!-- END ABOUT -->
 <!-- JAVASCRIPT -->
 <script src="assets/plugins/jquery/jquery.min.js"></script>
 <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
 <script src="assets/plugins/bootstrap/js/bootstrap.popper.min.js"></script>
 <script src="assets/js/custom.js"></script>
 <!-- JAVASCRIPT -->
</body>
</html>