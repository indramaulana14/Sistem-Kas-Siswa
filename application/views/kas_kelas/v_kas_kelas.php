<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Halaman Kas Kelas</title>
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
            <li><a href="<?= base_url('index.php/bendahara/bendahara')?>">Beranda</a></li>
            <li><a href="<?= base_url('index.php/kas_siswa/kas_ganjil')?>">Kas Siswa</a></li>
            <li class="active"><a href="<?= base_url('index.php/kas_kelas/kas_kelas')?>">Kas Kelas</a></li>
            <li><a href="<?= base_url('index.php/kas_kelas/Laporan')?>">Laporan Uang Kas</a></li>
            <li><a type="button" class="btn-get-started scrollto" data-toggle="modal" data-target="#logout">Keluar</a></li>
        </ul>
      </nav>
    </div>
  </header><!-- End Header -->

	<div id="table" class="container">
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" margin-top="500px">
				<h3></br></h3>
				<h1 class="">DATA KAS KELAS XII RPL 2</h1>
				<h2 class="">Semester Ganjil</h2>
		</div>
    <?php echo $this->session->flashdata('message')?>
		<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center" style="padding-top: 800px;">
      <div class="content table-responsive text-center">
			<table class="table table-bordered table-striped table-hover" >
				<tr>
					<thead bgcolor= "#b5e3f4"; >
						<th>No</th>
						<th>ID Rekap</th>
						<th>Total</th>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Aksi</th>
					</thead>
				</tr>
				<?php 
				$no = 1;
				foreach($kas_kelas as $u){ 
				?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $u->id_rekap ?></td>
					<td>Rp. <?php echo $u->total ?></td>
					<td><?php echo $u->tanggal ?></td>
					<td><?php echo $u->keterangan ?></td>
					<td>
            <a class="btn btn-outline-primary" href="<?= base_url('index.php/kas_kelas/kas_kelas/edit/'.$u->id_rekap) ?>">Edit</a>
            <!-- <a class="btn btn-outline-danger" href="<?= base_url('index.php/kas_kelas/kas_kelas/hapus/'.$u->id_kas) ?>">Hapus</a> -->
            <!-- <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modaledit">Edit</button> -->
            <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalhapus-<?php echo $u->id_rekap ?>">Hapus</button>

            <div id="modalhapus-<?php echo $u->id_rekap ?>" class="modal fade" role="dialog">
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
                    <p>Apakah Anda Yakin Ingin Menghapus?</p>
                  </div>
                  <!-- footer modal -->
                  <div class="modal-footer">
                    <a class="btn btn-outline-primary" data-dismiss="modal">Tidak</a>
                    <a class="btn btn-outline-danger" href="<?= base_url('index.php/kas_kelas/kas_kelas/hapus/'.$u->id_rekap) ?>">Ya</a>
                  </div>
                </div>
              </div>
            </div>
					</td>
				</tr>
				<?php } ?>
			</table>
    </div>
			<!-- <a class="btn btn-outline-primary" href="<?= base_url('index.php/kas_kelas/kas_kelas/tambah_kas_kelas') ?>">Tambah Data</a> -->
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modaltambah">Tambah</button>
		</div>
	</div>

  <div id="modaltambah" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h4 class="modal-title text-center">Tambah Siswa</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- body modal -->
        <div class="modal-body">

          <form class="form-group" action="<?= base_url('index.php/kas_kelas/kas_kelas/aksi_kas_kelas') ?>" method="post">
            <label>ID Rekap</label>
            <input type="text" class="form-control" name="id_rekap" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
            <br/>
            <label>Total</label>
            <input type="text" class="form-control" name="total" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
            <br/>
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
            <br/>
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
            <br/>
            <input type="submit" class="btn btn-primary" value="Tambah">
          </form>
        </div>
      </div>
    </div>
  </div>

    <!-- <div id="modaledit" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">

      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title text-center">Edit Data Kas Siswa</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
          <?php foreach($kas_kelas as $u){ ?>
          <form class="form-group" action="<?= base_url('index.php/kas_kelas/kas_kelas/update') ?>" method="post">
            <label>ID Rekap</label>
            <input type="text" class="form-control" name="id_kas" value="<?php echo $u->id_rekap ?>">
            <br/>
            <label>Total</label>
            <input type="text" class="form-control" name="total" value="<?php echo $u->total ?>">
            <br/>
            <label>Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="<?php echo $u->tanggal ?>">
            <br/>
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan" value="<?php echo $u->keterangan ?>">
            <br/>
            <input type="submit" class="btn btn-primary" value="Simpan">
          </form>
          <?php } ?>
        </div>
      </div>
    </div>
    </div> -->

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