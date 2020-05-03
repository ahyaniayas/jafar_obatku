<!DOCTYPE html>
<html>
<head>
	<title>Kamus Obat</title>
</head>
<body>

	<h1>Kamus Obat</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH OBAT</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>Nama Obat</th>
			<th>Golongan Obat</th>
			<th>Indikasi</th>
			<th>Dosis</th>
			<th>Pemberian</th>
			<th>Kontraindikasi</th>
			<th>Efek Samping</th>
			<th>Kategori Kehamilan dan Menyusui</th>
			<th>Interaksi Obat</th>
			<th>Mekanisme Obat</th>
			<th>Kode Interaksi</th>
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
				<td><?php echo $d['kontraindikasi']; ?></td>
				<td><?php echo $d['efeksamping']; ?></td>
				<td><?php echo $d['hamilbusui']; ?></td>
				<td><?php echo $d['interaksi_obat']; ?></td>
				<td><?php echo $d['mekanisme_obat']; ?></td>
				<td><?php echo $d['kode_interaksi']; ?></td>
				<td>
					<a href="edit.php?kode_obat=<?php echo $d['kode_obat']; ?>">EDIT</a>
					<a href="hapus.php?kode_obat=<?php echo $d['kode_obat']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>