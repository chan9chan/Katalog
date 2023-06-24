<?php 
session_start();
$koneksi = new mysqli("localhost","root","","db_katalog");



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
    <script src="js/jquery.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>


</head>
<body style="background:#008b8b;">
  <section class="vh-100">
    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-md-2 col-md-5 col-lg-5">
          <div class="card shadow-2-strong " style="border-radius: 80px;"><br>
            <div class="card-body pt-1 text-center">
            <img src="mage/Picture4.png" alt="Logo" width="200" height="120" class="align-text-top "
        class="logo"></a><br>
		<div class="card-body"> 
					<form method="post">
          <div class="form-group input-group">
              <span class="input-group-addon"></span>
              <input type="text" class="form-control" name="user" placeholder="Masukkan username" />
            </div><br>
                        <div class="form-group input-group">
              <span class="input-group-addon"></span>
              <input type="password" class="form-control" name="pass" placeholder="Masukkan password" />
            </div><br>
						<button class="btn btn-primary" name="login">Login</button>
					</form>
			
         <?php

          if(isset($_POST['login'])){
          $ambil = $koneksi->query("SELECT*FROM admin WHERE username='$_POST[user]' AND password='$_POST[pass]'");  

          $yangcocok = $ambil->num_rows;

          if ($yangcocok==1) {
            $_SESSION['admin'] = $ambil->fetch_assoc();
            echo "<script> alert('anda sukses login');</script>";
           echo "<script> location ='index.php';</script>";
          }

          else{
            echo "<script> alert('anda gagal login, cek akun anda');</script>";
            echo "<script> location ='login.php';</script>";
          }
         }
          ?>
       </div>
	</div>
			</div>
			
		</div>
		
	</div></div>
</body>
</html>
