<!-- anggota_delete.php -->
<?php
//koneksi database
include 'koneksi.php';

// menangkap data url
$no_anggota = $_GET['no_anggota'];

//menghapus
mysqli_query($koneksi, "DELETE FROM tbl_anggota WHERE no_anggota='$no_anggota'");
header("location:anggota.php");
?>