<?php
session_start();
//koneksi ke database
include '../koneksi.php';

if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');

    exit();
}
?>
<?php $ambil=$koneksi->query("SELECT*FROM admin JOIN toko ON admin.id_admin=toko.id_admin");
$detpem=$ambil->fetch_assoc() ?>
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
    <script src="js/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

</head>
<body>
<nav style="background:#005b66;" class="navbar navbar-expand-lg navbar-light fixed-top" >
    <a class="navbar-brand nav-link text-white">HALLO ADMIN</a>
      <h5><a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt"></i></a></h5>
  </nav>
  <div class="row no-gutters mt-5">
    <div style="background:#008b8b;" class="col-md-2 mt-2 pr-3 pt-4">
      <ul class="nav flex-column ml-3 mb-5">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?halaman=kategori"><i class="fa fa-server  mr-2"></i> Kategori</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link active text-white" href="index.php?halaman=produk"><i class="fa fa-shopping-bag mr-2"></i> Produk</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?halaman=pembelian"><i class="fas fa-users mr-2"></i> Pembelian</a>
          <hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php?halaman=laporan"><i class="far fa-calendar-alt mr-2"></i> Laporan</a>
          <hr class="bg-secondary">
        </li>
      </ul></div>
      <div class="col-md-10 p-5 pt-2"><br>	
               <?php 
               if (isset($_GET['halaman'])) 
               {
                    if ($_GET['halaman']=="produk")
                    {
                       include 'produk.php'; 
                    }
                    elseif ($_GET['halaman']=="pembelian")
                    {
                        include 'pembelian.php'; 
                    }
                    elseif ($_GET['halaman']=="pelanggan")
                    {
                        include 'pelanggan.php'; 
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php'; 
                    }
                    elseif ($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahproduk.php'; 
                    }
                    elseif ($_GET['halaman']=="hapusproduk")
                    {
                        include 'hapusproduk.php'; 
                    }
                    elseif ($_GET['halaman']=="ubahproduk")
                    {
                        include 'ubahproduk.php'; 
                    }
                    elseif ($_GET['halaman']=="logout") 
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET['halaman']=="pembayaran") 
                    {
                        include 'pembayaran.php';
                    }
                    elseif ($_GET['halaman']=="laporan") 
                    {
                        include 'laporan.php';
                    }
                    elseif ($_GET['halaman']=="kategori") 
                    {
                        include 'kategori.php';

                    }
                    elseif ($_GET['halaman']=="ubahkategori") 
                    {
                        include 'ubahkategori.php';
                        
                    }
                    elseif ($_GET['halaman']=="hapusfotoproduk") 
                    {
                        include 'hapusfotoproduk.php';
                    }
                    elseif ($_GET['halaman']=="hapuskategori") 
                    {
                        include 'hapuskategori.php';
                    }
                    
               }
               else
               {
                    include 'pembelian.php';
               } 
               ?>
        </div>

</body>
</h