<?php 
session_start();
include 'koneksi.php';

if (empty($_SESSION['keranjang']) OR !isset($_SESSION["keranjang"]))
{
	echo "<script> alert('Keranjang Kosong');</script>";
	echo "<script> location ='home.php';</script>";
}
?>
<?php include 'menu.php'; ?><br><br><br>
<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <title>Katalog Logistik</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
</head>
<body>
<section class="konten">
	<div class="container">
		<h1>Keranjang Belanja</h1>
		<hr>
		<div class="table-responsive">
		<table class="table table-bordered ">
			<thead>
				<tr>
					<th class="th-lg">No</th>
					<th class="th-lg">Produk</th>
					<th class="th-lg">Harga</th>
					<th class="th-lg">Jumlah Beli</th>
					<th class="th-lg">Total Harga</th>
					<th class="th-lg">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1;?>
				<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):?>
				<?php
				$ambil= $koneksi->query("SELECT * FROM produk 
					WHERE id_produk='$id_produk'");
				$pecah=$ambil->fetch_assoc();
				$totalharga= $pecah["harga_produk"]*$jumlah;
				?>
				<tr>
					<td><?php echo $nomor;?></td>
					<td><?php echo $pecah['nama_produk'];?></td>
					<td>Rp <?php echo number_format($pecah['harga_produk']);?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp <?php echo number_format($totalharga);?></td>
					<td>
						<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">hapus</a>
					</td>
				</tr>
				<?php $nomor++;?>
				<?php endforeach ?>
			</tbody>
		</table>

		<a href="home.php" class= "btn btn-default"><i class="fa fa-cart-plus"></i>Lanjutkan Belanja</a>
		<a href="checkout.php" class= "btn btn-primary">Checkout</a>
	</div>
</section>
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="fontawesome/js/all.min.js"></script>

</body>
</html>