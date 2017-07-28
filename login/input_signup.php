<?php
	//menghubungi database MySQL
	require('../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
		
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$sosmed = $_POST['sosmed'];
	$univ = $_POST['univ'];
	 
	$cari = mysql_query("SELECT * FROM data_pengguna WHERE email='$email'");
	$terdapat = mysql_num_rows($cari);
	if($terdapat > 0)
	{
		// Jika email sudah ada muncul peringatan berikut
		echo "<script>window.alert('Email Sudah Ada!');
		window.location='../login/signup.php'</script>";
	} else {
		$query = mysql_query("INSERT INTO data_pengguna (email, password, nama, telp, sosmed, univ, posisi) 
		VALUES ('$email', '$password', '$nama', '$telp', '$sosmed', '$univ', 'User')");
	
		if ($query) {
			// Pesan konfirmasi jika data berhasil ditambahkan
			echo "<script>window.alert('Data Pengguna Berhasil Ditambahkan!');
			window.location='../login/';</script>";
		}
	}
?>