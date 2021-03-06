<!DOCTYPE html>
<html>
<head>
	<title>Sistem Pakar Interaksi Antar Obat</title>
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
      <a class="navbar-brand js-scroll-trigger" href="http://localhost/obatku/kamus.php">Kamus Obat</a>
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

  <!-- Kamus -->
	<?php
		include 'koneksi.php';
	?>
  <div id="kamus" class="kamus">
    <div class="container">
      <div class="row">
        <div class="kiri">
          <label class="text1">Kamus Obat</label>
		  <hr class="garis-text1" />
	<br/>
	<form action="kamus.php" method="get">
		<label>Cari Obat :</label>
		<input type="text" name="cari" placeholder="Nama Obat">
		<input type="submit" value="Cari">
	</form>
	<?php
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
			echo "<b>Daftar Obat : ".$cari."</b>";
		}
	?>
  <br/>
  <br/>
	<table style="text-align: center;font-family: sans-serif;border-collapse: collapse;" align="center" border="1" width="100%">
	<tr>
		<th style="background: #35A9DB;color: #fff;font-weight: bold; padding: 5px">No</th>
		<th style="background: #35A9DB;color: #fff;font-weight: bold; padding: 5px; width: 120px">Nama</th>
		<th style="background: #35A9DB;color: #fff;font-weight: bold; padding: 5px; width: 300px">Indikasi</th>
		<th style="background: #35A9DB;color: #fff;font-weight: bold; padding: 5px; width: 550px">Dosis</th>
		<th style="background: #35A9DB;color: #fff;font-weight: bold; padding: 5px; width: 200px">Pemberian</th>
    <th style="background: #35A9DB;color: #fff;font-weight: bold; padding: 5px; width: 90px"></th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$datac = mysqli_query($koneksi,"select * from obat where nama_obat like '%".$cari."%'");				
	}else{
		$datac = mysqli_query($koneksi,"select * from obat");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($datac)){
	?>
	<tr>
		<td style="background: #35A9DB;color: #fff;font-weight: normal; padding: 5px"><?php echo $no++; ?></td>
		<td style="background: #696969;color: #fff;font-weight: normal; padding: 5px; width: 120px"><?php echo $d['nama_obat']; ?></td>
		<td style="background: #696969;color: #fff;font-weight: normal; padding: 5px; width: 300px"><?php echo $d['indikasi']; ?></td>
		<td style="background: #696969;color: #fff;font-weight: normal; padding: 5px; width: 550px"><?php echo $d['dosis']; ?></td>
		<td style="background: #696969;color: #fff;font-weight: normal; padding: 5px; width: 200px"><?php echo $d['pemberian']; ?></td>
		<td style="background: #F0F8FF;color: #fff;font-weight: normal; padding: 5px; width: 90px"><a href="detil.php?kode_obat=<?php echo $d['kode_obat']; ?>">Lihat Detil Obat</a></td>
	</tr>
	<?php } ?>
	</table>
</div>
</div>
</div>
</div>
</div>

  <!-- END Kamus -->

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