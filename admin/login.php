<?php
include 'lib/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
$q = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($q);
$jumlah = mysqli_num_rows($q);

if($jumlah==1) {
    session_start();
    $_SESSION['username'] = $data['username'];
    $_SESSION['level'] = $data['level'];
    header('location:dashboard.php');
} else {
    header('location:index.php');
}
	

?>