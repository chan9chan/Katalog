
<h2>Daftar Pembelian</h2>

<div class="table-responsive">
<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th class="th-lg">No</th>
			<th class="th-lg">Nama</th>
			<th class="th-lg">Tanggal Pembelian</th>
			<th class="th-lg">Total Pembelian</th>
			<th class="th-lg">Status Belanja</th>
			<th class="th-lg">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil= $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian. id_pelanggan=pelanggan.id_pelanggan ");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama_pelanggan']?></td>
			<td><?php echo date("d F Y", strtotime($pecah['tanggal_pembelian']))?></td>
			<td>Rp. <?php echo number_format($pecah['total_pembelian'])?></td>
			<td><?php echo $pecah['status_pembelian']?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-info">Detail</a>
				<?php if ($pecah['status_pembelian']!=="pending"): ?>
				<a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_pembelian']?>" class= "btn btn-success">Pembayaran</a>
				<?php endif ?>
			</td>
		</tr>
		<?php $nomor++;?>
		<?php }?>
	</tbody>
</table>

<?php 
$semuadata=array();
$am=$koneksi->query("SELECT*FROM pembelian_produk WHERE id_produk='35'");
WHILE ($pe=$am->fetch_assoc())
	{
		$semuadata[]=$pe;
	}
?>