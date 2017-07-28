<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');

	//menangkap data POST
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$sosmed = $_POST['sosmed'];
	$email0 = $_POST['email0'];
	$email = $_POST['email'];
	$univ = $_POST['univ'];
	$posisi = $_POST['posisi'];

	//membersihkan data sebelum diinput
	trim ($password);
	trim ($nama);
	trim ($telp);
	trim ($sosmed);
	trim ($email0);
	trim ($email);
	trim ($univ);
	trim ($posisi);

	//menjalankan query
	$cari = mysql_query("SELECT * FROM data_pengguna WHERE email='$email' AND email!='$email0'");
	$terdapat = mysql_num_rows($cari);
	if($terdapat > 0)
	{
	// jika name ada di basis data maka muncul konfirmasi berikut
		echo "<script>window.alert('Email Sudah Ada!');
			window.location='.'</script>";
	} else {
		$query = "UPDATE data_pengguna SET email='$email', password='$password', telp='$telp', sosmed='$sosmed', univ='$univ', nama='$nama', posisi='$posisi'
		WHERE email='$email0'";
	}
	$r = mysql_query ($query);
	if (mysql_affected_rows() == 1)
	{ 
	// jika ada perubahan data maka muncul konfirmasi berikut
		echo"<script>window.alert('Data Pengguna Berhasil Diubah!');
			window.location='.'</script>";
	} else {
	// jika tidak ada perubahan data maka muncul konfirmasi berikut
		echo"<script>window.alert('Tidak Ada Data yang Berubah!');
			window.location='.'</script>";
	}
?>