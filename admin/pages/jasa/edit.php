<?php 
include "../../lib/koneksi.php";

$id = $_POST['id'];
$nama_jasa = $_POST['nama_jasa'];

mysqli_query($koneksi,"UPDATE tbl_jasa SET nama_jasa = '$nama_jasa' WHERE id_jasa ='$id'");
header("location:main.php");
?>