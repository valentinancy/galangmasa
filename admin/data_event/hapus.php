<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	
	// get username2
	$num = $_GET['num'];
	
	// query untuk menghapus
	$query3 = mysql_query("DELETE FROM data_event WHERE num='$num'") or die (mysql_error());
	
	// query untuk menghapus
	$query4 = mysql_query("DELETE FROM data_daftar WHERE num='$num'") or die (mysql_error());
	
	$folder = "../../uploads";
	$filename = "foto_".$num.".jpg";
	
	if (file_exists($filename)){
		//Delete photo
		unlink($folder.'/'.$filename);
	}
	
	if($query3) {
	// konfirmasi jika data berhasil dihapus
		echo"<script>window.alert('Data Event Berhasil Dihapus!');
		window.location='.'</script>";
	}
?>