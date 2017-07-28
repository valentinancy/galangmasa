<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	
	// get
	$num = $_GET['num'];
	$email = $_GET['email'];
	
	// query untuk menghapus
	$query3 = mysql_query("DELETE FROM data_daftar WHERE email='$email' AND num='$num'") or die (mysql_error());
	
	if (mysql_affected_rows() == 1)
	{ 
	// jika ada perubahan data maka muncul konfirmasi berikut
		echo"<script>window.alert('Data Pendaftaran Berhasil Dihapus!');
			window.location='../lihat_event/'</script>";
	} else {
	// jika tidak ada perubahan data maka muncul konfirmasi berikut
		echo"<script>window.alert('Tidak Ada Data yang Berubah!');
			window.location='../lihat_event/'</script>";
	}
?>