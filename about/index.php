<?php
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
                            <a href="." class="navbar-brand">GalangMasa</a>
                        </div>
                        <div class="collapse navbar-collapse navbar-right" id="mynavbar">
                            <ul class="nav navbar-nav">
                                <li><a href="../">Home</a></li>
                                <li><a href="../event/">Event</a></li>
                                <li><a href="../login/">Login</a></li>
                                <li class="active"><a href="./about/">About</a></li>
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
						<h2 class="head-title">ABOUT</h2>
						<hr class="botm-line">
						<p>GalangMasa adalah wadah bagi seluruh masyarakat untuk mencari rekan dan bagian dalam kegiatan yang mereka inisiasi.
                        <br/>
                        <br/>
                        Mulai dari acara kampus, kegiatan komunitas, kegiatan sosial, hingga kegiatan yang diinisiasi secara pribadi untuk mencapai suatu tujuan baik, semuanya membutuhkan dukungan orang-orang yang memiliki semangat yang sama dan juga tujuan yang sama.
                        <br/>
                        <br/>
                        Di GalangMasa, kami membuka peluang untuk mencari dukungan orang-orang yang akan hadir dan bekerja bersama mewujudkan tujuan bersama.
                        <br/>
                        <br/>
                        Mulailah dengan sebuah gagasan, dan tampilkan sehingga orang-orang dapat mengetahui semangatmu!
                        </p>
                        <br/>
						<hr/>
						<br/>
						<p>Initiated By: Hafiz</p>
						<p>Developed By: Gabe, Nancy, and Rizqi</p>
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