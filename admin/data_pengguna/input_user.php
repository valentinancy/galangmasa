<?php
	// Menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
		
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$sosmed = $_POST['sosmed'];
	$email = $_POST['email'];
	$univ = $_POST['univ'];
	$posisi = $_POST['posisi'];
	
	// Cek data pengguna yang ada di basisdata
	$cari = mysql_query("SELECT * FROM data_pengguna WHERE email='$email'");
	$terdapat = mysql_num_rows($cari);
	if($terdapat > 0)
	{
		// Jika email sudah ada muncul peringatan berikut
		echo "<script>window.alert('Email Sudah Ada!');
		window.location='.'</script>";
	} else {
		$query2 = mysql_query("INSERT INTO data_pengguna (email, password, nama, telp, sosmed, univ, posisi) 
		VALUES ('$email', '$password', '$nama', '$telp', '$sosmed', '$univ', '$posisi')");
		
		if ($query2)
		{
			// Pesan konfirmasi jika data berhasil ditambahkan
			echo "<script>window.alert('Data Pengguna Berhasil Ditambahkan!');
			window.location='.'</script>";
		}
	}
?>