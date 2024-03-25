<div class="container mt-3">
  <?php if (isset($_SESSION['pesan'])) : ?>
    <?= $_SESSION['pesan'] ?>
  <?php unset($_SESSION['pesan']);
  endif; ?>
  <div class="card mb-3">
    <!-- <img src="assets/image/poster.png" class="card-img-top" height="180"> -->
    <div class="card-header">
      <!-- <div class="card header"> -->
      <h2 style="text-align: center;" ><b>Selamat Datang di PAYAH KAMBUH</b></h2>
      <!-- <p class=" card-text">Kasir Restoran</p> -->
    </div>
  </div>
  <h2 class="mb-3"><b>Makanan</b></h2>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <!-- mengambil data dari database -->
        <?php
        $query = "SELECT * FROM tb_masakan WHERE kategori_masakan='Makanan' ORDER BY id_masakan LIMIT 20";
        $sql = mysqli_query($kon, $query);
        while ($data = mysqli_fetch_array($sql)) :
        ?>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/image/makanan/<?= $data['foto'] ?>" alt="Card image cap">
              <div class="card-body">
                <div class="mb-1">

                  <?php if ($data['status_masakan'] == 1) : ?>
                    <span class="badge badge-success badge-lg">Tersedia</span>
                  <?php else : ?>
                    <span class="badge badge-danger badge-lg">Tidak Tersedia</span>
                  <?php endif; ?>

                </div>
                <h3 class="card-title"><b><?= $data['nama_masakan'] ?></b></h3>
                <?php
                $harga = $data['harga_masakan'];
                if ($_SESSION['level'] == "") {
                  $harga = $data['harga_masakan'];
                }

                ?>
                <h6 class="card-text"><strong>Rp. <?= rupiah($harga) ?></strong></h6>
                <?php if ($data['status_masakan'] == 1) : ?>
                  <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#masakan_<?= $data['id_masakan']; ?>">
                    Beli
                  </button>
                <?php else : ?>
                  <a href="index.php?tambah=<?= $data['id_masakan'] ?>" class="btn btn-primary btn-sm btn-block disabled">Beli</a>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="masakan_<?= $data['id_masakan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah ke Keranjang</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="fungsi/orderMakanan.php" method="POST">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="assets/image/makanan/<?= $data['foto'] ?>" alt="" class="card-img-top">
                      </div>
                      <div class="col-md-6">
                        <input type="hidden" name="id_masakan" value="<?= $data['id_masakan'] ?>">
                        <div class="form-group">
                          <label>Menu</label>
                          <input type="text" readonly class="form-control" value="<?= $data['nama_masakan'] ?>">
                        </div>
                        <div class="form-group">
                          <label>Harga</label>
                          <input type="text" readonly class="form-control" value="<?= $data['harga_masakan'] ?>">
                        </div>
                        <div class="form-group">
                          <label>Jumlah Pesanan</label>
                          <input type="number" class="form-control" name="jumlah" value="1" min="1" max="20">
                        </div>
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        <?php endwhile; ?>
      </div>
    </div>
  </div>

  <h2 class="mb-3"><b>Minuman</b></h2>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <?php
        $query2 = "SELECT * FROM tb_masakan WHERE kategori_masakan='Minuman' ORDER BY id_masakan";
        $sql2 = mysqli_query($kon, $query2);
        while ($data = mysqli_fetch_array($sql2)) :
        ?>
          <div class="col-lg-4 mb-4">
            <div class="card">
              <img class="card-img-top" src="assets/image/makanan/<?= $data['foto'] ?>" alt="Card image cap">
              <div class="card-body">
                <div class="mb-1">
                  <?php if ($data['status_masakan'] == 1) : ?>
                    <span class="badge badge-success">Tersedia</span>
                  <?php else : ?>
                    <span class="badge badge-danger">Tidak Tersedia</span>
                  <?php endif; ?>
                </div>
                <h3 class="card-title"><b><?= $data['nama_masakan'] ?></b></h3>
                <?php
                $harga = $data['harga_masakan'];
                if ($_SESSION['level'] == "") {
                  $harga = $data['harga_masakan'] + 3000;
                }
                ?>
                <h6 class="card-text"><strong>Rp. <?= rupiah($harga) ?></strong></h6>
                <?php if ($data['status_masakan'] == 1) : ?>
                  <button type="button" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#masakan_<?= $data['id_masakan']; ?>">
                    Beli
                  </button>
                <?php else : ?>
                  <a href="index.php?tambah=<?= $data['id_masakan'] ?>" class="btn btn-primary btn-block disabled">Beli</a>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="masakan_<?= $data['id_masakan']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah ke Keranjang</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="fungsi/orderMakanan.php" method="POST">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="assets/image/makanan/<?= $data['foto'] ?>" alt="" class="card-img-top">
                      </div>
                      <div class="col-md-6">
                        <input type="hidden" name="id_masakan" value="<?= $data['id_masakan'] ?>">
                        <div class="form-group">
                          <label>Menu</label>
                          <input type="text" readonly class="form-control" value="<?= $data['nama_masakan'] ?>">
                        </div>
                        <div class="form-group">
                          <label>Harga</label>
                          <input type="text" readonly class="form-control" value="<?= $data['harga_masakan'] ?>">
                        </div>
                        <div class="form-group">
                          <label>Jumlah Pesanan</label>
                          <input type="number" class="form-control" name="jumlah" value="1" min="1" max="20">
                        </div>
                        <div class="form-group">
                          <label>Keterangan</label>
                          <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
</div>