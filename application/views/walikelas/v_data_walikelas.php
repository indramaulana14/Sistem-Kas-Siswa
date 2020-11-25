<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Administrator</title>

        <!-- Custom fonts for this template-->
        <link href="<?= base_url('admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css')?>">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="<?= base_url('admin/css/sb-admin-2.min.css')?>" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-2">Kasmp.</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/admin/admin')?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Beranda</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Nav Item - data walikelas -->
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('index.php/walikelas/data_walikelas')?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Wali Kelas</span></a>
                </li>

                <!-- Nav Item - Data Bendahara -->
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('index.php/bendahara/data_bendahara')?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Bendahara</span></a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                      <i class="fas fa-fw fa-user"></i>
                      <span>Data Siswa</span>
                    </a>
                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih Kelas</h6>                        
                        <a class="collapse-item" href="<?= base_url('index.php/siswa/data_siswa')?>">XII RPL 2</a>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                      <!-- Sidebar Toggle (Topbar) -->
                      <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                      </button>
                      <!-- Topbar Navbar -->
                      Manajemen Sistem Kas Siswa SMK Manangga Pratama
                      <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                          <a type="button" class="nav-link" role="button" data-toggle="modal" data-target="#logout">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Keluar
                          </a>
                        </li>
                      </ul>

                    </nav>
                    <!-- End of Topbar -->


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
                            <a class="btn btn-outline-danger" href="<?= base_url('index.php/admin/login_admin/logout') ?>">Ya</a>
                          </div>
                        </div>
                      </div>
                    </div>
        <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800"><span class="text-gray-100">-</span>Halaman Data Wali Kelas</h1>
                        </div>
                        <div class="align-items-center justify-content-between">
                            <h2 class="h4 mb-4 text-gray-800"><span class="text-gray-100">_</span>SMK Manangga Pratama</h2>
                        </div>
        <!-- Content Row -->
                <div class="row">
                	<div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header py-3">
                                      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modaltambah">Tambah Wali Kelas</button>
                                    </div>
                                    <?php echo $this->session->flashdata('message')?>
                                    <div class="content table-responsive text-center">
                        <table class="table table-bordered table-hover" >
                          <thead class="bg-gray-200">
        									<tr>
        										<th class="text-center">No</th>
        										<th class="text-center">ID Wali Kelas</th>
        										<th class="text-center">Nama</th>
        										<th class="text-center">Nama Pengguna</th>
        										<th class="text-center">Kata Sandi</th>
        										<th class="text-center">Aksi</th>
        									</tr>
                          </thead>
        									<?php 
        									$no = 1;
        									foreach($walikelas as $u){ 
        									?>
        									<tr>
        										<td><?php echo $no++ ?></td>
        										<td><?php echo $u->id_walikelas ?></td>
        										<td><?php echo $u->nama ?></td>
        										<td><?php echo $u->username ?></td>
        										<td><?php echo $u->password ?></td>
        										<td>
        							                <a class="btn btn-outline-primary" href="<?= base_url('index.php/walikelas/data_walikelas/edit/'.$u->id_walikelas) ?>">Edit</a>
        							                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modalhapus-<?php echo $u->id_walikelas ?>">Hapus</button>

                                                    <div id="modalhapus-<?php echo $u->id_walikelas ?>" class="modal fade" role="dialog">
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
                                                            <a class="btn btn-outline-danger" href="<?= base_url('index.php/walikelas/data_walikelas/hapus/'.$u->id_walikelas) ?>">Ya</a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                              										</td>
                              									</tr>
                              									<?php } ?>
                              								</table>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- /.container-fluid -->
        </div>
<!-- End of Main Content -->
        <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
<!-- End of Footer -->

            </div>
<!-- End of Content Wrapper -->

        </div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
        </a>

<!-- Logout Modal-->
        <div id="modaltambah" class="modal fade" role="dialog">
          <div class="modal-dialog modal-dialog-centered">
            <!-- konten modal-->
            <div class="modal-content">
              <!-- heading modal -->
              <div class="modal-header">
                <h4 class="modal-title text-center">Tambah Wali Kelas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <!-- body modal -->
              <div class="modal-body">
                <form class="form-group validate-form" action="<?= base_url('index.php/walikelas/data_walikelas/tambah_aksi') ?>" method="post">
                  <label class="label">ID Wali Kelas</label>
                  <input type="text" class="form-control" name="id_walikelas" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
                  <br/>
                  <label class="label">Nama</label>
                  <input type="text" class="form-control" name="nama" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
                  <br/>
                  <label class="label">Nama Pengguna</label>
                  <input type="text" class="form-control" name="username" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
                  <br/>
                  <label class="label">Kata Sandi</label>
                  <input type="text" class="form-control" minlength="8" name="password" required oninvalid="this.setCustomValidity('Masukan sedikitnya 8 karakter')" oninput="setCustomValidity('')">
                  <br/>
                  <input type="submit" class="btn btn-primary" value="Tambah">
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url('admin/vendor/jquery/jquery.min.js')?>"></script>
        <script src="<?= base_url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url('admin/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url('admin/js/sb-admin-2.min.js')?>"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url('admin/vendor/chart.js/Chart.min.js')?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?= base_url('admin/js/demo/chart-area-demo.js')?>"></script>
        <script src="<?= base_url('admin/js/demo/chart-pie-demo.js')?>"></script>

    </body>

</html>