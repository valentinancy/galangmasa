<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	
	// get
	$email = $_GET['email'];
	
	// query untuk menghapus
	$query3 = mysql_query("DELETE FROM data_pengguna WHERE email='$email' AND posisi!='Admin'") or die (mysql_error());
	
	if (mysql_affected_rows() == 1)
	{ 
	// jika ada perubahan data maka muncul konfirmasi berikut
		echo"<script>window.alert('Data Pengguna Berhasil Dihapus!');
			window.location='.'</script>";
	} else {
	// jika tidak ada perubahan data maka muncul konfirmasi berikut
		echo"<script>window.alert('Tidak Ada Data yang Berubah!');
			window.location='.'</script>";
	}
?>