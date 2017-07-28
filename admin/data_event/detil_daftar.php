<?php
	//menghubungi database MySQL
	require('../../koneksi/sql_connect.php');
	sql_connect('db_hafiz');
	
	session_start();
	if((!$_SESSION)||($_SESSION['posisi'] != 'Admin')){
		echo "<script>window.alert('Akses Tidak Diberikan')</script>";
		if($_SESSION['posisi'] == 'User'){
			echo "<script>window.location='../../user/';</script>";
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
		
	</head>
	<body>
		<div id="wrapper">
			
			<?php 
				include('../../navigasi/nav2.php') 
			?>
			
			<div id="page-wrapper">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Data Event</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h4>Detil Data Pendaftar</h4>
						<?php
						// get
						$num = $_GET['num'];
						$no = $_GET['no'];
						// memanggil data pengguna
						$queryUser = "SELECT * FROM data_event WHERE num='$num'";
						if ($r = mysql_query($queryUser))
						{
							$baris = mysql_fetch_array($r);
							$num = htmlentities($baris['num']);
							$nama = htmlentities($baris['nama']);
							$penulis = htmlentities($baris['penulis']);
							?>
							<form>
								<table width="100%" border="0" cellpadding="5" cellspacing="5">
									<tr>
										<td width="250">Nama Event</td>
										<td width="3">:</td>
										<td><?php echo $nama; ?></td>
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
							echo "<p>Data kosong.</p>";
						}
						$query = "SELECT * FROM data_daftar WHERE num='$num' AND no_daftar='$no'";
						if ($r = mysql_query($query))
						{
							$baris = mysql_fetch_array($r);
							$nama = htmlentities($baris['mhs']);
							$telp = htmlentities($baris['telp']);
							$sosmed = htmlentities($baris['sosmed']);
							$email = htmlentities($baris['email']);
							$univ = htmlentities($baris['univ']);
						?>
							<hr/>
							<form>
								<table width="100%" border="0" cellpadding="5" cellspacing="5">
									<tr>
										<td width="250">Nama</td>
										<td width="3">:</td>
										<td><?php echo $nama; ?></td>
									</tr>
									<tr>
										<td width="250">No. Telp</td>
										<td width="3">:</td>
										<td><?php echo $telp; ?></td>
									</tr>
									<tr>
										<td width="250">Line/WhatsApp</td>
										<td width="3">:</td>
										<td><?php echo $sosmed; ?></td>
									</tr>
									<tr>
										<td width="250">Email</td>
										<td width="3">:</td>
										<td><?php echo $email; ?></td>
									</tr>
									<tr>
										<td width="250">Universitas/Jurusan</td>
										<td width="3">:</td>
										<td><?php echo $univ; ?></td>
									</tr>
								</table>
							</form>
						<?php
						} else {
							echo "<p>Data kosong.</p>";
						}
						mysql_close(); //Menutup sesi MySQL
						?>
						<a href="../data_event/detil_event.php?num=<?php echo $num; ?>">Kembali</a>
						<br/>
						<br/>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>