<h2>Data Mouse</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>harga</th>
			<th>berat</th>
			<th>foto</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM mouse"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_mouse']; ?></td>
			<td><?php echo $pecah['harga_mouse']; ?></td>
			<td><?php echo $pecah['berat']; ?></td>
			<td>
				<img src="../foto_mouse/<?php echo $pecah['foto_mouse']; ?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=hapusmouse&id=<?php echo $pecah['id_mouse']; ?>" class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahmouse&id=<?php echo $pecah['id_mouse']; ?>" class="btn-warning btn">Ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>

	</tbody>
</table>
<a href="index.php?halaman=tambahmouse" class="btn btn-primary">Tambah Data</a>				