<?php include 'koneksi.php'; ?>
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
  <nav class="navbar navbar-dark fixed-top" style="background-color: #2F87B9;">
    <div class="container">
      <h3><i class="mr-2"></i></h3>
      <img src="img assets/Picture5.png" alt="Logo" width="120" height="50" class="d-inline-block align-text-top ml-xl-5"
        class="logo" href="#"></a>

      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="login.php">login <span class="sr-only"></span></a>
              </li>
          </div></div></nav></div></nav></div>
		  <section class="vh-100">
    <div class="container py-5 h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-md-2 col-md-5 col-lg-5">
          <div class="card shadow-2-strong " style="border-radius: 4rem;"><br>
            <div class="card-body p-5 text-center">
              <h3 class="mb-4">Register</h3>
              <hr>
					<form method="post" class="form-horizontal">
							<div class="card-body">
							<div class="form-group"> 
								<label for="username">Username:</label> 
								<input type="text" class="form-control" id="name" name="nama_pelanggan" required></div> 
							<div class="form-group"> 
								<label for="email">Email:</label>
								<input type="email" class="form-control" id="email" name="email_pelanggan" required> 
							<div class="form-group"> 
								<label for="password">Password:</label> 
								<input type="password" class="form-control" id="password" name="password_pelanggan" required> </div> 
								<div class="form-group"> 
								<label for="username">No Telepon:</label> 
								<input type="text" class="form-control" id="telepon" name="telepon_pelanggan" required></div> 
							<div class="form-group">
								<button class=" form-control btn btn-info" name="daftar">Daftar</button>
							</div>
						</div>
						</div>
						
					</form>
					<?php  
					if (isset($_POST["daftar"])) 
					{
						$nama = $_POST['nama_pelanggan'];
						$email = $_POST['email_pelanggan'];
						$password = $_POST['password_pelanggan'];
						$telepon = $_POST['telepon_pelanggan'];

						//cek apakah email sudah ada
						$ambil=$koneksi->query("SELECT*FROM pelanggan 
							WHERE email_pelanggan='$email'");
						$yangcocok=$ambil->num_rows;
						if ($yangcocok==1) 
						{
							echo "<script>alert('pendaftaran gagal, email sudah ada')</script>";
							echo "<script>location='daftar.php';</script>";
						}
						else
						{
							$koneksi->query("INSERT INTO pelanggan
								(nama_pelanggan, email_pelanggan,  password_pelanggan, telepon_pelanggan)
								VALUES('$nama','$email','$password','$telepon')");

							echo "<script>alert('pendaftaran berhasil')</script>";
							echo "<script>location='login.php';</script>";
						}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="fontawesome/js/all.min.js"></script>
</body>
</html>