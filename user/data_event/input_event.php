<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	session_start();
		
	$nama = $_POST['nama'];
	$bidang = $_POST['bidang'];
	$tanggal = $_POST['tanggal'];
	$lokasi = $_POST['lokasi'];
	$jangka = $_POST['jangka'];
	$penjelasan = $_POST['penjelasan'];
	$target = $_POST['target'];
	$req = $_POST['req'];
	$posisi = $_POST['posisi'];
	$biaya = $_POST['biaya'];
	$keuntungan = $_POST['keuntungan'];
	$email = $_SESSION['email'];
	
	// buat num baru
	$x = mysql_query("SELECT * FROM data_event");
	while ($data = mysql_fetch_array($x)){
		$no[] = $data['num'];
	}
	$i = max($no) + 1;
 
	$query2 = mysql_query("INSERT INTO data_event (num, nama, bidang, tanggal, lokasi, jangka, penjelasan, target, req, posisi, biaya, keuntungan, penulis) 
	VALUES ('$i', '$nama', '$bidang', '$tanggal', '$lokasi', '$jangka', '$penjelasan', '$target', '$req', '$posisi', '$biaya', '$keuntungan', '$email')");
	
	if ($query2) {
		// Pesan konfirmasi jika data berhasil ditambahkan
		echo "<script>window.alert('Data Event Berhasil Ditambahkan!');
		window.location='.'</script>";
	}
?>