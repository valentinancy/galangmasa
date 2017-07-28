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
	
		<style>
			input { 
				margin-bottom: 5px; 
			}
		</style>
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
							?>	
								<a href="../event/">Kembali</a>
								<br/>
								<h2>DAFTAR EVENT</h2>
								<br/>
								<b>Nama Event : <?php echo $nama;?></b>
								<br/><br/>
								<form action="input_daftar.php?num=<?php echo $num;?>" method="POST" name="FormUpload" id="FormUpload">
									<table border="0" cellpadding="5" cellspacing="5">
										<input type="hidden" name="num" value="<?php echo $num;?>">
										<tr>
											<td width="150">Nama</td>
											<td width="3">:</td>
											<td width="200"><input type="text" class="form-control" name="mhs" required="required"></td>
										</tr>
										<tr>
											<td width="150">No. Telp</td>
											<td width="3">:</td>
											<td><input type="text" class="form-control" name="telp" required="required"></td>
										</tr>
										<tr>
											<td width="150">Line/WhatsApp</td>
											<td width="3">:</td>
											<td><input type="text" class="form-control" name="sosmed" required="required"></td>
										</tr>
										<tr>
											<td width="150">Email</td>
											<td width="3">:</td>
											<td><input type="email" class="form-control" name="email" required="required"></td>
										</tr>
										<tr>
											<td width="150">Universitas/Jurusan</td>
											<td width="3">:</td>
											<td><input type="text" class="form-control" name="univ"></td>
										</tr>
										<tr>
											<td colspan=3><input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Simpan" /></td>
										</tr>
									</table>
								</form>
							<?php
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