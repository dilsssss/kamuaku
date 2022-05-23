<!-- aksi_edit_pinjam.php -->
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$no_pinjam      = $_POST['no_pinjam'];
$tanggal    	= $_POST['tanggal'];
$no_anggota     = $_POST['no_anggota'];
$jml_pinjam     = $_POST['jml_pinjam'];
$kode_ksr		= $_POST['kode_ksr'];

// update data ke database
mysqli_query($koneksi,"UPDATE tbl_pinjam SET no_pinjam='$no_pinjam', tanggal='$tanggal', no_anggota='$no_anggota', jml_pinjam='$jml_pinjam', kode_ksr='$kode_ksr' where no_pinjam='$no_pinjam'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:pinjam.php");
?>