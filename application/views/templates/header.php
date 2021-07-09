<!DOCTYPE HTML>
<html lang="id">
	<head>
		<title> Mailaku - <?php echo $title ?></title>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/main.css')?>" type="text/css">
		<link rel="stylesheet" href="<?php echo base_url('/assets/framework-css/fa/css/all.css')?>" type="text/css">
	</head>
<body>
<header>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg bg-danger navber-light" id="navbar_top">
		<div class="container">
			<a href="<?php echo base_url('')?>" class="navbar-brand text-white">Beranda</a>
			<button class="navbar-toggler text-white fs-6 border border-1 rounded rounded-2 p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
				<span class="fa fa-home me-1"></span>
				Menu
			</button>
			<div class="collapse navbar-collapse" id="navmenu">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="" class="nav-link text-white">Tentang Mailaku</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link text-white">Berita</a>
					</li>
				</ul>
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="" class="nav-link text-white">Transaksi</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link text-white">Bantuan</a>
					</li>
					<li class="dropdown border border-danger">
						<a class="nav-link text-white dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fas fa-user-circle fa-fw"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton2">
							<li><a class="dropdown-item" href="<?php echo base_url("login")?>">Login</a></li>
							<li><a class="dropdown-item" href="<?php echo base_url("daftar")?>">Daftar</a></li>
							<li><hr class="dropdown-divider"></li>
							<?php ?>
							<li><a class="dropdown-item" href="<?php echo base_url("daftar")?>" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
							<?php ?>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- Search Content -->
<section>
	<nav class="navbar navbar-expand-lg p-3 bg-light">
		<div class="container gap-2">
			<input class="form-control rounded rounded-pill w-50" type="text" placeholder="Pencarian">
			<select class="form-select rounded rounded-pill w-25" name="" id="">
				<option value="" selected>Semua Kategori</option>
				<?php
					foreach($kategori as $i => $kategori)
					{?>
						<option value="<?php echo $kategori->title?>"><?php echo $kategori->title?></option>	
					<?php
				}?>
			</select>
			<select class="form-select rounded rounded-pill w-25" name="" id="">
				<option value="">Semua Lokasi</option>
				<?php
					foreach($region as $i => $region)
					{?>
						<option value="<?php echo $region->title?>"><?php echo $region->title?></option>	
					<?php
				}?>
			</select>
			<button class="btn btn-outline-danger rounded rounded-pill">
				<i class="fa fa-search"></i>
			</button>
		</div>
	</nav>
</section>
<main>
	<div>
