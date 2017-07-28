<?php
	//menghubungi database MySQL
	require('../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>GalangMasa</title>
		
		<link rel="icon" href="../images/logo.jpg" type="image/x-icon">
		
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../css/animate.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	<body>
		<!--header-->
		<header class="main-header" id="header">
			<div class="bg-color">
				<!--nav-->
				<nav class="nav navbar-default navbar-fixed-top">
					<div class="container">
						<div class="col-md-12">
							<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
								<span class="fa fa-bars"></span>
							</button>
								<a href="index.php" class="navbar-brand">GalangMasa</a>
							</div>
							<div class="collapse navbar-collapse navbar-right" id="mynavbar">
								<ul class="nav navbar-nav">
									<li><a href="../">Home</a></li>
									<li class="active"><a href="../event/">Event</a></li>
									<li><a href="../login/">Login</a></li>
									<li><a href="../about/">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<section class="section-padding wow fadeInUp delay-02s">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<center>
							<a href="../event/">Kembali</a>
							<h2>DETIL EVENT</h2>
							<br/>
							<?php
							// get username2
							$num = $_GET['num'];
							
							// tampil foto
							$file_foto = "../uploads/foto_".$num.".jpg";
							if (file_exists($file_foto)){
								echo '<a href="'.$file_foto.'"><img src="'.$file_foto.'" width="600"></a>';
							}
							else{
								echo 'Foto belum diunggah';
							}
							echo '<hr/>';
							
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
								$penulis = htmlentities($baris['penulis']);
								?>
								<form>
									<table border="0" cellpadding="5" cellspacing="5">
										<tr>
											<td width="200"><b>Nama Event</b></td>
											<td width="3">:</td>
											<td><b><?php echo $nama; ?></b></td>
										</tr>
										<tr>
											<td width="250">Bidang Event</td>
											<td width="3">:</td>
											<td><?php echo $bidang; ?></td>
										</tr>
										<tr>
											<td width="250">Tanggal Event</td>
											<td width="3">:</td>
											<td><?php echo $tanggal; ?></td>
										</tr>
										<tr>
											<td width="250">Lokasi Event</td>
											<td width="3">:</td>
											<td><?php echo $lokasi; ?></td>
										</tr>
										<tr>
											<td width="250">Jangka Waktu Recruitment</td>
											<td width="3">:</td>
											<td><?php echo $jangka; ?></td>
										</tr>
										<tr>
											<td width="250">Penjelasan Event</td>
											<td width="3">:</td>
											<td><?php echo $penjelasan; ?></td>
										</tr>
										<tr>
											<td width="250">Target Event</td>
											<td width="3">:</td>
											<td><?php echo $target; ?></td>
										</tr>
										<tr>
											<td width="250">Requirement Applicant</td>
											<td width="3">:</td>
											<td><?php echo $req; ?></td>
										</tr>
										<tr>
											<td width="250">Posisi yang Dibutuhkan</td>
											<td width="3">:</td>
											<td><?php echo $posisi; ?></td>
										</tr>
										<tr>
											<td width="250">Biaya Program</td>
											<td width="3">:</td>
											<td><?php echo $biaya; ?></td>
										</tr>
										<tr>
											<td width="250">Keuntungan Ikut Event</td>
											<td width="3">:</td>
											<td><?php echo $keuntungan; ?></td>
										</tr>
										<tr>
											<td width="250">Penulis</td>
											<td width="3">:</td>
											<td><?php echo $penulis; ?></td>
										</tr>
									</table>
								</form>
							<?php
							} else {
								echo "<p>Tidak bisa mengambil data.</p>";
							}
							mysql_close(); //Menutup sesi MySQL
							?>
						</center>
					</div>
				</div>
			</div>
		</section>

		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.easing.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/wow.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../contactform/contactform.js"></script>
    
	</body>
</html>