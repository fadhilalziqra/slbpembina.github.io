<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?= base_url('templatelogin/images/icons/favicon.ico'); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('templatelogin/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" <?= base_url('templatelogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ;?>"> 
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('templatelogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ;?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('templatelogin/vendor/animate/animate.css') ;?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=" <?= base_url('templatelogin/vendor/css-hamburgers/hamburgers.min.css') ;?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('templatelogin/vendor/animsition/css/animsition.min.css') ;?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" <?= base_url('templatelogin/vendor/select2/select2.min.css') ;?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href=" <?= base_url('templatelogin/vendor/daterangepicker/daterangepicker.css') ;?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" <?= base_url('templatelogin/css/util.css') ;?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('templatelogin/css/main.css') ;?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(templatelogin/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Silahkan Masuk!
					</span>
				</div>
				<?php echo $this->session->flashdata('pesan')?>
				<form method="post" action="<?php echo base_url('auth/login') ?>" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Masukkan username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Masukkan password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							
							
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--===============================================================================================-->
	<script src="<?= base_url('templatelogin/vendor/jquery/jquery-3.2.1.min.js') ;?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('templatelogin/vendor/animsition/js/animsition.min.js') ;?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('templatelogin/vendor/bootstrap/js/popper.js') ;?>"></script>
	<script src="<?= base_url('templatelogin/vendor/bootstrap/js/bootstrap.min.js') ;?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('templatelogin/vendor/select2/select2.min.js') ;?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('templatelogin/vendor/daterangepicker/moment.min.js') ;?>"></script>
	<script src="<?= base_url('templatelogin/vendor/daterangepicker/daterangepicker.js') ;?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('templatelogin/vendor/countdowntime/countdowntime.js') ;?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('templatelogin/js/main.js') ;?>"></script>

</body>
</html>