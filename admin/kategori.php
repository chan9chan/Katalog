<head><link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body>
<h3>Kategori Produk</h3>	
<hr>

<table class="table table-bordered" id="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1;?>

		<?php $ambil= $koneksi->query("SELECT * FROM kategori");?>
		<?php while($pecah=$ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor ?></td>
			<td><?php echo $pecah["nama_kategori"] ?></td>
			<td>
				<a href="index.php?halaman=hapuskategori&id=<?php echo $pecah['id_kategori'];?>" class="btn btn-warning btn-sm">Hapus</a>
				<a href="index.php?halaman=ubahkategori&id=<?php echo $pecah['id_kategori'];?>" class="btn btn-danger btn-sm">Ubah</a>
			</td>

		</tr>
		<?php $nomor++;?>
		<?php }?>

	</tbody>

</table>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Kategori
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
      </div>
      <div class="modal-body">
	  <form  action=""  method="post" role="form">
	<div class="form-group">
		<label>Nama Kategori</label>
		<input type="text" name="kategori">
	</div>
	<div class="modal-footer"> 
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	<button class="btn btn-primary" name="tambah">Tambah Kategori</button>
</form></div>
</div>
</div>
</div>
<?php 
if (isset($_POST['tambah']))
{
	$kategori =$_POST["kategori"];
	
	$koneksi->query("INSERT INTO kategori(nama_kategori)
		VALUES ('$kategori')");
	echo "<script> alert('Kategori Sudah Bertambah');</script>";
}
?>

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>