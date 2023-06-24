<?php session_start(); ?>
<?php include 'koneksi.php'; ?>

<?php  
$id_produk=$_GET["id"];
$ambil=$koneksi->query("SELECT*FROM produk WHERE id_produk='$id_produk'");
$detail=$ambil->fetch_assoc();
$kategori=$detail["id_kategori"]; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <title>Katalog Logistik</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

</head>
<body>
	<?php include 'menu.php'; ?>
	<div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col-lg-5 pb-5">
                        <div class="carousel-item active">
						<img src="foto_produk/<?php echo $detail['foto_produk'] ?>" width="200" alt="">
                        </div>
</div>
         
			<div class="col-lg-7 pb-5">
			<h2><?php echo $detail["nama_produk"]?></h2>
                  
                <h3 class="font-weight-semi-bold mb-4">Rp. <?php echo number_format($detail["harga_produk"] );?></h3>
                <p class="mb-4"><?php echo $detail["deskripsi_produk"] ?></p>
<div class="d-flex mb-0">
<table class="table table bordered">
	<tr>
	<tr>
		<th>Berat</th>
		<th>: <?php echo number_format($detail["berat_produk"]); ?> Gram</th>
	</tr>
	<tr>
		<th>Stok</th>
		<th>: <?php echo $detail["stok_produk"] ?></th>
	</tr>
</table>
</div>
<?php  $ambil=$koneksi->query("SELECT *FROM produk"); ?>
<a href="beli.php?id=<?php echo $id_produk; ?>" class="btn btn-info px-3"><i class="fa fa-shopping-cart mr-1"></i>Tambah Keranjang</a>
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="fontawesome/js/all.min.js"></script>
</body>