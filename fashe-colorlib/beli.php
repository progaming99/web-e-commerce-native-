<?php
session_start();
//mendapatkan id produk dari url
$id_produk = $_GET['id'];

//jika sudah ada produk itu di keranjang, maka produk itu jumlahnya di tambah 1
if(isset($_SESSION['keranjang'][$id_produk]))
{
	$_SESSION['keranjang'][$id_produk]+=1;
}
//jika produk itu belum ada di keranjang maka barang yang di beli cuma 1
else
{
	$_SESSION['keranjang'][$id_produk] =1;
}

//jika di klik beli akan pindah ke halaman
 echo "<script>alert('produk telah masuk ke keranjang');</script>";
 echo "<script>location='keranjang.php';</script>";
?>