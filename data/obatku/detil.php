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
  <div id="kamus" class="kamus">
    <div class="container">
      <div class="row">
        <div class="kiri">
          <label class="text1">Kamus Obat</label>
		  <hr class="garis-text1" />
  <?php
    include 'koneksi.php';
    $id = $_GET['kode_obat'];
    $show = mysqli_query($koneksi,"SELECT * FROM obat WHERE kode_obat='$id'");
    if(mysqli_num_rows($show) == 0){

    echo '<script>window.history.back()</script>';

   }else{
    $data = mysqli_fetch_assoc($show);
    // fungis nya untuk menampilkan data yang akan di tampilkan ketika klik di detil ke form
    }
?>
  <form action="detil-proses.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>">
  <input style="border: 0; font-size: 26pt; color: #33DFFF; font-weight: bolder; padding-bottom: 10px" type="text" name="gol_obat" size="30" value="<?php echo $data['nama_obat']; ?>" placeholder="Nama_Obat" required>
  <p class="text4">Golongan Obat</p>
  <input class="text5" type="text" name="gol_obat" value="<?php echo $data['gol_obat']; ?>" placeholder="gol_obat" required></input>
  <p class="text4">Indikasi</p>
  <input class="text5" type="text" name="indikasi" value="<?php echo $data['indikasi']; ?>" placeholder="indikasi" required></input>
  <p class="text4">Dosis</p>
  <input class="text5" type="text" name="dosis" value="<?php echo $data['dosis']; ?>" placeholder="dosis" required></input>
  <p class="text4">Pemberian</p>
  <input class="text5" type="text" name="pemberian" value="<?php echo $data['pemberian']; ?>" placeholder="pemberian" required></input>
  <p class="text4">Kontraindikasi</p>
  <input class="text5" type="text" name="kontraindikasi" value="<?php echo $data['kontraindikasi']; ?>" placeholder="kontraindikasi" required></input>
  <p class="text4">Efek Samping</p>
  <input class="text5" type="text" name="efeksamping" value="<?php echo $data['efeksamping']; ?>" placeholder="efeksamping" required></input>
  <p class="text4">Golongan Hamil dan Menyusui</p>
  <input class="text5" type="text" name="hamilbusui" value="<?php echo $data['hamilbusui']; ?>" placeholder="hamilbusui" required></input>
  <p class="text4">Interaksi Obat</p>
  <input class="text5" type="text" name="interaksi_obat" value="<?php echo $data['interaksi_obat']; ?>" placeholder="interaksi_obat" required></input>
  <p class="text4">Mekanisme Obat</p>
  <input class="text5" type="text" name="mekanisme_obat" value="<?php echo $data['mekanisme_obat']; ?>" placeholder="mekanisme_obat" required></input>
  <br/>
  <br/>
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