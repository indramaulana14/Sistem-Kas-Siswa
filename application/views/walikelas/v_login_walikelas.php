
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('login/images/icons/favicon.ico') ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('login/css/main.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url ('login/css/signin.css') ?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form role="form" method="post" action="<?= base_url('index.php/walikelas/login_walikelas/aksi_login') ?>" class="login100-form validate-form">

					<span class="login100-form-title p-b-33">
						Masuk Sebagai Wali Kelas
					</span>

					<?php
						if(!empty($notif)){
							echo'<div class="alert alert-danger text-center">';
							echo 'Nama Pengguna dan Kata Sandi Salah';
							echo '</div>';
						}
						?>

					<div class="wrap-input100 validate-input" data-validate = "Username Harus Diisi">
						<input class="input100" type="text" name="username" placeholder="Nama Pengguna" required oninvalid="this.setCustomValidity('Bagian ini harus diisi')" oninput="setCustomValidity('')">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password Harus Diisi">
						<input class="input100" type="password" name="password" minlength="8" required oninvalid="this.setCustomValidity('Masukan sedikitnya 8 karakter')" oninput="setCustomValidity('')" placeholder="Kata Sandi">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<input type="submit" value="Masuk" class="login100-form-btn">
					</div>

					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
						
						</span>

						<a class="txt2 hov1">
						
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							<a href="<?= base_url('index.php') ?>">Kembali Ke Halaman Awal</a>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>

	
<!--===============================================================================================-->
	<script src="<?= base_url('login/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('login/vendor/animsition/js/animsition.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('login/vendor/bootstrap/js/popper.js') ?>"></script>
	<script src="<?= base_url('login/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('login/vendor/select2/select2.min.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('login/vendor/daterangepicker/moment.min.js') ?>"></script>
	<script src="<?= base_url('login/vendor/daterangepicker/daterangepicker.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('login/vendor/countdowntime/countdowntime.js') ?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('login/js/main.js') ?>"></script>

</body>
</html>