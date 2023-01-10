<?php
//koneksi ke database
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Client Signup Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main main-agileits">
		<h1>Login Pembeli</h1>
		<div class="main-agilerow"> 
			<div class="signup-wthreetop">
				<h2>Selamat Datang</h2>
				<p>Di Toko RedComp</p>
			</div>	
			
			<div class="contact-wthree">
				<form action="#" method="post">
					<h3>Masuk</h3>
					<div class="form-w3step1">
						<input type="email" name="email" placeholder="Email" required=""> 
						<input type="password" class="form-control agileits-btm" name="password" placeholder="Password" required=""> 
					</div>

					<div class="agileits-row2 w3ls-formrow2">
						<input type="checkbox" id="brand2" value="">
						<label for="brand2"><span></span>Saya Setuju Dengan Kebijakan Pengguna</label> 
					</div>  
					<input type="submit" value="Masuk" name="simpan">
					<div class="contact-wthree">
                    <center><h3>Belum Punya Akun?</h3><a href="Daftar.php"><h3>Daftar</h3></a></center></div>
				</form>

				<?php
				// jk tombol simpan di tekan
				if (isset($_POST["simpan"]))
				{
					$email = $_POST["email"];
					$password = $_POST["password"];
					// lakukan query ngecek akun di tabel pelanggan di db
					$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");

					// ngitung akun yg terambil
					$akunyangcocok = $ambil->num_rows;

					//jk 1 akun yg cocok, maka akn di loginkan
					if ($akunyangcocok==1)
					{
						//anda sukses login
						//mendapatkan akun dalam bentuk array
						$akun = $ambil->fetch_assoc();
						// simpan di session pelanggan
						$_SESSION["pelanggan"] = $akun;
						echo "<script>alert('Anda Sukses Login');</script>";

						// jika sudah belanja
						if (isset($_SESSION["keranjang"]) OR !empty($_SESSION["keranjang"]))
						{
							echo "<script>location='checkout.php';</script>";
						}
						else
						{
							echo "<script>location='riwayat.php';</script>";
						}
					}
					else
					{
						// anda gagal login
						echo "<script>alert('Anda Gagal Login');</script>";
						echo "<script>location='login.php';</script>";
					
					}

				}
				?>
			</div>  
		</div>	
	</div>	
	<!-- //main -->
	<!-- copyright -->
	<div class="w3copyright-agile">
		<p>© 2017 Client Signup Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
	<!-- //copyright --> 
</body>
</html>