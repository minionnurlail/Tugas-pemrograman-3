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
	$Nama_Barang = $_POST['Nama_Barang'];
$Kode_Barang = $_POST['Kode_Barang'];
$Qty = $_POST['qty'];
$Kategori_id = $_POST['Kategori_id'];

// menginput data ke database
$a=mysqli_query($koneksi,"insert into barang values('','$Nama_Barang','$Kode_Barang','$Qty','$Kategori_id')");
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
$querykategori = "SELECT * FROM kategori";
$resultkategori = mysqli_query($koneksi,$querykategori);

?>
<body>
<h2>UnayahNurlailiNovianti.com<h/2>
<br/>
<a href="tampilan barang.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA BARANG</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama Barang</td>
	<td><input type="text" name="Nama_Barang"></td>
	</tr>
	<tr>
	<td>Kode Barang</td>
	<td><input type="text" name="Kode_Barang"></td>
	</tr>
	<tr>
	<td>Qty</td>
	<td><input type="number" name="Qty"></td>
	</tr>
	<tr>
	<td>Kategori</td>
	<td><select name="Kategori_id">
	<option value="">-----Pilih-----</option>
	<?php
	while ($datakategori=mysqli_fetch_array($resultkategori))
	{
		echo "<option value=$datakategori[id_kategori]>$datakategori[nama_kategori]</option>";
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