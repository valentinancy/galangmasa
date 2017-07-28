<html>
	<head>
		<meta charset='utf-8'/>
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
								<a href="../" class="navbar-brand">HAFIZ</a>
							</div>
							<div class="collapse navbar-collapse navbar-right" id="mynavbar">
								<ul class="nav navbar-nav">
									<li><a href="../">Home</a></li>
									<li><a href="../event/">Event</a></li>
									<li class="active"><a href="../login/">Login</a></li>
									<li><a href="../about/">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		<div id="container">
			<article class="section-padding wow fadeInUp delay-02s">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<center>
							<a href="../login/">Kembali</a>
							<br/>
							<h2 class="head-title">SIGN UP</h2>
							<hr class="botm-line">
							
							<form action="input_signup.php" method="POST" name="FormUpload" id="FormUpload">
								<table border="0" cellpadding="5" cellspacing="5">
									<tr>
										<td width="100">Email</td>
										<td width="3">:</td>
										<td width="200"><input class="form-control" type="email" name="email" required="required"></td>
									</tr>
									<tr>
										<td width="100">Password</td>
										<td width="3">:</td>
										<td width="200"><input class="form-control" type="password" name="password" required="required"></td>
									</tr>
									<tr>
										<td width="100">Nama</td>
										<td width="3">:</td>
										<td width="200"><input class="form-control" type="text" name="nama" required="required"></td>
									</tr>
									<tr>
										<td width="100">No. Telp</td>
										<td width="3">:</td>
										<td width="200"><input class="form-control" type="number" name="telp" required="required"></td>
									</tr>
									<tr>
										<td width="100">Line/WhatsApp</td>
										<td width="3">:</td>
										<td width="200"><input class="form-control" type="text" name="sosmed" required="required"></td>
									</tr>
									<tr>
										<td width="100">Universitas/Jurusan</td>
										<td width="3">:</td>
										<td width="200"><input class="form-control" type="text" name="univ" required="required"></td>
									</tr>
									<tr>
										<td colspan=3><input type="submit" name="signup" class="btn btn-primary btn-block btn-large" value="Sign Up" /></td>
									</tr>
								</table>
							</form>
						</center>
					</div>
				</div>
			</article>
		</div>
		
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery.easing.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/wow.js"></script>
		<script src="../js/custom.js"></script>
		<script src="../contactform/contactform.js"></script>
		
	</body>
</html>