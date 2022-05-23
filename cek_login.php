<!-- cek_login.php -->
<?php
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nama_ksr = $_POST['nama_ksr'];
$password_ksr = $_POST['password_ksr'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tbl_kasir where nama_ksr='$nama_ksr' and password_ksr='$password_ksr'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['nama_ksr'] = $nama_ksr;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>