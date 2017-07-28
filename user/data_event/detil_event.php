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
						<h4>Detil Data Event</h4>
						<?php
						// get
						$num = $_GET['num'];
						
						// tampil foto
						$file_foto = "../../uploads/foto_".$num.".jpg";
						if (file_exists($file_foto)){
						?>	
							<form method="post" action="hapus_berkas.php?num=<?php echo $num; ?>" enctype="multipart/form-data"/>
								<a href="hapus_berkas.php?num=<?php echo $num; ?>"><input type="submit"value="Hapus Foto"></a>
							</form>
						<?php
							echo '<a href="'.$file_foto.'"><img src="'.$file_foto.'" width="600"></a>';
						}
						else{
						?>	
							<form method="post" action="unggah_berkas.php?num=<?php echo $num; ?>" enctype="multipart/form-data"/>
								<table>
									<tr>
										<td><input type="file" name="userfile" id="userfile"/></td>
										<td><input type="submit" name="upload" value="Upload!"/></td>
										<td><input type="hidden" name="MAX_FILE_SIZE" value="204800" /></td>
									</tr>
								</table>
							</form>
						<?php
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
							<center>
							<form>
								<table width="100%" border="0" cellpadding="5" cellspacing="5">
									<tr>
										<td width="250">Nama Event</td>
										<td width="3">:</td>
										<td><?php echo $nama; ?></td>
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
						</center>
						<?php
						} else {
							echo "<p>Data kosong.</p>";
						}
						$query = "SELECT * FROM data_daftar WHERE num='$num'";
						if ($query = mysql_query($query))
						{
						?>
							<hr/>
							<h4>Informasi Data Pendaftar</h4>
							<!--Menampilkan data pengguna -->
							<table bgcolor='#ffffff' class="table table-bordered" border="1" cellpadding="5" cellspacing="0">
								<tr align='center'>
									<td width="40"><b>#</b></td>
									<td width="300"><b>Nama</b></td>
									<td width="300"><b>Email</b></td>
									<td width="70"><b>Detil</b></td>
								</tr>
								<?php
								$i = 1;
								while ($data = mysql_fetch_array($query))
								{
								?>
								<tr align='center'>
									<td><?php echo $i++; ?></td>
									<td><?php echo $data['mhs']; ?></td>
									<td><?php echo $data['email']; ?></td>
									<td width="70"><a href="detil_daftar.php?num=<?php echo $num;?>&no=<?php echo $data['no_daftar'];?>"><button style="width:80px;" class="btn btn-primary btn-addon">Detil</button></a></td>
								</tr>
								<?php
								}
								?>
							</table>
							<a href="../data_event/">Kembali</a>
						<?php
						} else {
							echo "<p>Data kosong.</p>";
						}
						mysql_close(); //Menutup sesi MySQL
						?>
					<br/>
					<br/>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>