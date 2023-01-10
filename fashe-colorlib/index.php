<?php
error_reporting(0);
//koneksi ke database
session_start();
include 'koneksi.php';
?>

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
								<a href="riwayat.php">Riwayat</a>
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
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON"></div></a>
					<a href="daftar.php" class="header-wrapicon1 dis-block">
						<div> Daftar</div> 
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

<!------------------------------------------------------------- Title Page ------------------------------------------------------------>
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/heading-pages-02.jpg);">
		<h2 class="l-text2 t-center">
			RedComp
		</h2>
		<p class="m-text13 t-center">
			Koleksi Terbaru di Tahun 2018
		</p>
	</section>

<!---------------------------------------------------------- Content page ------------------------------------------------------------->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Kategori
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="index.php" class="s-text13 active1">
									Semua
								</a>
							</li>

							<li class="p-t-4">
								<a href="headphone.php" class="s-text13">
									Headphone
								</a>
							</li>

							<li class="p-t-4">
								<a href="keyboard.php" class="s-text13">
									Keyboard
								</a>
							</li>

							<li class="p-t-4">
								<a href="memory.php" class="s-text13">
									Memory
								</a>
							</li>

							<li class="p-t-4">
								<a href="motherboard.php" class="s-text13">
									Motherboard
								</a>
							</li>

							<li class="p-t-4">
								<a href="mouse.php" class="s-text13">
									Mouse
								</a>
							</li>

							<li class="p-t-4">
								<a href="processor.php" class="s-text13">
									Processor
								</a>
							</li>

							<li class="p-t-4">
								<a href="vga.php" class="s-text13">
									VGA Card
								</a>
							</li>
						</ul>

<div class="search-product pos-relative bo4 of-hidden">
<form action="index.php" method="get">
<input class="s-text7 size6 p-l-23 p-r-50" type="text" name="cari" placeholder="Cari Produk...">
<button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4" >
<i class="fs-12 fa fa-search" aria-hidden="true"></i>
</form>
</div>
</div>
</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
				<?php 
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
					}
					?>
					<div class="row">
						<?php $ambil = $koneksi->query("SELECT * FROM produk WHERE nama_produk like '%".$cari."%'"); ?>
						<?php while($perproduk =$ambil->fetch_assoc()){ ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">

									<img src="foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">

									<div class="block2-overlay trans-0-4">
										
<!-------------------------------------------------------- Button -------------------------------------------------->
							<div class="block2-btn-addcart w-size1 trans-0-4">
								<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"  >
								Beli
								</a>
							</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $perproduk['nama_produk']; ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										Rp. <?php echo number_format($perproduk['harga_produk']); ?>
									</span>
								</div>
							</div>
						</div>						
				<?php } ?>
			</div>
		</div>
	</section>


<!-------------------------------------------------------------- Footer ------------------------------------------------------------------>
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
						<a href="about" class="s-text7">
							Tentang Kita
						</a>
					</li>

					<li class="p-b-9">
						<a href="contact.php" class="s-text7">
							Hubungi Kita
						</a>
					</li>

					<li class="p-b-9">
						<a href="blog.php" class="s-text7">
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
			Copyright © 2018 All rights reserved.<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>