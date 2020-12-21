<?php 
include "../../lib/koneksi.php";

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM tbl_jasa WHERE id_jasa='$id'");
header("location:main.php");
?>