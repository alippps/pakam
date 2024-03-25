<div class="container mt-3">
	<?php if (isset($_SESSION['pesan'])) : ?>
		<?= $_SESSION['pesan'] ?>
	<?php unset($_SESSION['pesan']);
	endif; ?>

	<body>
		<div class="card">
			<div class="card-header">
				<h4><b>Data Menu</b></h4>
			</div>
			<style>
				.card-header h4 {
					text-align: center;
				}
			</style>
			<div class="card-body">
				<a href="index.php?makanan"><button class="btn btn-primary btn-sm mb-2">
						<h6><b>Data Makanan</b></h6>
					</button></a>
				<a href="index.php?minuman"><button class="btn btn-primary btn-sm mb-2">
						<h6><b>Data Minuman</b></h6>
					</button></a>
				<a href="index.php?tambah_makanan"><button class="btn btn-success btn-sm mb-2 float-right">
						<h6><b>Tambah Data</b></h6>
					</button></a>
				<table class="table table-bordered table-hover table-striped" id="tabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Minuman</th>
							<th>Harga</th>
							<th>Foto</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<!-- mengambil data dari database -->
						<?php
						$i = 1;
						$sql = mysqli_query($kon, "SELECT * FROM tb_masakan WHERE kategori_masakan='Minuman'");
						while ($data = mysqli_fetch_array($sql)) : ?>
							<tr>
								<td><?= $i++; ?></td>
								<td><?= $data['nama_masakan'] ?></td>
								<td><?= $data['harga_masakan'] ?></td>
								<td><img src="assets/image/makanan/<?= $data['foto'] ?>" alt="makanan" height="100"></td>
								<?php
								if ($data['status_masakan'] == 1) {
									$status = "Tersedia";
								} else {
									$status = "Tidak Tersedia";
								}
								?>
								<td><?= $status; ?></td>
								<td>
									<div class="btn-group">
										<a href="index.php?ubah_makanan=<?= $data['id_masakan'] ?>" class="btn btn-sm btn-warning">Ubah</a>
										<a href="fungsi/hapusMakanan.php?id_masakan=<?= $data['id_masakan']; ?>" class="btn btn-danger btn-sm">Hapus</a>
									</div>
								</td>
							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
</div>