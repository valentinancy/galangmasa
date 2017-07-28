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
	
		<style>
			input { 
				margin-bottom: 5px; 
			}
		</style>
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
						<h4>Tambah Data Event</h4>
						<form method="post" action="input_event.php" enctype="multipart/form-data"/>
							<table border="0" cellpadding="5" cellspacing="5">
								<tr>
									<td width="250">Nama Event</td>
									<td width="3">:</td>
									<td width="250"><input class="form-control" type="text" name="nama" required="required"></td>
								</tr>
								<tr>
									<td width="250">Bidang Event</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="bidang" required="required"></td>
								</tr>
								<tr>
									<td width="250">Tanggal Event</td>
									<td width="3">:</td>
									<td><input class="form-control" type="date" name="tanggal" required="required"></td>
								</tr>
								<tr>
									<td width="250">Lokasi Event</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="lokasi" required="required"></td>
								</tr>
								<tr>
									<td width="250">Jangka Waktu Recruitment</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="jangka"></td>
								</tr>
								<tr>
									<td width="250">Penjelasan Event</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="penjelasan"></td>
								</tr>
								<tr>
									<td width="250">Target Event</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="target"></td>
								</tr>
								<tr>
									<td width="250">Requirement Applicant</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="req"></td>
								</tr>
								<tr>
									<td width="250">Posisi yang Dibutuhkan</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="posisi"></td>
								</tr>
								<tr>
									<td width="250">Biaya Program</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="biaya"></td>
								</tr>
								<tr>
									<td width="250">Keuntungan Ikut Event</td>
									<td width="3">:</td>
									<td><input class="form-control" type="text" name="keuntungan"></td>
								</tr>
								<tr>
									<td colspan=3><input type="submit" class="btn btn-primary btn-block btn-large" name="submit" value="Simpan" /></td>
								</tr>
							</table>
						</form>
						<hr />
						<h4>Informasi Data Event</h4>
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
									<td width="70"><b>Ubah</b></td>
									<td width="70"><b>Hapus</b></td>
								</tr>
								<?php
								$i = 1;
								while ($data = mysql_fetch_array($query))
								{
								?>
									<tr align='center'>
										<td><?php echo $i++; ?></td>
										<td><?php echo $data['nama']; ?></td>
										<td width="70"><a href="detil_event.php?num=<?php echo $data['num'];?>"><button style="width:80px;" class="btn btn-primary btn-addon">Detil</button></a></td>
										<td width="70"><a href="edit.php?num=<?php echo $data['num'];?>"><button style="width:80px;" class="btn btn-info edit">Ubah</button></a></td>
										<td width="70"><a href="hapus.php?num=<?php echo $data['num']; ?>" onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')">
										<button style="width:80px;" class="btn btn-danger delete">Hapus</button></a></td>
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