	<div class="container mt-3">
		<?php if (isset($_SESSION['pesan'])) : ?>
			<?= $_SESSION['pesan'] ?>
		<?php unset($_SESSION['pesan']);
		endif; ?>
		<div class="row">
			<div class="col-lg-6 mx-auto">
				<div class="card">
					<div class="card-header">
						<h5><strong>Registrasi User</strong></h5>
					</div>
					<div class="card-body">
						<form action="fungsi/registrasi_user.php" method="post">
							<div class="form-group">
								<label class="form-label" for="nama_user">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama_user" name="nama_user">
							</div>
							<div class="form-group">
								<label class="form-label" for="username">Username</label>
								<input type="text" class="form-control" id="username" name="username">
							</div>
							<!-- <div class="form-group">
								<label class="form-label" for="password">Password</label>
								<input type="text" class="form-control" id="password" name="password">
								<!DOCTYPE html>
								<html lang="en"> -->

							<head>
								<meta charset="UTF-8">
								<meta name="viewport" content="width=device-width, initial-scale=1.0">
								<title>Document</title>
								<!-- Letakkan script CSS di sini -->
								<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
								<style>
									.password-toggle {
										position: absolute;
										right: 30px;
										top: 63%;
										transform: translateY(-50%);
										cursor: pointer;
									}
								</style>
							</head>

							<body>
								<!-- Konten halaman web Anda di sini -->
								<div class="form-group">
									<label class="form-label" for="password">Password</label>
									<input type="password" class="form-control" id="password" name="password">
									<i class="fas fa-eye password-toggle" onclick="togglePasswordVisibility('password')"></i>
								</div>

								<!-- Script JavaScript untuk menampilkan/menyembunyikan password -->
								<script>
									function togglePasswordVisibility(inputId) {
										var input = document.getElementById(inputId);
										input.type === "password" ? input.type = "text" : input.type = "password";
									}
								</script>
							</body>

							</html>
							<!-- </div> -->
							<div class="form-group">
								<label class="form-label" for="id_level">Level</label>
								<select name="id_level" id="id_level" class="form-control">
									<option value="1">Admin</option>
									<option value="3">Kasir</option>
									<option value="5">Pelanggan</option>
								</select>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
							<button type="button" class="btn btn-danger" onclick="history.back()">Kembali</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	</body>

	</html>