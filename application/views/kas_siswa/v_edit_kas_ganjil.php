<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Bendahara</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

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
            <li><a href="<?= base_url('index.php/bendahara/bendahara')?>">Beranda</a></li>
            <li class="active"><a href="<?= base_url('index.php/kas_siswa/kas_ganjil')?>">Kas Siswa</a></li>
            <li><a href="<?= base_url('index.php/kas_kelas/kas_kelas')?>">Kas Kelas</a></li>
            <li><a href="<?= base_url('index.php/kas_kelas/Laporan')?>">Laporan Uang Kas</a></li>
            <li><a type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#logout">Keluar</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

<div class="container" id="table">
  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" margin-top="500px">
        <h3></br></h3>
        <h1>DATA KAS XII RPL 2</h1>
        <h2>SMK Manangga Pratama</h2>
    </div>
            <?php foreach($kas_ganjil as $u){ ?>
              <div class="login-panel panel panel-default">
                <form class="form-group" role="form" action="<?php echo base_url(). 'index.php/kas_siswa/kas_ganjil/update'; ?>" method="post">
                  <input type="hidden" class="form-control" name="nis" value="<?php echo $u->nis ?>">
                  <br/>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama" value="<?php echo $u->nama ?>">
                    </div>
                  </div>
                  <br/>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Juli</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jul" value="<?php echo $u->jul ?>">
                    </div>
                  </div>
                  <br/>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Agustus</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="agu" value="<?php echo $u->agu ?>">
                    </div>
                  </div>
                  <br/>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">September</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="sep" value="<?php echo $u->sep ?>">
                    </div>
                  </div>
                  <br/>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Oktober</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="okt" value="<?php echo $u->okt ?>">
                    </div>
                  </div>
                  <br/>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">November</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nov" value="<?php echo $u->nov ?>">
                    </div>
                  </div>
                  <br/>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Desember</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="des" value="<?php echo $u->des ?>">
                      </div>
                  </div>
                  <br/>
                  <div class="text-center">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                  </div>
                  <br/>
                </form>
              </div>
              <?php } ?>
</div>
<footer id="footer" padding-top="100px">

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
          <a class="btn btn-outline-danger" href="<?= base_url('index.php/bendahara/login_bendahara/logout') ?>">Ya</a>
        </div>
      </div>
    </div>
  </div>

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