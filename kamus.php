<?php include_once "_part/header.php" ?>

	<?php
		include './_part/koneksi.php';
	?>
  <div class="container">
    <div class="content">
      <!-- ====================== BAGIAN ISI ATAS ====================== -->
      <h1 class="judul">Kamus Obat</h1>
		  <hr class="garis-judul"/>
      <!-- ====================== BAGIAN ISI ATAS ====================== -->

      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    	<table id="example" class="table table-striped">
        <thead>
        	<tr>
            <!-- perhatikan -->
        		<th>No</th>  <!-- ini kolom ke 0 -->
        		<th>Nama</th> <!-- ini kolom ke 1 -->
        		<th>Indikasi</th> <!-- dan seterusnya -->
        		<th>Dosis</th>
        		<th>Pemberian</th>
            <th></th>
        	</tr>
        </thead>
        <tbody>
      	<?php 
        $sql = "SELECT * FROM obat";
        $row = $koneksi->prepare($sql);
        $row->execute();
        $hasil = $row->fetchAll(PDO::FETCH_OBJ);
      	$no = 0;
      	foreach($hasil as $isi){
          $no++;
      	?>
        	<tr>
        		<td><?php echo $no; ?></td>
        		<td><?php echo $isi->nama_obat; ?></td>
        		<td><?php echo $isi->indikasi; ?></td>
        		<td><?php echo $isi->dosis; ?></td>
        		<td><?php echo $isi->pemberian; ?></td>
        		<td><a href="detil.php?kode_obat=<?php echo $isi->kode_obat; ?>">Lihat Detil Obat</a></td>
          	</tr>
        	<?php } ?>
        </tbody>
    	</table>
      <!-- ====================== BAGIAN ISI BAWAH ====================== -->
    </div>
  </div>

<?php include_once "_part/footer.php" ?>