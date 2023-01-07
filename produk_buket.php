<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Produk</title>
  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  	<meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">

	  <meta content="" name="description">
	  <meta content="" name="keywords">

	  <!-- Favicons -->
	  <link href="assets/img/favicon.png" rel="icon">
	  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	  <!-- Vendor CSS Files -->
	  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
	  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<style type="text/css">
	.card-img-top{
		object-fit: cover;
	}
	.card .btn{
		float: right;
	}
</style>
<body>
	<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">sasaflorist@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>089224477522</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">Sasa Florist</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Produk</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="deskripsi_produk.php">Pembelian</a></li>
              <li><a href="pengembalian.php">Pengembalian</a></li>
            </ul>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
          <li><a class="nav-link scrollto" href="saran.php">Saran</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
	<div class="container-fluid p-5">
		<h3 class="mb-4">Bouquet</h3>
		<div class="row" >
			<?php
					include 'koneksi.php';
					$query_buket = "SELECT * FROM jenisbuket LIMIT 3";
					$result_buket = $koneksi->query($query_buket);
					while($row_buket = mysqli_fetch_array($result_buket)){ ?>
						<div class="col">
							<div class="card shadow border-0 mb-5">
								<img src="<?php echo $row_buket['gambar']?>" class="card-img-top" height="400" width="400" >
								<div class="card-body">
									<h5 class="card-title"><?php echo $row_buket['nama_barang']?></h5>
									<p class="card-text"><?php echo $row_buket['keterangan']?></p>
									<h5 class="card-title"><?php echo $row_buket['harga']?></h5>
									<a href="transaksi_buket.php?beli=<?php echo $row_buket['id_barang_buket']; ?>" class="btn btn-primary px-4 shadow">Beli</a>
								</div>
							</div>	
						</div>
					<?php
				}
			?>
		</div>
		<br>
		<div class="row">
			<?php
					$query_buket = "SELECT * FROM jenisbuket ORDER BY id_barang_buket DESC LIMIT 3";
					$result_buket = $koneksi->query($query_buket);
					while($row_buket = mysqli_fetch_array($result_buket)){ ?>
						<div class="col">
							<div class="card shadow border-0 mb-5">
								<img src="<?php echo $row_buket['gambar']?>" class="card-img-top" height="400" width="400" >
								<div class="card-body">
									<h5 class="card-title"><?php echo $row_buket['nama_barang']?></h5>
									<p class="card-text"><?php echo $row_buket['keterangan']?></p>
									<h5 class="card-title"><?php echo $row_buket['harga']?></h5>
									<a href="transaksi_buket.php?beli=<?php echo $row_buket['id_barang_buket']; ?>" class="btn btn-primary px-4 shadow">Beli</a>
								</div>
							</div>	
						</div>
					<?php
				}
			?>
		<a href="deskripsi_produk.php" class="btn btn-primary px-4 shadow">Kembali</a>
		</div>
	</div>
	<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Remember</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/remember-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>