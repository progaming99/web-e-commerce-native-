<!DOCTYPE html>
<html lang="en">
<head>
	<title>Produk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					
				</span>

				<div class="topbar-child2">
					<span class="topbar-email">
						andika99.as48@gmail.com
					</span>

					<div class="topbar-language rs1-select2">
						
					</div>
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.html" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="keranjang.php">Keranjang</a>
							</li>

							<li>
								<a href="checkout.php">Checkout</a>
							</li>

							<li>
								<a href="blog.php">Blog</a>
							</li>

							<li>
								<a href="about.php">Tentang Kami</a>
							</li>

							<li>
								<a href="contact.php">Kontak</a>
							</li>

							<li>
								<a href="daftar.php">Daftar</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
					<?php if (isset($_SESSION["pelanggan"])): ?>
					<a href="logout.php" class="header-wrapicon1 dis-block">
						<div>Logout
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</div>
					</a>

					<?php else: ?>
					<a href="login.php" class="header-wrapicon1 dis-block">
						<div>Login
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						</div> 
					</a>
				<?php endif ?>


					

					
					</div>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

<!------------------------------------------------ Menu Mobile ---------------------------------------->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								Andika99.as48@gmail.com
							</span>
						</div>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
						<a href="index.php">Home</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="keranjang.php">Keranjang</a>
					</li>

					<li class="item-menu-mobile">
						<a href="checkout.php">Checkout</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.php">Blog</a>
					</li>


					<li class="item-menu-mobile">
						<a href="about.php">Tentang Kami</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.php">Kontak</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>


	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.html" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="blog.html" class="s-text16">
			Blog
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			5 Tips memilih headset gaming
		</span>
	</div>

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="images/blog-04.jpg" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									5 Tips memilih headset gaming
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Firman Rasyid
										<span class="m-l-3 m-r-6">|</span>
									</span>

									<span>
										10 July, 2018
										<span class="m-l-3 m-r-6">|</span>
									</span>
								</div>
								<h4 class="p-b-11 m-text11">
								Pilih yang support dengan Virtual Surround 7.1
								</h4>
								<p class="p-b-25">
									Virtual Surround 7.1 adalah sebuah fitur yang sangat membantu untuk mendengarkan suara seperti layaknya di dalam bioskop. Karena, dengan fitur ini maka suara se kecil apa pun bisa Anda dengarkan, seakan-akan Anda berada di dalam area tersebut. Nah, dengan fitur ini tentunya para pemain game FPS seperti CS:GO, Warface, atau lainnya tentunya akan lebih mudah dalam mengetahui kalau ada musuh yang mendekat dari arah tertentu. Tapi, pastikan pula komputer (PC atau laptop) yang Anda gunakan juga sudah mendukung untuk fitur tersebut.
								</p>
								
								<h4 class="p-b-11 m-text11">
								Pilih yang Audiophile atau Gaming?
								</h4>
								<p class="p-b-25">
									Audiophile ini biasanya memang memiliki kualitas suara yang lebih bagus dan jernih dibandingkan dengan headphone (headset) gaming. Akan tetapi, umumnya headset dengan teknologi Audiophile ini lebih banyak digunakan dalam perekaman suara atau editing lainya. Tapi, kalau untuk Anda yang memang ingin bermain game saja, maka Anda cukup menggunakan Headphone gaming saja. Pasalnya, untuk perangkat headphone gaming memang biasanya telah dilengkapi dengan berbagai fitur dan software yang dikhususkan untuk kebutuhan gaming.
								</p>
								
								<h4 class="p-b-11 m-text11">
								Sudah mendukung fitur Noise Cancellation
								</h4>
								<p class="p-b-25">
								Noise Cancellation ini bisa sangat membantu jika Anda sedang bermain game bersama atau multiplayer, secara online. Ini bisa membantu agar suara headphone Anda bisa terdengar lebih jernih lagi. Tentunya cara ini bisa cukup membantu kalau Anda berkomunikasi dengan teman Anda yang lainnya. Karena, dengan fitur Noise Cancellation tersebut maka Anda bisa mereduce suara yang kresek-kresek atau lainnya, sehingga suara Anda tetap terdengar jernih didengarkan oleh teman tim Anda.
								</p>
								
								<h4 class="p-b-11 m-text11">
								Kabel atau tanpa kabel
								<p class="p-b-25">
								Satu lagi tips yang perlu Anda perhatikan adalah panjang kabel dari headphone tersebut adalah yang memiliki kabel atau tanpa kabel (Wifi/Bluetooth). Kalau Anda memilih yang menggunakan kabel, maka pilihlah yang minimal 1,5 meter, dengan kabel yang telah terbungkus oleh serat yang bagus. Tapi, jika Anda memilih yang tanpa kabel, maka sebaiknya pastikan saja jangkauannya itu bisa minimal 10 meter.
								<br>
								<br>
								Nah, itulah beberapa tips dari Saya jika Anda memang ingin membeli headphone dengan kemampuan gaming.
								</p>
							</div>
						</div>

						<!-- Leave a comment -->
						<form class="leave-comment">
							<h4 class="m-text25 p-b-14">
								Tinggalkan Komentar
							</h4>

							<textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Comment..."></textarea>

							<div class="bo12 of-hidden size19 m-b-20">
								<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" id="a" placeholder="Nama">
							</div>

							<div class="bo12 of-hidden size19 m-b-20">
								<input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" id="b" placeholder="Email">
							</div>

							<div class="w-size24">
								<!-- Button -->
								<button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
									Komentar
								</button>
							</div>
						</form>
						</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-80">
					<div class="rightbar">
						<!-- Search -->
						<div class="pos-relative bo11 of-hidden">
							<input class="s-text7 size16 p-l-23 p-r-50" type="text" name="search-product" placeholder="Search">

							<button class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4">
								<i class="fs-13 fa fa-search" aria-hidden="true"></i>
							</button>
						</div>

						<!-- Categories -->
						<h4 class="m-text23 p-t-56 p-b-34">
							Kategori
						</h4>

						<ul>
							<li class="p-t-6 p-b-8 bo6">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Keyboard
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									HeadPhone
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Mouse
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									VGA Card
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Motherboard
								</a>
							</li>
							
							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Memory
								</a>
							</li>
							
							<li class="p-t-6 p-b-8 bo7">
								<a href="#" class="s-text13 p-t-5 p-b-5">
									Processor
								</a>
							</li>
						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Featured Products
						</h4>

						<ul class="bgwhite">
							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="images/item-16.jpg" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										White Shirt With Pleat Detail Back
									</a>

									<span class="dis-block s-text17 p-t-6">
										$19.00
									</span>
								</div>
							</li>

							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="images/item-17.jpg" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										Converse All Star Hi Black Canvas
									</a>

									<span class="dis-block s-text17 p-t-6">
										$39.00
									</span>
								</div>
							</li>

							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="images/item-08.jpg" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										SAPPHIRE RX 460 2GB OC
									</a>

									<span class="dis-block s-text17 p-t-6">
										Rp 1.500.000
									</span>
								</div>
							</li>

							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="images/item-03.jpg" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										AMD Ryzen 5 1600 3.2Ghz-3.6Ghz Cache 19mb - Socket AM4
									</a>

									<span class="dis-block s-text17 p-t-6">
										Rp 2.585.000
									</span>
								</div>
							</li>

							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="images/item-05.jpg" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										ASUS GTX- STRIX 960 DC2 OC 128Bit 4GB DDR5
									</a>

									<span class="dis-block s-text17 p-t-6">
										Rp 3.600.000
									</span>
								</div>
							</li>
						</ul>
			
					</div>
				</div>
			</div>
		</div>
	</section>

<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					CloudStore
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Ada Pertanyaan ? Anda bisa langsung datang ke Toko kami di Bulustalan barat 1 no.17a Semarang Selatan, Kota Semarang, Jawa Tengah 50245 atau hubungi kita di 081287735520
					</p>

					<div class="flex-m p-t-30">
						<a href="https://www.facebook.com/profile.php?id=100009970904484" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="https://www.instagram.com/andika.99/?hl=id" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Kategori
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Keyboard
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							HeadPhone
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Mouse
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							VGA Card
						</a>
					</li>
					
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Motherboard
						</a>
					</li>
					
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Memory
						</a>
					</li>
					
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Processor
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Informasi
				</h4>
				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Tentang Kita
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Hubungi Kita
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Blog
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Bantuan
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Metode Pembayaran
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Opsi Pengiriman
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Cara Berbelanja
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					Dapatkan info terbaru dari kami
				</h4>

				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="Masukan Email Anda">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							Subscribe
						</button>
					</div>

				</form>
			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
