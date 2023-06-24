<?php 
session_start();
include 'koneksi.php';
if (!isset($_SESSION["pelanggan"])) 
{
	echo "<script> alert('anda belum login');</script>";
	echo "<script> location ='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Riwayat Pembelian</title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet"  href="styles.css">
	
</head>
<body>


	<?php include 'menu.php'; ?><br><br>
		<h2 class="text-center">  Riwayat Belanja Pelanggan <?php  echo $_SESSION["pelanggan"]["nama_pelanggan"] ?></h2>
		<div class="row no-gutters mt-5">
    <div style="background:#008b8b;" class="col-md-2 mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link text-white" href="belumbyr.php"><i class="fa fa-clock mr-2"></i> Belum Byar</a>
          <hr class="bg-secondary">
        </li> 
        <li class="nav-item">
          <a class="nav-link active text-white" href="brgproses.php"><i class="fa fa-truck-loading mr-2"></i>Diproses</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="dikirim.php"><i class="fa fa-shipping-fast mr-2"></i> Dikirim</a>
          <hr class="bg-secondary">
        </li>
       
      </ul></div>
	  <div class="col-md-9 p-4"><br>	

<script src="admin/assets/js/jquery.min.js"></script>
<script src="admin/assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>

