<?php
$date = date('d-m-Y');

$total_bayar = mysqli_query($kon, "SELECT SUM(totbar_transaksi) AS totbar FROM tb_transaksi WHERE aTanggal_transaksi = '$date' ");
$total = mysqli_fetch_assoc($total_bayar);
$sudahbayar = mysqli_query($kon, "SELECT COUNT(*) AS sudah_bayar FROM tb_order WHERE status_order = '1' AND aTanggal_order = '$date' ");
$sudah = mysqli_fetch_assoc($sudahbayar);
$belumbayar = mysqli_query($kon, "SELECT COUNT(*) AS belum_bayar FROM tb_order WHERE status_order = '0' AND aTanggal_order = '$date' ");
$belum = mysqli_fetch_assoc($belumbayar);
$jumlahmakanan = mysqli_query($kon, "SELECT COUNT(*) AS makanan FROM tb_masakan ");
$makanan = mysqli_fetch_assoc($jumlahmakanan);
$jumlahpelanggan = mysqli_query($kon, "SELECT COUNT(*) AS pelanggan FROM tb_user WHERE id_level='5' ");
$pelanggan = mysqli_fetch_assoc($jumlahpelanggan);
$jumlahwaiter = mysqli_query($kon, "SELECT COUNT(*) AS waiter FROM tb_user WHERE id_level='2' ");
$waiter = mysqli_fetch_assoc($jumlahwaiter);
$jumlahkasir = mysqli_query($kon, "SELECT COUNT(*) AS kasir FROM tb_user WHERE id_level='3' ");
$kasir = mysqli_fetch_assoc($jumlahkasir);

?>

<div class="container mt-3">
	<div class="card bg-primary text-white border-danger mb-3">
		<div class="row no-gutters">
			<div class="col-md-1">
			</div>
			<div class="col-md-11">
				<div class="card-body">
					<h3 class="card-title"><b>Selamat Datang <?= $_SESSION['level'] ?></b></h3>
					<h6 class="card-text"><?= $_SESSION['nama_user'] ?></h6>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="card border-primary mb-3">
				<div class="row">
					<div class="col-md-2">
						<img src="assets/image/note.png" class="p-2" alt="foto" width="100">
						<i class="fa fa-money-check-alt p-3 mt-2 fa-4x"></i>
					</div>
					<div class="col-md-10">
						<div class="card-body">
							<h5 class="card-title"><b>Total Penjualan <?= $date ?></b></h5>
							<span class="btn btn-success btn-sm text-small"><?= $sudah['sudah_bayar'] ?> Sudah bayar</span>
							<span class="btn btn-danger btn-sm text-small"><?= $belum['belum_bayar'] ?> Belum bayar</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card border-primary mb-3">
				<div class="row">
					<div class="col-md-2">
						<img src="assets/image/dollar.png" class="p-4" alt="foto" width="120">
						<i class="fa fa-money-bill p-3 mt-2 fa-4x"></i>
					</div>
					<div class="col-md-10">
						<div class="card-body">
							<h5 class="card-title"><b>Total Pendapatan hari ini : <?= $month; ?></b></h5>
							<span class="btn btn-success btn-sm text-small">Rp. <?= rupiah($total['totbar']) ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<div class="card border-primary mb-3">
				<div class="row">
					<div class="col-md-2">
						<img src="assets/image/makanan.png" class="p-2" alt="foto" width="100">
						<i class="fa fa-burger-soda p-3 mt-2 fa-4x"></i>
					</div>
					<div class="col-md-10">
						<div class="ml-5 card-body">
							<h6 class="card-title"><b>Total Menu : </b></h6>
							<a href="index.php?makanan">
								<span class="btn btn-warning text-white btn-sm text-small"><?= $makanan['makanan'] ?> menu</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card border-primary mb-3">
				<div class="row">
					<div class="col-md-2">
						<img src="assets/image/admin.png" class="p-3" alt="foto" width="100">
						<i class="fa fa-book-user p-3 mt-2 fa-4x"></i>
					</div>
					<div class="col-md-10">
						<div class="ml-4 card-body">
							<h6 class="card-title"><b>Total Pengguna :</b></h6>
							<a href="index.php?user">
								<span class="btn btn-primary btn-sm text-small"><?= $admin['admin'] ?> Lihat pengguna</span>
								<!-- <span class="btn btn-secondary btn-sm text-small"><?= $kasir['kasir'] ?> Kasir</span> -->
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card border-primary mb-3">
				<div class="row">
					<div class="col-md-2">
						<img src="assets/image/cust.png" class="p-3" alt="foto" width="100">
						<i class="fa fa-book-user p-3 mt-2 fa-4x"></i>
					</div>
					<div class="col-md-15">
						<div class="ml-5 card-body">
							<h6 class="card-title"><b>Total Pelanggan :</b></h6>
							<span class="btn btn-success btn-sm text-small"><?= $pelanggan['pelanggan'] ?> Pelanggan</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card border-primary mb-3">
				<div class="row">
					<div class="col-md-2">
						<img src="assets/image/report.png" class="p-3" alt="foto" width="100">
						<i class="fa fa-book p-3 mt-2 fa-4x"></i>
					</div>
					<div class="col-md-10">
						<div class="ml-4 card-body">
							<h6 class="card-title"><b>Laporan</b></h6>
							<a href="index.php?laporan">
								<span class="btn btn-danger btn-sm text-small"><i class="fa fa-eye"></i> Lihat laporan</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>