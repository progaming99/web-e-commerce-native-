<h2>Ubah Produk<h2>

<?php
$ambil=$koneksi->query("SELECT * FROM mouse WHERE id_mouse='$_GET[id]'");
$pecah= $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Produk</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_mouse']; ?>">
	</div>
	
	<div class="form-group">
		<label>Harga Rp</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga_mouse']; ?>">
	</div>	

	<div class="form-group">
		<label>Berat (Gr)</label>
		<input type="number" class="form-control" name="berat" value="<?php echo $pecah['berat']; ?>">
	</div>

	<div class="form-group">
		<img src="../foto_mouse/<?php echo $pecah['foto_mouse'] ?>" width="200">
	</div>
	<div class="form-group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="10">
			<?php echo $pecah['deskripsi']; ?>
		</textarea>
	</div>

	<button class="btn btn-primary" name="ubah">Ubah</button>
</form> 

<?php
if (isset($_POST['ubah']))
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	//jika foto di ubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../foto_mouse/$namafoto");

		$koneksi->query("UPDATE mouse SET nama_mouse='$_POST[nama]',
			harga_mouse='$_POST[harga]',berat='$_POST[berat]',
			foto_mouse='$namafoto',deskripsi='$_POST[deskripsi]' WHERE id_mouse='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE mouse SET nama_mouse='$_POST[nama]',
			harga_mouse='$_POST[harga]',berat='$_POST[berat]',
			deskripsi='$_POST[deskripsi]' WHERE id_mouse='$_GET[id]'");
	
	}
	echo "<script>alert('data produk telah di rubah');</script>";
	echo "<script>location='index.php?halaman=mouse';</script>";
}
?>