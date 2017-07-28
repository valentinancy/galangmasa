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
		<link rel="icon" href="images/grahajati.gif" type="image/x-icon">
		
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
						<h4>Ubah Data Pengguna</h4>
						<?php
						// get
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
							$posisi = htmlentities($baris['posisi']);
							?>
							<form action="editsave.php" method="POST" name="FormUpload" id="FormUpload">
								<table border="0" cellpadding="5" cellspacing="5">
									<input type="hidden" value="<?php echo $email; ?>" class="form-control" name="email0" required="required">
									<tr>
										<td width="150">Email</td>
										<td width="3">:</td>
										<td><input type="email" value="<?php echo $email; ?>" class="form-control" name="email" required="required"></td>
									</tr>
									<tr>
										<td width="150">Password</td>
										<td width="3">:</td>
										<td><input type="password" placeholder="********" class="form-control" name="password" required="required"></td>
									</tr>
									<tr>
										<td width="150">Nama</td>
										<td width="3">:</td>
										<td width="200"><input type="text" value="<?php echo $nama; ?>" class="form-control" name="nama" required="required"></td>
									</tr>
									<tr>
										<td width="150">No. Telp</td>
										<td width="3">:</td>
										<td><input type="text" value="<?php echo $telp; ?>" class="form-control" name="telp" required="required"></td>
									</tr>
									<tr>
										<td width="150">Line/WhatsApp</td>
										<td width="3">:</td>
										<td><input type="text" value="<?php echo $sosmed; ?>" class="form-control" name="sosmed" required="required"></td>
									</tr>
									<tr>
										<td width="150">Universitas/Jurusan</td>
										<td width="3">:</td>
										<td><input type="text" value="<?php echo $univ; ?>" class="form-control" name="univ"></td>
									</tr>
									<tr>
										<td width="150">Posisi</td>
										<td width="3">:</td>
										<td>
											<select class="form-control" name="posisi">
												<option value="" disabled selected>Posisi</option>
												<option value="Admin" <?php if ($posisi == "Admin") echo 'selected=="true"'?>>Admin</option>
												<option value="User" <?php if ($posisi == "User") echo 'selected=="true"'?>>User</option>
											</select>
										</td>
									</tr>
									<tr>
										<td colspan=3><input type="submit" name="submit" class="btn btn-primary btn-block btn-large" value="Simpan" /></td>
									</tr>
								</table>
							</form>
							<a href="../data_pengguna/">Kembali</a>
						<?php
						} else {
							echo "<p>Tidak bisa mengambil data.</p>";
						}

						mysql_close(); //Menutup sesi MySQL
						?>
				</div>
			</div>
		</div>
	</body>
</html>