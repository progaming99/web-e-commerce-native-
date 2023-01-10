<?php
session_start();
$koneksi = new mysqli("localhost","root","","redcomp")
?>

<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg2.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="login.php">
					<span class="login100-form-title p-b-53">
						Selamat Datang Admin
					</span>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Nama Pengguna
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<span class="focus-input100"><i class"fa fa-tag" ></i></span>
						<input type="text" class="form-control" name="user" />
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Kata Sandi
						</span>					
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class=""><i class=fa fa-lock" ></i></span>
						<input type="password" class="form-control" name="pass" />
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="login">			Masuk
						</button>
					</div>
						</form>
				<?php
				if (isset($_POST['login']))
				{
					$ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[user]' AND password ='$_POST[pass]'");
					$yangcocok = $ambil->num_rows;
					if ($yangcocok==1)
					{
						$_SESSION['admin']=$ambil->fetch_assoc();
						echo "<div class='alert alert-info'>Login Sukses</div>";
						echo "<meta http-equiv='refresh' content='1;url=index.php'>";
					}
					else
					{
						echo "<div class='alert alert-danger'>Login Gagal</div>";
						echo "<meta http-equiv='refresh' content='1;url=login.php'>";
					}
					}
				?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>