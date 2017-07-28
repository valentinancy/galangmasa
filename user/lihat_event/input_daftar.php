<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
		
	$num = $_GET['num'];
	$email = $_GET['email'];
	
	// memanggil data pengguna
	$queryUser = "SELECT * FROM data_pengguna WHERE email='$email'";
	if ($r = mysql_query($queryUser))
	{
		$baris = mysql_fetch_array($r);
		$email = htmlentities($baris['email']);
		$nama = htmlentities($baris['nama']);
		$telp = htmlentities($baris['telp']);
		$sosmed = htmlentities($baris['sosmed']);
		$univ = htmlentities($baris['univ']);
		
		// cek data pengguna yang ada di basisdata
		$x = mysql_query("SELECT * FROM data_daftar WHERE num='$num'");
		$no = mysql_num_rows($x);
		$i = $no + 1;
		
		// Cek data pengguna yang ada di basis data
		$cari = mysql_query("SELECT * FROM data_daftar WHERE num='$num' AND email='$email'");
		$terdapat = mysql_num_rows($cari);
		if($terdapat > 0)
		{
			// Jika email sudah ada muncul peringatan berikut
			echo "<script>window.alert('Data Sudah Terdaftar!');
			window.location='../lihat_event/'</script>";
		} else {
			$query3 = mysql_query("INSERT INTO data_daftar (num, no_daftar, mhs, telp, sosmed, email, univ) 
			VALUES ('$num', '$i', '$nama', '$telp', '$sosmed', '$email', '$univ')");
			
			if ($query3) {
				// Pesan konfirmasi jika data berhasil ditambahkan
				echo "<script>window.alert('Data Pendaftaran Berhasil Ditambahkan!');
				window.location='../lihat_event/';</script>";
			}
		}
	}
?>