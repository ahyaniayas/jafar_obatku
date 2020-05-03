<!DOCTYPE html>
<html>
<head>
	<title>Kamus Obat</title>
</head>
<body>
	<?php
		include 'koneksi.php';
	?>
	<h1>Kamus Obat</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH OBAT</a>
	<br/>
	<form action="obatku.php" method="get">
		<label>Cari Obat :</label>
		<input type="text" name="cari" placeholder="Nama Obat">
		<input type="submit" value="Cari">
	</form>
	<?php
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : ".$cari."</b>";
		}
	?>
	<table border="0">
	<tr>
		<th>No</th>
		<th>Nama</th>
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
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['nama_obat']; ?></td>
		<td><a href="edit.php?kode_obat=<?php echo $d['kode_obat']; ?>">Lihat Detil Obat</a></td>
	</tr>
	<?php } ?>
</table>
	<br/>
	<table border="1">
		<tr>
			<th>Nomor</th>
			<th>Nama Obat</th>
			<th>Golongan Obat</th>
			<th>Indikasi</th>
			<th>Dosis</th>
			<th>Pemberian</th>
			<th>Interaksi Obat</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from obat");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_obat']; ?></td>
				<td><?php echo $d['gol_obat']; ?></td>
				<td><?php echo $d['indikasi']; ?></td>
				<td><?php echo $d['dosis']; ?></td>
				<td><?php echo $d['pemberian']; ?></td>
				<td><?php echo $d['interaksi_obat']; ?></td>
				<td>
					<a href="edit.php?kode_obat=<?php echo $d['kode_obat']; ?>">Lihat Detil Obat</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>