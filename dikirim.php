<?php include 'riwayat.php'; ?>
<h1 class="text-success fw-bold">Dikirim<br></h1><br>
			<div class="table-responsive">
		      <table id="table" class="table table-bordered">
					<thead>
						<tr>
							<th class="th-lg">No</th>
							<th class="th-lg">Tanggal</th>
							<th class="th-lg">Berat</th>
							<th class="th-lg">No Resi</th>
							<th class="th-lg">Total</th>
							<th class="th-lg">Opsi</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor=1;
						$id_pelanggan= $_SESSION["pelanggan"]['id_pelanggan'];
						 $ambil= $koneksi->query("SELECT *FROM pembelian WHERE id_pelanggan='$id_pelanggan' AND status_pembelian='barang dikirim'");
						while($pecah=$ambil->fetch_assoc()){?>
						<tr>
							<td><?php echo $nomor; ?></td>
							<td><?php echo date("d F Y", strtotime($pecah['tanggal_pembelian']))?></td>
							<td><?php echo $pecah["totalberat"] ?> Gram</td>
							<td>
								<?php if (!empty($pecah['resipengiriman'])): ?>
								<?php echo $pecah['resipengiriman']; ?>	
								<?php endif ?>
							</td>
							<td>Rp. <?php echo number_format($pecah["total_pembelian"]);?></td>
							<td>
								<a href="nota.php?id=<?php echo $pecah["id_pembelian"] ?>" class="btn btn-info">Nota</a>
								<a href="lihat_pembayaran.php?id=<?php echo $pecah["id_pembelian"]?>" class= "btn btn-success">Bukti</a>
							</td>
						</tr>
						<?php $nomor++;?>
						<?php  }?>
					</tbody>
				</table>
		    </div>