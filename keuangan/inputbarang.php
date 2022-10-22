	<! DOCTYPE html>
<html>
<html>
<title>UnayahNurlailiNovianti.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
//menangkap data yang di kirim dari form
if(!empty($_POST['save'])){
	$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$qty = $_POST['qty'];
$katagori_id = $_POST['katagori_id'];

// menginput data ke database
$query=mysqli_query($koneksi,"insert into barang values('','$nama_barang','$kode_barang','$qty','$katagori_id')");
if ($query)
{
	//mengalihkan halaman kembali
header("location:tampilanbarang.php");
}
else
{
	echo mysqli_error($koneksi);
	
}
}
$querykatagori = "SELECT * FROM katagori";
$resultkatagori = mysqli_query($koneksi,$querykatagori);

?>
<body>
<h2>UnayahNurlailiNovianti.com<h/2>
<br/>
<a href="tampilanbarang.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA BARANG</h3>
<form method="POST">
	<table>
	<tr>
	<td>nama barang</td>
	<td><input type="text" name="nama_barang"></td>
	</tr>
	<tr>
	<td>kode arang</td>
	<td><input type="text" name="kode_barang"></td>
	</tr>
	<tr>
	<td>qty</td>
	<td><input type="number" name="qty"></td>
	</tr>
	<tr>
	<td>katagori</td>
	<td><select name="katagori_id">
	<option value="">-----Pilih-----</option>
	
	<?php
	while ($datakatagori=mysqli_fetch_array($resultkatagori))
	{
		echo "<option value=$datakatagori[id_kategori]>$datakatagori[nama_katagori]</option>";
	}
	?>
	</select>
	<td>
	<tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	</body>
	</html>