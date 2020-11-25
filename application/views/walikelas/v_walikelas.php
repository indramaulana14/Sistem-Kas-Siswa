<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Bendahara</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/remixicon/remixicon.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a>Kasmp.</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- .nav-menu -->
	  <nav class="nav-menu d-none d-lg-block align-right">
        <ul>
            <li class="active"><a href="#header">Beranda</a></li>
		  <!-- <li><a href="#services">Tentang</a></li> -->
            <li><a href="<?= base_url('index.php/kas_kelas/laporan_walikelas')?>">Uang Kas</a></li>
            <li><a type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#logout">Keluar</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 pt-2 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Hallo Selamat Datang </h1>
		  <h2>Di Sistem Manajemen Uang Kas</h2>
		  <h2>SMK Manangga Pratama</h2>
          <ul>
              <li><i class="bx bx-check"></i> Pantau Terus Uang Kas Kelas</li>
              <li><i class="bx bx-check"></i> Pastikan Siswa Bayar Uang Kas</li>
              <li><i class="bx bx-check"></i> Pastikan Uang Kas Kelas Aman</li>
            </ul>
          <div class="mt-3">
            <a href="<?= base_url('index.php/kas_kelas/Laporan_walikelas')?>" class="btn-get-started scrollto">Cek Uang Kas</a>
            <!-- <a href="" class="btn-get-quote">Apa Itu Kas Kelas?</a> -->
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?= base_url('assets/img/walikelas.png') ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

    

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>SMK Manangga Pratama</span></strong>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="logout" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title text-center">Peringatan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">
          <p>Apakah Anda Yakin Ingin Keluar?</p>
        </div>
        <!-- footer modal -->
        <div class="modal-footer">
          <a class="btn btn-outline-primary" data-dismiss="modal">Tidak</a>
          <a class="btn btn-outline-danger" href="<?= base_url('index.php/walikelas/login_walikelas/logout') ?>">Ya</a>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/waypoints/jquery.waypoints.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/counterup/counterup.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>