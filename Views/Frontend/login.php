<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="Assets/Frontend/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/css/util.css">
	<link rel="stylesheet" type="text/css" href="Assets/Frontend/css/main.css">

</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('Assets/Frontend/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="index.php?area=Frontend&controller=Login&action=doLogin">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Đăng nhập
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="email" name="email" placeholder="Ehahamail">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Nhớ tôi
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng nhập
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Quên mật khẩu?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="Assets/Frontend/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="Assets/Frontend/vendor/animsition/js/animsition.min.js"></script>
	<script src="Assets/Frontend/vendor/bootstrap/js/popper.js"></script>
	<script src="Assets/Frontend/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="Assets/Frontend/vendor/select2/select2.min.js"></script>
	<script src="Assets/Frontend/vendor/daterangepicker/moment.min.js"></script>
	<script src="Assets/Frontend/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="Assets/Frontend/vendor/countdowntime/countdowntime.js"></script>
	<script src="Assets/Frontend/js/main.js"></script>
</body>
</html>