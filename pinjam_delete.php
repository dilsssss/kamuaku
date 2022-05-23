<!-- pinjam_delete.php -->
<?php
//koneksi database
include 'koneksi.php';

// menangkap data url
$no_pinjam = $_GET['no_pinjam'];

//menghapus
mysqli_query($koneksi, "DELETE FROM tbl_pinjam WHERE no_pinjam='$no_pinjam'");
header("location:pinjam.php");
?>