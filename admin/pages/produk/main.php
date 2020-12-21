<?php
include "../../header.php";

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Produk</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="<?= $baseUrl; ?>admin/dashboard.php">Dashboard</a></div>
              <div class="breadcrumb-item">Produk</div>
            </div>
          </div>
          <div class="section-body">

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Produk</h4>
                  </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                          </th>
                          <?php
                    $sql = "SELECT * FROM tbl_produk";
                    $q = mysqli_query($koneksi, $sql);

                    ?>
                    <tr>
                        <th>ID Produk</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Action</th>
                    </tr>
                        <?php
                    while ($data = mysqli_fetch_array($q)){
                        ?>
                        <tr>
                          <td><?php echo $data['id_produk']; ?></td>

                          <td>
                          <?php echo $data['nama_produk']; ?></td>

                          <td>
                          <?php echo $data['deskripsi']; ?></td>

                          <td>
                          Rp. <?php echo number_format ($data['harga']); ?></td>

                          <td><img src="<?= $baseurl; ?>pages/produk/gambar/<?=$data['gambar']; ?>"height="80" width="120"></td>
                          <td>
                          <a href="<?= $baseurl; ?>pages/produk/form_tambah.php" class="btn btn-primary">Tambah</a>
                          <a href="<?= $baseurl; ?>pages/produk/form_edit.php?id=<?php echo $data['id_produk']; ?>" class="btn btn-warning">Edit</a>
                          <a href="<?= $baseurl; ?>pages/produk/hapus_produk.php?id=<?php echo $data['id_produk']; ?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')"  class="btn btn-danger">Hapus</a>
                        </td>

                        </tr>
                        <?php } ?>
                        </table>
                  </div>
                </div>
              </div>
            </div>
        
        </section>
      </div>
<?php
include "../../footer.php";
?>