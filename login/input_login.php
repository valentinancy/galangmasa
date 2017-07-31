<?php
	//menghubungi database MySQL
	require('../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	session_start();
	
	$_SESSION["authorized"] = false;
	
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	
	$query = mysql_query("SELECT * FROM data_pengguna WHERE email='$email' AND password='$password'");
	
	while ($data = mysql_fetch_array($query))
	{
		$email_db = $data['email'];
		$password_db = $data['password'];
		$nama = $data['nama'];
		$posisi = $data['posisi'];
	
		if(($email == $email_db) && ($password == $password_db) && ($posisi == 'Admin')){
			$_SESSION["authorized"] = true;
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $nama;
			$_SESSION['posisi'] = 'Admin';
			echo "<script>window.alert('Login Berhasil');
			window.location='../admin/';</script>";
		}
		else if(($email == $email_db) && ($password == $password_db) && ($posisi == 'User')){
			$_SESSION["authorized"] = true;
			$_SESSION['email'] = $email;
			$_SESSION['nama'] = $nama;
			$_SESSION['posisi'] = 'User';
			echo "<script>window.alert('Login Berhasil');
			window.location='../user/';</script>";
		}
	}
	
	echo "<script>window.alert('Login Gagal');
	window.location='../login/';</script>";
?>
