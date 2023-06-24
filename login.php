<?php 
session_start();
include 'koneksi.php';
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
<body style="background:#2F87B9;">
  <section class="vh-100">
    <div class="container py-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-10 col-md-2 col-md-5 col-lg-5">
          <div class="card shadow-2-strong " style="border-radius: 4rem;"><br>
          <div class="card-body p-3 py-1 text-end">
            <a href="../kpl/admin/login.php" class="btn text-primary py-3 px-4 ">Login Admin</a>
            <a href="daftar.php" class="btn text-white text-center mx-2" style="background-color: #2F87B9; border-radius:10px;">Daftar</a>
            <div class="card-body pt-1 text-center">
            <img src="img assets/Picture5.png" alt="Logo" width="240" height="120" class="d-flex justify-content-center "
        class="logo"></a><br>
		<div class="card-body"> 
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email_pelanggan" class="form-control">
						</div><br>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password_pelanggan" >
						</div>
						<!-- Checkbox -->
						<div class="form-group d-md-flex justify-content-center">
                  <div class="w-50 mt-2">
                    <label class="checkbox-wrap checkbox-light">Remember Me
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </div></div><br>
						<button class="btn btn-info form-control" name="simpan">Masuk</button>
					</form>
				</div>
			</div>
			
		</div>
		
	</div>
	
</div>

<?php
if (isset($_POST["simpan"]))
{
	$email=$_POST ["email_pelanggan"];
	$password=$_POST ["password_pelanggan"];
	$ambil=$koneksi->query("SELECT * FROM pelanggan
		WHERE email_pelanggan='$email' AND password_pelanggan='$password'");
	$akunyangcocok=$ambil->num_rows;
	if($akunyangcocok==1)
	{
		$akun =$ambil->fetch_assoc();
		$_SESSION["pelanggan"]=$akun;
		echo "<script> alert('anda sukses login');</script>";
		echo "<script> location ='home.php';</script>";
	}
	else
	{
		echo "<script> alert('anda gagal login, cek akun anda');</script>";
		echo "<script> location ='login.php';</script>";
	}
}


?>
<script src="js/bootstrap.bundle.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="fontawesome/js/all.min.js"></script>
</body>
</html>