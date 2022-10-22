	</html>
	<head>
	<title>UnayahNurlailiNovianti.com</title>
	</head>
	<body>
	<h2>UnayahNurlailiNovianti.com</h2>
	<br/>
	<a href="inputtransaksi.php">+ TAMBAH TRANSAKSI</a>
	<br/>
	<table border="1">
	<tr>
		<th>No</th>
		<th>Tanggal transaksi</th>
		<th>No transaksi</th>
		<th>Jenis transaksi</th>
		<th>Barang</th>
		<th>Jumlah transaksi</th>
		<th>user</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from transaksi");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['tgl_transaksi']; ?></td>
			<td><?php echo $d['no_transaksi']; ?></td>
			<td><?php echo $d['jenis_transaksi']; ?></td>
			<td><?php echo $d['barang_id']; ?></td>
			<td><?php echo $d['jumlah_transaksi']; ?></td>
			<td><?php echo $d['user_id']; ?></td>
			<td>
				<a href="edit_tampiltransaksi.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="edit_tampiltransaksi.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>