<?php include_once "_part/header.php" ?>

	<?php
		include './_part/koneksi.php';
	?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Glosarium</h1>
		  <hr class="garis-judul"/>
      <!-- ====================== BAGIAN ISI ATAS ====================== -->

      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
      <div class="row">
        <div class="col-lg-12">
          <div class="link">
            <a href="#dosis" style="font-weight: bold;">Dosis</a><br/>
            <a href="#efeksamping" style="font-weight: bold;">Efek Samping</a><br/>
            <a href="#indikasi" style="font-weight: bold;">Indikasi</a><br/>
            <a href="#interaksi" style="font-weight: bold;">Interaksi Obat</a><br/>
            <a href="#hamil" style="font-weight: bold;">Kategori Kehamilan dan Menyusui</a><br/>
            <a href="#kontra" style="font-weight: bold;">Kontraindikasi</a><br/>
            <a href="#mekanisme" style="font-weight: bold;">Mekanisme Obat</a><br/>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-3">
          <h3><u>Istilah</u></h3>
        </div>
        <div class="col-lg-9">
          <h3><u>Penjelasan</u></h3>
        </div>
      </div>
      <div class="row mt-5" id="dosis">
        <div class="col-lg-3">
          <span style="font-weight: bold;">Dosis</span>
        </div>
        <div class="col-lg-9">
          <span>Dosis merupakan kadar dari sesuatu (kimiawi, fisik, biologis) yang dapat mempengaruhi suatu organisme secara biologis; makin besar kadarnya, makin besar pula dosisnya. Di bidang kedokteran, istilah ini biasanya diperuntukkan bagi kadar obat atau agen lain yang diberikan untuk tujuan terapi.</span>
        </div>
      </div>
      <div class="row mt-5" id="efeksamping">
        <div class="col-lg-3">
          <span style="font-weight: bold;">Efek Samping</span>
        </div>
        <div class="col-lg-9">
          <span>suatu dampak atau pengaruh yang merugikan dan tidak diinginkan, yang timbul sebagai hasil dari suatu pengobatan atau intervensi lain seperti pembedahan. Suatu pengaruh atau dampak negatif disebut sebagai efek samping ketika hal itu timbul sebagai efek sekunder dari efek terapi utamanya. Jika efek itu muncul sebagai hasil dari dosis atau prosedur yang tidak tepat maka disebut sebagai kesalahan medis. Efek samping terkadang mengacu kepada Iatrogenik karena hal itu ditimbulkan oleh dokter/pengobatan</span>
        </div>
      </div>
      <div class="row mt-5" id="indikasi">
        <div class="col-lg-3">
          <span style="font-weight: bold;">Indikasi</span>
        </div>
        <div class="col-lg-9">
          <span>Rasa sakit, rasa nyeri, gejala sakit dan / atau penyakit yang dapat diatasi menggunakan terapi obat.Indikasi adalah kegunaan suatu obat pada kondisi penyakit tertentu.</span>
        </div>
      </div>
      <div class="row mt-5" id="interaksi">
        <div class="col-lg-3">
          <span style="font-weight: bold;">Interaksi Obat</span>
        </div>
        <div class="col-lg-9">
          <span>situasi di mana suatu zat memengaruhi aktivitas obat, yaitu meningkatkan atau menurunkan efeknya, atau menghasilkan efek baru yang tidak diinginkan atau direncanakan. Interaksi dapat terjadi antar-obat atau antara obat dengan makanan serta obat-obatan herbal</span>
        </div>
      </div>
      <div class="row mt-5" id="hamil">
        <div class="col-lg-3">
          <span style="font-weight: bold;">Kategori Kehamilan dan Menyusui</span>
        </div>
        <div class="col-lg-9">
          <span>Kategori A: Studi terkontrol pada wanita gagal untuk menunjukkan risiko pada janin pada trimester 1 (dan tidak ada bukti risiko pada trimester berikutnya), dan kemungkinan kerusakan janin masih jauh.
            <br/>
            <br/>
            Kategori B: Studi reproduksi hewan tidak menunjukkan risiko janin tetapi tidak ada studi terkontrol pada wanita hamil atau studi reproduksi hewan menunjukkan efek buruk (selain penurunan kesuburan) yang tidak dikonfirmasi dalam studi terkontrol pada wanita pada trimester pertama (dan tidak ada bukti risiko pada trimester berikutnya).
            <br/>
            <br/>
            Kategori C: Salah satu studi pada hewan telah mengungkapkan efek buruk pada janin (teratogenik atau embriosidal atau lainnya) dan tidak ada studi terkontrol pada wanita atau studi pada wanita dan hewan tidak tersedia. Obat harus diberikan hanya jika manfaat potensial membenarkan potensi risiko pada janin.
            <br/>
            <br/>Kategori D: Ada bukti positif risiko janin pada manusia, tetapi manfaat dari penggunaan pada wanita hamil dapat diterima meskipun ada risiko (misalnya, jika obat diperlukan dalam situasi yang mengancam jiwa atau untuk penyakit serius yang tidak dapat dilakukan dengan obat yang lebih aman. digunakan atau tidak efektif).
            <br/>
            <br/>Kategori X: Penelitian pada hewan atau manusia telah menunjukkan kelainan janin atau ada bukti risiko janin berdasarkan pengalaman manusia atau keduanya, dan risiko penggunaan obat pada wanita hamil jelas melebihi manfaat yang mungkin ada. Obat ini dikontraindikasikan pada wanita yang sedang atau mungkin hamil.
            <br/>
            <br/>Kategori N: Tidak ada penelitian yang memadai mengenai risiko penggunaan obat ini pada ibu hamil atau menyusui. Selalu konsultasikan kepada dokter Anda untuk mempertimbangkan potensi manfaat dan risiko sebelum menggunakan obat ini.</span>
        </div>
      </div>
      <div class="row mt-5" id="kontra">
        <div class="col-lg-3">
          <span style="font-weight: bold;">Kontraindikasi</span>
        </div>
        <div class="col-lg-9">
          <span>suatu kondisi atau faktor yang berfungsi sebagai alasan untuk mencegah tindakan medis tertentu karena bahaya yang akan didapatkan pasien. Kontraindikasi adalah kebalikan dari indikasi, yang merupakan alasan untuk menggunakan pengobatan tertentu.</span>
        </div>
      </div>
      <div class="row mt-5" id="mekanisme">
        <div class="col-lg-3">
          <span style="font-weight: bold;">Mekanisme Obat</span>
        </div>
        <div class="col-lg-9">
          <span>cara kerja dari obat</span>
        </div>
      </div>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "_part/footer.php" ?>