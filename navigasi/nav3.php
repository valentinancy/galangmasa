<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="../">GalangMasa</a>
	</div>

	<ul class="nav navbar-top-links navbar-right">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
			</a>
			<ul class="dropdown-menu dropdown-user">
				<li><a href="../profile/user.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
				</li>
				<li class="divider"></li>
				<li><a href="../login/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
				</li>
			</ul>
		</li>
	</ul>

	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<div class="sidebar-search">
				<div class="user-panel">
					<div class="pull-left image">
						<img src="../img/profile.png" class="img-circle" alt="User Image" />
					</div>	
					<div class="pull-center info">
						<a><?php echo $_SESSION['nama']; ?>
						(<?php echo $_SESSION['posisi'].')'; ?></a>
					</div>
				</div>
			</div>
			<br/><br/><br/>
			<ul class="nav" id="side-menu">
				<li>
					<a href="../user/"><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
				</li>
				<li>
					<a href="../user/data_event/"><i class="fa fa-edit fa-fw"></i> Kelola Data Event</a>
				</li>
				<li>
					<a href="../user/lihat_event/"><i class="fa fa-table fa-fw"></i> Lihat Seluruh Event</a>
				</li>
			</ul>
		</div>
	</div>
</nav>