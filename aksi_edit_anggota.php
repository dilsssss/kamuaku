<!-- aksi_edit_anggota.php -->
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form

$no_anggota   = $_POST['no_anggota'];
$nama     	  = $_POST['nama'];
$wajib        = $_POST['wajib'];
$pokok        = $_POST['pokok'];
$saldo		  = $_POST['saldo'];

// update data ke database
mysqli_query($koneksi,"UPDATE tbl_anggota SET no_anggota='$no_anggota', nama='$nama', wajib='$wajib', pokok='$pokok', saldo='$saldo' where no_anggota='$no_anggota'");
 
 
// mengalihkan halaman kembali ke index.php
header("location:anggota.php");
?>