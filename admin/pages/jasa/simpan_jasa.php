<?php 
include "../../lib/koneksi.php";

$nama_jasa = $_POST['nama_jasa'];

mysqli_query($koneksi,"INSERT INTO tbl_jasa VALUES ('','$nama_jasa')");
header("location:main.php");
?>