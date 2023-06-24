<h2>Daftar Produk</h2>

<div class="table-responsive">
<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th class="th-lg">No</th>
			<th class="th-lg">Nama</th>
			<th class="th-lg">Kategori</th>
			<th class="th-lg">Harga</th>
			<th class="th-lg">Berat Gr</th>
			<th class="th-lg">Foto</th>
			<th class="th-lg">Stok</th>
			<th class="th-lg">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil=$koneksi->query("SELECT*FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_produk']?></td>
			<td><?php echo $pecah['nama_kategori']?></td>
			<td><?php echo $pecah['harga_produk']?></td>
			<td><?php echo $pecah['berat_produk']?></td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto_produk']?>" width="100px">
			</td>
			<td><?php echo $pecah['stok_produk']?></td>
			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk'];?>" class= "btn btn-danger" onclick="return confirm('Yakin Mau di Hapus?')" ><i class="lyphicon glyphicon-trash"></i>Hapus</a>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk'];?>" class= "btn btn-warning"><i class="lyphicon glyphicon-edit"></i>Ubah</a>
			</td>
		</tr>
		<?php $nomor++;?>
		<?php }?>
	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Produk</a>