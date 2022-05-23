<!-- aksi_add_anggota.php -->
<?php
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$no_anggota   = $_POST['no_anggota'];
$nama     	  = $_POST['nama'];
$wajib        = $_POST['wajib'];
$pokok        = $_POST['pokok'];
$saldo		  = $_POST['saldo'];
// print_r($_POST);
// die();

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tbl_anggota VALUES('$no_anggota','$nama','$wajib','$pokok','$saldo')");

// mengalihkan halaman kembali ke dosen.php
header("location:anggota.php");
?>