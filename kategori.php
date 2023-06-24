<?php 
session_start();
include 'koneksi.php';
$kategori = $_GET["id"];


$semuadata=array();
$ambil=$koneksi->query("SELECT*FROM produk WHERE id_kategori LIKE '%$kategori%'");
WHILE($pecah=$ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}
?>
<?php
$datakategori=array();
$ambil= $koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}
?>
<?php $am= $koneksi->query("SELECT * FROM kategori where id_kategori='$kategori'");
$pe=$am->fetch_assoc()
?>
<?php include 'menu.php'; ?><br><br><br><br><br>
<!DOCTYPE html>
<html lang="en">

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
<body>
	<div class="container">
	<div class="col-lg-5 col-5 text-left">
		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
		<div class="input-group">
			<input type="text" class="form-control" name="keyword" placeholder="Cari Produk">
			<button class="btn btn-primary"><i class="fas fa-search"></i></button>
		</form><br></div></div><br>
		
		<h3>Kategori : <?php echo $pe["nama_kategori"] ?></h3>

		<?php if (empty($semuadata)): ?>
			<div class="alert alert-danger">Produk <strong><?php echo  $pe["nama_kategori"]?></strong> Kosong</div>
			
		<?php endif ?>

		<div class="row">
			

			<?php foreach ($semuadata as $key => $value): ?>
				
			
			<div class="col-md-3" style=" padding:  5px;">
				<div class="thumbnail" style="border: 3px solid black;">
					<img src="foto_produk/<?php echo $value['foto_produk'] ?>"class="img-responsive" width="100" alt="">
					<div class="caption">
						<h3><?php echo $value['nama_produk'] ?></h3>
						<h5>Rp <?php echo number_format($value['harga_produk']) ?></h5>
						<a href="beli.php?id=<?php echo $value['id_produk']; ?>" class="btn btn-primary"> Beli</a>
						<a href="detail.php?id=<?php echo $value['id_produk']; ?>" class="btn btn-default">Detail</a>

					</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>