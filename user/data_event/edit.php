<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	
	session_start();
	if((!$_SESSION)||($_SESSION['posisi'] != 'User')){
		echo "<script>window.alert('Akses Tidak Diberikan')</script>";
		if($_SESSION['posisi'] == 'Admin'){
			echo "<script>window.location='../../admin/';</script>";
		}
		else{
			echo "<script>window.location='../../';</script>";
		}
	}
?>
<html>
	<head>
		<meta charset='utf-8'/>
		<link rel="icon" href="../../images/logo.jpg" type="image/x-icon">
		
		<title>GalangMasa</title>
	
		<!-- Bootstrap Core CSS -->
		<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- MetisMenu CSS -->
		<link href="../../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="../../dist/css/sb-admin-2.css" rel="stylesheet">
		<!-- Morris Charts CSS -->
		<link href="../../vendor/morrisjs/morris.css" rel="stylesheet">
		<!-- Custom Fonts -->
		<link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		
		<style>
			input { 
				margin-bottom: 5px; 
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			
			<?php 
				include('../../navigasi/nav4.php') 
			?>
			
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Data Event</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h4>Ubah Data Event</h4>
						<?php
						// get username2
						$num = $_GET['num'];
						// memanggil data pengguna
						$queryUser = "SELECT * FROM data_event WHERE num='$num'";
						if ($r = mysql_query($queryUser))
						{
							$baris = mysql_fetch_array($r);
							$num = htmlentities($baris['num']);
							$nama = htmlentities($baris['nama']);
							$bidang = htmlentities($baris['bidang']);
							$tanggal = htmlentities($baris['tanggal']);
							$lokasi = htmlentities($baris['lokasi']);
							$jangka = htmlentities($baris['jangka']);
							$penjelasan = htmlentities($baris['penjelasan']);
							$target = htmlentities($baris['target']);
							$req = htmlentities($baris['req']);
							$posisi = htmlentities($baris['posisi']);
							$biaya = htmlentities($baris['biaya']);
							$keuntungan = htmlentities($baris['keuntungan']);
							?>
							<form action="editsave.php?num=<?php echo $num;?>" method="POST" name="FormUpload" id="FormUpload" enctype="multipart/form-data">
								<table border="0" cellpadding="5" cellspacing="5">
									<tr>
										<td width="250">Nama Event</td>
										<td width="3">:</td>
										<td width="250"><input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required="required"></td>
									</tr>
									<tr>
										<td width="250">Bidang Event</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="bidang" value="<?php echo $bidang; ?>" required="required"></td>
									</tr>
									<tr>
										<td width="250">Tanggal Event</td>
										<td width="3">:</td>
										<td><input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>" required="required"></td>
									</tr>
									<tr>
										<td width="250">Lokasi Event</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="lokasi" value="<?php echo $lokasi; ?>" required="required"></td>
									</tr>
									<tr>
										<td width="250">Jangka Waktu Recruitment</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="jangka" value="<?php echo $jangka; ?>"></td>
									</tr>
									<tr>
										<td width="250">Penjelasan Event</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="penjelasan" value="<?php echo $penjelasan; ?>"></td>
									</tr>
									<tr>
										<td width="250">Target Event</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="target" value="<?php echo $target; ?>"></td>
									</tr>
									<tr>
										<td width="250">Requirement Applicant</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="req" value="<?php echo $req; ?>"></td>
									</tr>
									<tr>
										<td width="250">Posisi yang Dibutuhkan</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="posisi" value="<?php echo $posisi; ?>"></td>
									</tr>
									<tr>
										<td width="250">Biaya Program</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="biaya" value="<?php echo $biaya; ?>"></td>
									</tr>
									<tr>
										<td width="250">Keuntungan Ikut Event</td>
										<td width="3">:</td>
										<td><input type="text" class="form-control" name="keuntungan" value="<?php echo $keuntungan; ?>"></td>
									</tr>
									<tr>
										<td colspan=3><input type="submit" class="btn btn-primary btn-block btn-large" name="submit" value="Simpan" /></td>
									</tr>
								</table>
							</form>
							<a href="../data_event/">Kembali</a>
						<?php
						} else {
							echo "<p>Tidak bisa mengambil data.</p>";
						}

						mysql_close(); //Menutup sesi MySQL
						?>
						<br/>
						<br/>
				</div>
			</div>
		</div>
	</body>
</html>