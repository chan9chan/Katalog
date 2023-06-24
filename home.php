<?php 
 session_start(); 
include 'koneksi.php';
?>
<?php
$datakategori=array();
$ambil= $koneksi->query("SELECT * FROM kategori");
while($tiap=$ambil->fetch_assoc())
{
	$datakategori[]=$tiap;
}
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
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
<section class="konten">
    
	<?php include 'menu.php'; ?>
<div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><img src="img assets/Picture5.png" alt="Logo" width="140" height="60"
        class="logo" href="#"></a><br>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="pencarian.php">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="keranjang.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                </a>
                <a href="belumbyr.php" class="btn border">Pesanan Anda
                    <i class="fa fa-hourglass-half text-primary"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-3">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
            <form action="kategori.php" method="POST"> 
                <a class="btn d-flex align-items-center justify-content-between " style="background-color: #2F87B9" data-toggle="collapse" href="#navbar-vertical" >
                    <h6 class="m-0 text-light" ><Menu>KATEGORI</Menu></h6>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-dark-bottom-0" id="sidebar">
                    <select name="kategori" multiple class="form-control " size=10 aria-label="size 3 select example" onchange="document.location.href= this.options[this.selectedIndex].value;">
                    <?php foreach ($datakategori as $key => $value): ?>
	 					<option value="kategori.php?id=<?php echo $value["id_kategori"] ?>" value="<?php echo $value["id_kategori"] ?>" ><?php echo $value["nama_kategori"] ?> </option>
	 					<?php endforeach ?>
 						</select>
				</form>
                </nav>
            </div>
            <div class="col-lg-9"><br>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 300px;">
                            <img class="img-fluid" src="img assets/image 11.png" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 400px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">Produk Katalog Logistik</h4>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
	<div class="container"><br>
		<?php 

		if (empty($_SESSION['keranjang']) OR !isset($_SESSION["keranjang"])):?>
		<?php endif ?>
		<?php include 'produk.php'; ?><br>

	    
	</div>	
</section>
<?php include 'footer.php'; ?>

<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="fontawesome/js/all.min.js"></script>

</body>
</html>