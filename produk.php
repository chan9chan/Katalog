<h1>Produk Terbaru</h1><br>
		<div class="row">
	 		<?php  $ambil=$koneksi->query("SELECT *FROM produk"); ?>
			<?php  WHILE($perproduk =$ambil->fetch_assoc()){?>
			<div class="col-md-3" style="margin:0px;">
				<div class="thumbnail" >
					
					<div class="caption" ><br>
						<img src="foto_produk/<?php echo $perproduk['foto_produk'] ?>" width="100" alt="">
						<h5><?php echo $perproduk['nama_produk'] ?></h5>
						<h5>Rp <?php echo number_format($perproduk['harga_produk']) ?></h5>
						<a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-info"><i class="fa fa-shopping-cart fa-sm"></i> Beli</a>
						<a href="tailproduk.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-border border-dark"i><i class="fas fa-info-circle fa-sm"></i>Detail</a>

					</div>
				</div>
			</div>
			<?php } ?>




		</div>