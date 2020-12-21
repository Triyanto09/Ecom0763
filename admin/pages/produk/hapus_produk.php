<?php 
include '../../lib/koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tbl_produk WHERE id_produk='$id'");
header("location:main.php");
?>