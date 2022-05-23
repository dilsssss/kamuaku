<!-- aksi_add_pinjam.php -->
<?php
// koneksi database
include "koneksi.php";
 
// menangkap data yang di kirim dari form
$no_pinjam      = $_POST['no_pinjam'];
$tanggal    	= $_POST['tanggal'];
$no_anggota     = $_POST['no_anggota'];
$jml_pinjam     = $_POST['jml_pinjam'];
$kode_ksr		= $_POST['kode_ksr'];
// print_r($_POST);
// die();



// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tbl_pinjam VALUES('$no_pinjam','$tanggal','$no_anggota','$jml_pinjam','$kode_ksr')");

// mengalihkan halaman kembali ke dosen.php
header("location:pinjam.php");
?>