<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');

	//menangkap data GET dan POST
	$i = $_GET['num'];
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

	//membersihkan data sebelum diinput
	trim ($i);
	trim ($nama);
	trim ($bidang);
	trim ($tanggal);
	trim ($lokasi);
	trim ($jangka);
	trim ($penjelasan);
	trim ($target);
	trim ($req);
	trim ($posisi);
	trim ($biaya);
	trim ($keuntungan);

	//menjalankan query
	$query = "UPDATE data_event SET nama='$nama', bidang='$bidang', tanggal='$tanggal', lokasi='$lokasi', jangka='$jangka', penjelasan='$penjelasan', target='$target', req='$req', posisi='$posisi', biaya='$biaya', keuntungan='$keuntungan'
				WHERE num='$i'";

	$r = mysql_query ($query);
	if (mysql_affected_rows() == 1)
	{ 
		// jika ada perubahan data maka muncul konfirmasi berikut
		echo "<script>window.alert('Data Event Berhasil Diubah!');
			window.location='.'</script>";
	} else {
		// jika tidak ada perubahan data maka muncul konfirmasi berikut
		echo "<script>window.alert('Tidak Ada Data yang Berubah!');
			window.location='.'</script>";
	}
?>