<?php
include "../../header.php";

?>
 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
         
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header">
                  <h4>Manajemen Produk</h4>
                  <div class="card-header-action">
                    <a href="<?= $baseurl; ?>pages/produk/main.php" class="btn btn-danger">Kembali ke Data Produk <i class="fas fa-chevron-left"></i></a>
                  </div>
                </div>
                <div class="card-body">
                    <form action="<?= $baseurl; ?>pages/produk/simpan_produk.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk">
                        </div>

                        <div class="form-group">
                        <label>Kategori</label>
                        <?php
                        include "../../lib/koneksi.php";
                        $sql = "SELECT * FROM tbl_kategori";
                        $res = mysqli_query($koneksi, $sql);

                        ?>
                        <select class= "form-control" name="id_kategori">
                        <?php
                        while($data=mysqli_fetch_array($res)){

                        ?>

                        <option value="<?php echo $data ['id_kategori']; ?>"><?php echo $data ['nama_kategori']?></option>
                        <?php } ?>
                        </select>
                        </div>

                        <div class="form-group">
                        <label>Deskripsi Produk</label>
                        <input type="text" class="form-control" name="deskripsi">
                        </div>

                        <div class="form-group">
                        <label>Gambar Produk</label>
                        <input type="file" class="form-control" name="gambar">
                        </div>

                        <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="text" class="form-control" name="harga">
                        </div>


                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                    <button class="btn btn-secondary" type="reset">Reset</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
      
        </section>
      </div>
<?php
include "../../footer.php";
?>