<?php
$koneksi = mysqli_connect("localhost","root","","keuangan");

//check connection
if(mysqli_connect_errno()){
	echo"koneksi database gagal : ".mysql_connect_erno();
	}else{
		echo "hore bisa";
		}
		?>