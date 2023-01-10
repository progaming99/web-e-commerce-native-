<?php
//koneksi ke database
session_start();
include 'koneksi.php';
?>

<html lang="en">
<head>
	<title>Home</title>
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

<!------------------------------------------------------------ Header -------------------------------------------------------------------->
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

					
				</div>
			</div>

			<div class="wrap_header">
<!---------------------------------------------------------------- Logo ------------------------------------------------------------------->
				<a href="index.php" class="logo">
					<img src="images/icons/logo.png" alt="IMG-LOGO">
				</a>

<!------------------------------------------------------------ Menu ------------------------------------------------------------------------>
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

<!--------------------------------------------------------------- Header Icon --------------------------------------------------------------->
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


					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

<!------------------------------------------------------------- Header cart noti ---------------------------------------------------------->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

<!------------------------------------------------------------- Header Mobile ------------------------------------------------------------->
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

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

<!-------------------------------------------------------------------- Menu Mobile --------------------------------------------------->
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
						<a href="index.html">Home</a>
						<i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Produk</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">Tentang Kami</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Kontak</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-05.jpg);">
		<h2 class="l-text2 t-center">
			Blog
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<!-- item blog -->
						<div class="item-blog p-b-80">
							<a href="blog-detail.html" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="images/blog-01.jpg" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									10 Juli, 2018
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="blog-detail.html" class="m-text24">
										Supaya Kenikmatan Gaming Makin Terasa, Yuk Simak Cara Milih Keyboard Gaming Berikut Ini
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Jarvis
										<span class="m-l-3 m-r-6">|</span>
									</span>
								</div>
								<p class="p-b-12">
									Kalau kamu seorang gamers, pasti sudah nggak asing lagi dengan akun Tangan Belang, bukan? Ya, dibaliknya adalah Tira, seorang ad agency dan content creator yang kecanduan gaming dari awal 80’an, musimnya retro console gaming seperti Atari, Nintendo, dan SEGA. Bahkan setelah Next Generation Console hingga PC gaming muncul, Tira selalu setia mengikuti perjalanan gaming dan sering berbagi pengalamannya di media sosial maupun channel Youtube-nya, Tangan Belang.
									</p>

								<a href="blog-detail2.html" class="s-text20">
									Lanjut Membaca
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<!-- item blog -->
						<div class="item-blog p-b-80">
							<a href="blog-detail.html" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="images/blog-02.jpg" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									10 July, 2018
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="blog-detail.html" class="m-text24">
										5 Tips memilih headset gaming
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Firman Rasyid
										<span class="m-l-3 m-r-6">|</span>
									</span>
								</div>

								<p class="p-b-12">
									Untuk Anda para gamer, biasanya headset juga termasuk perlengkapan yang selalu ada. Apalagi untuk Anda para gamer yang suka bermain game FPS, tentunya headset ini akan sangat membantu dalam fokus pada game tersebut.
								</p>

								<a href="blog-detail.html" class="s-text20">
									Lanjut Membaca
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						<!-- item blog -->
						<div class="item-blog p-b-80">
							<a href="blog-detail.html" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="images/blog-03.jpg" alt="IMG-BLOG">

								<span class="item-blog-date dis-block flex-c-m pos1 size17 bg4 s-text1">
									10 july, 2018
								</span>
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="blog-detail.html" class="m-text24">
										Agar tidak keliru, ini perdaan mouse gaming dan mouse biasa
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By Amirudin
										<span class="m-l-3 m-r-6">|</span>
									</span>
								</div>

								<p class="p-b-12">
									Meski ukurannya sekitar sekepalan tangan, keberadaan mouse tetap tidak bisa dipandang remeh. Dengan mouse, menggerakkan kursor jadi lebih mudah, cepat dan akurat ke arah manapun yang Anda inginkan.
								</p>

								<a href="blog-detail1.html" class="s-text20">
									Lanjut Membaca
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>

					<!-- Pagination -->
					<div class="pagination flex-m flex-w p-r-50">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
				</div>

				<div class="col-md-4 col-lg-3 p-b-75">
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
								<a href="product_keyboard.html" class="s-text13 p-t-5 p-b-5">
									Keyboard
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="product_headphone.html" class="s-text13 p-t-5 p-b-5">
									HeadPhone
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="product_mouse.html" class="s-text13 p-t-5 p-b-5">
									Mouse
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="product_vga.html" class="s-text13 p-t-5 p-b-5">
									VGA Card
								</a>
							</li>

							<li class="p-t-6 p-b-8 bo7">
								<a href="product_motherbosrd.html" class="s-text13 p-t-5 p-b-5">
									Motherboard
								</a>
							</li>
							
							<li class="p-t-6 p-b-8 bo7">
								<a href="product_memory.html" class="s-text13 p-t-5 p-b-5">
									Memory
								</a>
							</li>
							
							<li class="p-t-6 p-b-8 bo7">
								<a href="product_processor.html" class="s-text13 p-t-5 p-b-5">
									Processor
								</a>
							</li>
						</ul>

						<!-- Featured Products -->
						<h4 class="m-text23 p-t-65 p-b-34">
							Produk Lainnya
						</h4>

						<ul class="bgwhite">
							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="images/item-06.jpg" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										ASUS STRIX GeForce GTX 950
									</a>

									<span class="dis-block s-text17 p-t-6">
										Rp 2.800.000
									</span>
								</div>
							</li>

							<li class="flex-w p-b-20">
								<a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
									<img src="images/item-17.jpg" alt="IMG-PRODUCT">
								</a>

								<div class="w-size23 p-t-5">
									<a href="product-detail.html" class="s-text20">
										Team Elite Plus 8GB ddr3
									</a>

									<span class="dis-block s-text17 p-t-6">
										Rp 885.000
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
					RedComp
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Ada Pertanyaan ? Anda bisa langsung datang ke Toko kami di Ruko Garden Shopping Arcade No. 8EK
Podomoro City - Central Park
Jl. Letjen S. Parman Kav. 28
Grogol - Petamburan
Jakarta Barat
11470 atau hubungi kita di 081287735520
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
