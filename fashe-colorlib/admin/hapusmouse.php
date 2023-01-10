<?php

$ambil = $koneksi->query("SELECT * FROM mouse WHERE id_mouse='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_mouse'];
if (file_exists("../foto_mouse/$fotomouse"))
{
	unlink("../foto_mouse/$fotomouse");
}

$koneksi->query("DELETE FROM mouse WHERE id_mouse='$_GET[id]'");

echo "<script>alert('Produk Terhapus');</script>";
echo "<script>location='index.php?halaman=mouse';</script>";
?>
