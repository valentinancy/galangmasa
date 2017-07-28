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
						<h4>Lihat Data Event</h4>
						<?php
						$query = "SELECT * FROM data_event";
						if ($query = mysql_query($query))
						{
						?>
							<table width="100%" class="table table-bordered" bgcolor='#ffffff' border="1" cellpadding="5" cellspacing="0" align="center">
								<tr align='center'>
									<td><b>#</b></td>
									<td><b>Nama Event</b></td>
									<td width="70"><b>Detil</b></td>
									<td width="70"><b>Daftar</b></td>
								</tr>
								<?php
								$email = $_SESSION['email'];
								$i = 1;
								while ($data = mysql_fetch_array($query))
								{
									$cari = mysql_query("SELECT * FROM data_daftar WHERE num='".$data['num']."' AND email='$email'");
									$terdapat = mysql_num_rows($cari);
								?>
									<tr align='center'>
										<td><?php echo $i++; ?></td>
										<td><?php echo $data['nama']; ?></td>
										<?php if (($data['penulis'] != $email)&&($terdapat == 0)){ ?>
										<td width="70"><a href="detil.php?num=<?php echo $data['num'];?>"><button style="width:80px;" class="btn btn-primary btn-addon">Detil</button></a></td>
										<td width="70"><a href="input_daftar.php?num=<?php echo $data['num'];?>&email=<?php echo $email;?>"><button style="width:80px;" class="btn btn-info edit">Daftar</button></a></td>
										<?php } else if (($data['penulis'] != $email)&&($terdapat > 0)){ ?>
										<td width="70"><a href="detil.php?num=<?php echo $data['num'];?>"><button style="width:80px;" class="btn btn-primary btn-addon">Detil</button></a></td>
										<td width="70"><a href="batal_daftar.php?num=<?php echo $data['num'];?>&email=<?php echo $email;?>"><button style="width:80px;" class="btn btn-danger delete">Batal</button></a></td>
										<?php } else { ?>
										<td width="70"><a href="detil.php?num=<?php echo $data['num'];?>"><button style="width:80px;" class="btn btn-primary btn-addon">Detil</button></a></td>
										<td style="background-color:grey"></td>
										<?php } ?>
									</tr>
								<?php
								}
								?>
							</table>
						<?php
						} else {
							echo "<p>Data kosong.</p>";
						}
						mysql_close(); //Menutup sesi MySQL
						?>
						<br/>
					</div>
				</div>
			</div>
		</div>	

		<!-- jQuery -->
		<script src="../../vendor/jquery/jquery.min.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="../../vendor/bootstrap/js/bootstrap.min.js"></script>

		<!-- Metis Menu Plugin JavaScript -->
		<script src="../../vendor/metisMenu/metisMenu.min.js"></script>

		<!-- Morris Charts JavaScript -->
		<script src="../../vendor/raphael/raphael.min.js"></script>
		<script src="../../vendor/morrisjs/morris.min.js"></script>
		<script src="../../data/morris-data.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="../../dist/js/sb-admin-2.js"></script>
	
	</body>
</html>