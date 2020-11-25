<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/bootstrap.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url ('assets/css/signin.css') ?>">
  <script type="text/javascript" src="<?= base_url ('assets/js/jquery.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url ('assets/js/bootstrap.js') ?>"></script>
</head>
<body>
    <nav class="my-2 my-lg-0 navbar navbar-expand-md navbar-dark fixed-top bg-info text-right">
      <a class="navbar-brand">SMK Manangga Pratama</a>
      <div class="box collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cek Uang Kas </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link navbar-light dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kelola Uang Kas </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Kas Masuk</a>
              <a class="dropdown-item" href="#">Kas Keluar</a>
              <a class="dropdown-item" href="#">Rekap</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Begin Page Content -->
      <div id="page-wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <?php
                $this->load->view($main_view);
              ?>
            </div>
          </div>
        </div>
      </div>
  </body>



</html>
