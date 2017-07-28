<?php
	//menghubungi database MySQL
	require('../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
		
	$num = $_POST['num'];
	$mhs = $_POST['mhs'];
	$telp = $_POST['telp'];
	$sosmed = $_POST['sosmed'];
	$email = $_POST['email'];
	$univ = $_POST['univ'];
	
	// cek data pengguna yang ada di basisdata
	$x = mysql_query("SELECT * FROM data_daftar WHERE num='$num'");
	$no = mysql_num_rows($x);
	$i = $no + 1;
 
	$query = mysql_query("INSERT INTO data_daftar (num, no_daftar, mhs, telp, sosmed, email, univ) 
	VALUES ('$num', '$i', '$mhs', '$telp', '$sosmed', '$email', '$univ')");
	
	if ($query) {
		// Pesan konfirmasi jika data berhasil ditambahkan
		echo "<script>window.alert('Data Pendaftaran Berhasil Ditambahkan!');
		window.location='../event/';</script>";
	}
?>