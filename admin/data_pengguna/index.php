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
			input,select { 
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
						<h1 class="page-header">Data Pengguna</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<h4>Tambah Data Pengguna</h4>
						<form action="input_user.php" method="POST" name="FormUpload" id="FormUpload">
							<table border="0" cellpadding="5" cellspacing="5">
								<tr>
									<td width="150">Email</td>
									<td width="3">:</td>
									<td><input type="email" class="form-control" name="email" required="required"></td>
								</tr>
								<tr>
									<td width="150">Password</td>
									<td width="3">:</td>
									<td><input type="password" class="form-control" name="password" required="required"></td>
								</tr>
								<tr>
									<td width="150">Nama</td>
									<td width="3">:</td>
									<td width="200"><input type="text" class="form-control" name="nama" required="required"></td>
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
									<td width="150">Universitas/Jurusan</td>
									<td width="3">:</td>
									<td><input type="text" class="form-control" name="univ"></td>
								</tr>
								<tr>
									<td width="150">Posisi</td>
									<td width="3">:</td>
									<td>
										<select class="form-control" name="posisi">
											<option value="" disabled selected>Posisi</option>
											<option value="Admin">Admin</option>
											<option value="User">User</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan=3><input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Simpan" /></td>
								</tr>
							</table>
						</form>
						<hr />
						<h4>Informasi Data Pengguna</h4>
						<?php
						$query = "SELECT * FROM data_pengguna";
						if ($query = mysql_query($query))
						{
						?>
							<!--Menampilkan data pengguna -->
							<table bgcolor='#ffffff' class="table table-bordered" border="1" cellpadding="5" cellspacing="0">
								<tr align='center'>
									<td width="40"><b>#</b></td>
									<td width="300"><b>Email</b></td>
									<td width="70"><b>Detil</b></td>
									<td width="70"><b>Edit</b></td>
									<td width="70"><b>Hapus</b></td>
								</tr>
								<?php
								$i = 1;
								
								while ($data = mysql_fetch_array($query))
								{
								?>
								<tr align='center'>
									<td><?php echo $i++; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td width="70"><a href="detil.php?email=<?php echo $data['email'];?>"><button style="width:80px;" class="btn btn-primary btn-addon">Detil</button></a></td>
									<td width="70"><a href="edit.php?email=<?php echo $data['email'];?>"><button style="width:80px;" class="btn btn-info edit">Ubah</button></a></td>
									<td width="70"><a href="hapus.php?email=<?php echo $data['email'];?>"><button style="width:80px;" class="btn btn-danger delete" 
									onclick="return confirm('Anda Yakin Akan Menghapus Data Ini?')">Hapus</button><a></td>
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