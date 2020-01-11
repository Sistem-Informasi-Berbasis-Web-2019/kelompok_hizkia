	<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Lomba Lintas Alam XXVIII Se-Nusantara 2019 | Ambalan Soeriaatmadja-Dewi Sartika</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/images/lla1.png">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Lomba Lintas Alam XXVIII, SMAN 1 Sumedang, Pramuka, Sumedang" />
	<meta name="description" content="Lomba Lintas Alam XXVIII Se-Nusantara 2019 di SMAN 1 Sumedang.">

	<meta property="og:title" content="Lomba Lintas Alam XXVIII Se-Nusantara 2019 | Ambalan Soeriaatmadja-Dewi Sartika">
    <meta property="og:description" content="Lomba Lintas Alam XXVIII Se-Nusantara 2019 di SMAN 1 Sumedang">
    <meta property="og:image" content="<?php echo base_url()?>assets/images/lla1.png">
	<script>
		// addEventListener("load", function () {
		// 	setTimeout(hideURLbar, 0);
		// }, false);

		// function hideURLbar() {
		// 	window.scrollTo(0, 1);
		// }
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/animation-aos.css">
	<link href='<?php echo base_url()?>assets/css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<!-- animation css -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/all.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/sweetalert/sweetalert.css">
	 <!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<div class="mian-content-2">
		<!-- header -->
		<header data-aos="fade-down">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="logo text-left">
					<h1>
						<a class="navbar-brand" href="<?php echo base_url()?>assets/index.html">
							<img src="<?php echo base_url()?>assets/images/lla1.png" style="width: 50px;">
							LLA XXVIII
						</a>
					</h1>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">

					</span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-lg-auto text-lg-right text-center">
						<li class="nav-item ">
							<a class="nav-link" href="<?php echo base_url()?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url()?>#about">Profil Organisasi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url()?>#sejarah">Sejarah</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url()?>#galeri">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url()?>Contact">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- //header -->
		<h2 class="font-w3ls-style text-white">Pendaftaran</h2>
	</div>

	<!-- main -->

	<!-- contact -->
	<section class="banner-bottom-w3layouts pt-5">
		<div class="container-fluid pt-xl-5 pt-lg-3">
			<!-- heading title -->
			<div class="mb-lg-5 mb-4 text-center">
				<h3 class="title-wthree text-dark mb-2">Pendaftaran</h3>
				<p class="sub-tittle-2">Daftarkan Pangkalan/Sekolahmu untuk mengikuti lomba lintas alam XXVIII Se-Nusantara 2019 di SMAN 1 Sumedang</p>				
					
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>				
			<?php if ($this->session->flashdata('berhasil')) {
					echo '<script>
						swal("Terima Kasih", "Telah Mendaftar Lomba Lintas Alam XXVIII Se-Nusantara 2019", "success");
					</script>';
				}elseif ($this->session->flashdata('gagal')) {
					echo '<script>
						swal("Tidak Bisa Daftar", "Silahkan Dicoba Kembali", "warning");
					</script>';
				}
				?>
			</div>
			<!-- //heading title -->
			<!-- contact address -->
			<div class="container">
				<form enctype="multipart/form-data" method="post" action="<?php echo base_url('Daftar/pendaftaran')?>">
					<div class="row">
						<div class="col-md-12" style="margin-bottom: 10px">
							<p>*Download 
							<a href="<?php echo base_url()?>assets/data/Surat_Edaran_Undangan_Lla_Smansa_ke_XXVIII_Se-Nusantara.pdf" target="_blank">
								Surat Edaran Undangan Lla Smansa ke XXVIII Se-Nusantara
							</a></p>
						</div>
						<div class="col-md-6">
							<label>Nama Pembina :</label>
							<input type="text" name="nama_pembina" class="tambah" style="width: 100%" required="" autofocus="" placeholder="Nama Pembina">
						</div>
						<div class="col-md-6">
							<label>No Pembina :</label>
							<input type="text" name="no_pembina" class="tambah" style="width: 100%" required="" autofocus="" placeholder="No Pembina">
						</div>
						<div class="col-md-6">
							<label>Nama Pangkalan/Sekolah :</label>
							<input type="text" name="nama_pangkalan" class="tambah" style="width: 100%" required="" placeholder="Nama Pangkalan/Sekolah">
						</div>
						<div class="col-md-6">
							<label>Gugus Depan :</label>
							<input type="text" name="gugus_depan" class="tambah" style="width: 100%" required="" placeholder="Gugus Depan">
						</div>
						<div class="col-md-12">
							<label>Alamat Gugus Depan :</label>
							<textarea name="alamat_gugus" required="" placeholder="Alamat Lengkap"></textarea>
						</div>
						<div class="col-md-12">
						    <p>Data Pendaftaran berupa nama-nama regu dan biodata pembina sesuai dengan format Lampiran 2 &amp; Lampiran 3</p>
							<p>Data pendaftaran dalam 1 file PDF dengan diberi nama file nama pangkalan, Maks 2Mb</p>

							<input type="file" name="data_file" required="" value="Telusuri..">

							<p>*sesuai dengan format pendaftaran pada lampiran 2 &amp; Lampiran 3 <a href="<?php echo base_url()?>assets/data/Surat_Edaran_Undangan_Lla_Smansa_ke_XXVIII_Se-Nusantara.pdf" target="_blank">
								Surat Edaran Undangan Lla Smansa ke XXVIII Se-Nusantara
							</a></p>
							<p>No Rekening BRI:</p>
							<p>Gerakan Pramuka ASDS : <a href="#">0094-01-019503-53-1</a></p>
						</div>
						<div class="col-md-6">
							<input type="submit" name="submit" value="Daftar">
						</div>
					</div>
				</form>
			</div>
			<!-- //contact address -->
		</div>
	</section>
	<!-- //contact -->

	<?php $this->load->view('footer')?>