<h2>Detail Pembelian</h2>
<?php 
$ambil =$koneksi->query("SELECT*FROM pembelian JOIN pelanggan
	ON pembelian.id_pelanggan=pelanggan.id_pelanggan
	WHERE pembelian.id_pembelian='$_GET[id]'");
$detail =$ambil->fetch_assoc();
?>

<div class="row">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		<strong>NO PEMBELIAN: <?php echo $detail['id_pembelian']; ?></strong><br>
		Tanggal : <?php  echo $detail['tanggal_pembelian']; ?><br>
		Status Barang : <?php  echo $detail['status_pembelian']; ?><br>
		Total Bayar : Rp. <?php echo number_format($detail['total_pembelian']); ?>
	</div>
	<div class="col-md-4">
		<h3>Pelanggan</h3>
		<strong>NAMA : <?php echo $detail['nama_pelanggan']; ?></strong><br>
		Telepon : <?php echo $detail['telepon_pelanggan']; ?><br>
		Email : <?php echo $detail['email_pelanggan']; ?>
	</div>
	<div class="col-md-4">
		<h3>Pengiriman</h3>

		<strong>ALAMAT : <?php echo $detail['tipe']; ?> <?php echo $detail['distrik']; ?> <?php echo $detail['provinsi']; ?></strong><br>
		Ekspedisi : <?php echo $detail['ekspedisi']; ?> <?php echo $detail['paket']; ?> <?php echo $detail['estimasi']; ?><br>
		Ongkos Kirim : Rp. <?php echo number_format($detail['ongkir']); ?><br>
		Alamat Pengiriman: <?php echo $detail['alamatpengiriman']; ?>
	</div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
	<thead>
		<tr>
			<th class="th-lg">No</th>
			<th class="th-lg">Nama Produk</th>
			<th class="th-lg">Harga</th>
			<th class="th-lg">Berat</th>
			<th class="th-lg">Jumlah</th>
			<th class="th-lg">Ongkir</th>
			<th class="th-lg">Total Harga</th>
			<th class="th-lg">Total Berat</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>
		<?php $ambil= $koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'");?>
		<?php WHILE ($pecah =$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor;?></td>
			<td><?php echo $pecah['nama'];?></td>
			<td>Rp. <?php echo number_format($pecah['harga']);?></td>
			<td><?php echo $pecah['berat'];?> Gram</td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td>Rp. <?php echo number_format($detail['ongkir']);?></td>
			<td>Rp. <?php echo number_format($pecah['subharga']);?></td>
			<td><?php echo $pecah['subberat']?> Gram</td>
		</tr>
		<?php $nomor++;?>
		<?php } ?>
	</tbody>
</table>