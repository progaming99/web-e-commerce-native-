<?php
session_start();
include 'koneksi.php';

//jika tidak ada session pelanggan (blm login) makan dilarikan ke login.php
if (!isset($_SESSION["pelanggan"]))
{
	echo "<script>alert('Anda harus login dahulu');</script>";
	echo "<script>location='login.php';</script>";
}
?>

<html lang="en">
<head>
	<title>Keranjang</title>
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
				</div>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="index.php" class="logo">
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
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">Tentang Kita</a>
							</li>

							<li>
								<a href="contact.html">Kontak</a>
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

					
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
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
								andika99.as48@gmail.com
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
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!------------------------------- Keranjang ---------------------------------------------->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1">No</th>
							<th class="column-2">Produk</th>
							<th class="column-3">Harga</th>
							<th class="column-4">Jumlah</th>
							<th class="column-5">Total</th>
						</tr>
							<?php $nomor=1;  ?>
							<?php $totalbelanja = 0; ?>
							<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):  ?>
<!---------- menampilkan produk yang di perulangkan berdasarkan id produk --------------->
							<?php
							$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
							$pecah = $ambil->fetch_assoc();
							$subharga = $pecah["harga_produk"]*$jumlah;

							?>
						<tr class="table-row">
							<td class="column-1"><?php echo $nomor; ?></td>
							<td class="column-2"><?php echo $pecah["nama_produk"]; ?></td>
							<td class="column-3">Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
							<td class="column-4"><?php echo $jumlah; ?></td>
							<td class="column-5">Rp. <?php echo number_format($subharga); ?></td>
							
						</tr>
						<?php $nomor++; ?>
						<?php $totalbelanja+=$subharga; ?>
						<?php endforeach ?>
						<tfood>
						<tr>
							<th colspan="4">Total Belanja</th>
							<th>Rp. <?php echo number_format($totalbelanja) ?></th>
						</tr>
					</tfood>
					</table>
					

					<form method="post">

						<div class="row">
							<div class="col-md-4">
						        <div class="form-group">
									<input type="text" readonly value="<?php echo $_SESSION["pelanggan"]['nama_pelanggan'] ?>" class="form-control">
							</div>
						</div>
							<div class="col-md-4">
						        <div class="form-group">
							     	<input type="text" readonly value="<?php echo $_SESSION["pelanggan"]['telepon_pelanggan'] ?>" class="form-control">
								</div>
							</div>
							<div class="col-md-4">
								<select class="form-control" name="id_ongkir">
									<option value="">Pilih Ongkos Kirim</option>
									<?php
									$ambil = $koneksi->query("SELECT * FROM ongkir");
									while($perongkir = $ambil->fetch_assoc()){
										?>
									<option value="<?php echo $perongkir["id_ongkir"] ?>">
									<?php echo $perongkir['nama_kota'] ?> -
									Rp. <?php echo number_format($perongkir['tarif']) ?>
								</option>
							<?php } ?>
								</select>
							</div>
					</div>
					<div class="form-group">
						<label>Alamat Lengkap Pengiriman</label>
						<textarea class="form-control" name="alamat_pengiriman" placeholder="Masukan Alamat Lengkap Pengiriman(Termasuk Kode Pos)"></textarea>
					</div>
					<div class="w-size2 p-t-20">
						<!-- Button -->
					<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" name="checkout">
							Checkout
					</button>
					</div>

					</form>

					<?php
					if (isset($_POST["checkout"]))
					{
						$id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
						$id_ongkir = $_POST["id_ongkir"];
						$tanggal_pembelian = date("Y-m-d");
						$alamat_pengiriman = $_POST['alamat_pengiriman'];

						$ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
						$arrayongkir = $ambil->fetch_assoc();
						$nama_kota = $arrayongkir['nama_kota'];
						$tarif = $arrayongkir['tarif'];

						$total_pembelian = $totalbelanja + $tarif;

						// 1. menyimpan data ke tabel pembelian
						$koneksi->query("INSERT INTO pembelian (
							id_pelanggan,id_ongkir,tanggal_pembelian,total_pembelian,nama_kota,tarif,alamat_pengiriman)
							VALUES ('$id_pelanggan','$id_ongkir','$tanggal_pembelian','$total_pembelian','$nama_kota','$tarif','$alamat_pengiriman') ");

						// mendapatkan id_pembeli barusan terjadi
						$id_pembelian_barusan = $koneksi->insert_id;

						foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) 
						{

// mendapatkan data produk berdasarkan id_produk----------------------------------------------
							$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
							$perproduk = $ambil->fetch_assoc();

							$nama = $perproduk['nama_produk'];
							$harga = $perproduk['harga_produk'];
							$berat = $perproduk['berat'];

							$subberat = $perproduk['berat']*$jumlah;
							$subharga = $perproduk['harga_produk']*$jumlah;
							$koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,nama,harga,berat,subberat,subharga,jumlah)
							VALUES ('$id_pembelian_barusan','$id_produk','$nama','$harga','$berat','$subberat','$subharga','$jumlah') ");

							//skrip update stok
							$koneksi->query("UPDATE produk SET stok_produk=stok_produk -$jumlah
								WHERE id_produk='$id_produk'");
						}

						// mengosongkan keranjang belanja
						unset($_SESSION["keranjang"]);


						// tampilan di alihkan ke halaman nota, nota dari pembelian yg barusan terjadi
						echo "<script>alert('Pembelian Sukses');</script>";
						echo "<script>location='nota.php?id=$id_pembelian_barusan';</script>";
						
					


					}
					?>

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
	<script src="js/main.js"></script>

</body>
</html>
