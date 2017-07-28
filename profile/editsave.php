<?php
	//menghubungi database MySQL
	require('../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	session_start();

	//menangkap data POST
	$password = $_POST['password'];
	$nama = $_POST['nama'];
	$telp = $_POST['telp'];
	$sosmed = $_POST['sosmed'];
	$email0 = $_POST['email0'];
	$email = $_POST['email'];
	$univ = $_POST['univ'];

	//membersihkan data sebelum diinput
	trim ($password);
	trim ($nama);
	trim ($telp);
	trim ($sosmed);
	trim ($email0);
	trim ($email);
	trim ($univ);
	
	//menjalankan query
	$query = "UPDATE data_pengguna SET email='$email', password='$password', telp='$telp', sosmed='$sosmed', univ='$univ', nama='$nama'
				WHERE email='$email0'";
	
	unset($_SESSION['email']);
	unset($_SESSION["nama"]);	
	$_SESSION['email'] = $email;
	$_SESSION['nama'] = $nama;
	$posisi = $_SESSION['posisi'];
	
	$r = mysql_query ($query);
	if (mysql_affected_rows() == 1)
	{ 
		if ($posisi == 'User'){
			echo "<script>window.alert('Data Pengguna Berhasil Diubah!');
			window.location='../profile/user.php'</script>";
		} else if ($posisi == 'Admin'){
			echo "<script>window.alert('Data Pengguna Berhasil Diubah!');
			window.location='../profile/admin.php'</script>";
		}
	} else {
		if ($posisi == 'User'){
			echo "<script>window.alert('Tidak Ada Data yang Berubah!');
			window.location='../profile/user.php'</script>";
		} else if ($posisi == 'Admin'){
			echo "<script>window.alert('Tidak Ada Data yang Berubah!');
			window.location='../profile/admin.php'</script>";
		}
	}
?>