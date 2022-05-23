<!-- pinjam_edit.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT ANGGOTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $sqr = mysqli_query($koneksi, "SELECT * FROM tbl_pinjam where no_pinjam = '$id'");
    while ($data = mysqli_fetch_array($sqr)) {
    ?>
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA PINJAM</h3>
        <form method="post" action="aksi_edit_pinjam.php">
            <table>

        <div class="for-group">
                <label for="no_pinjam">No pinjam</label>
                <input type="text" name="no_pinjam" class="form-control"
                value="<?php echo $data['no_pinjam']; ?>">
        </div>
        <div class="for-group">
                <label for="tanggal">tanggal</label>
                <input type="date" name="tanggal" class="form-control"
                value="<?php echo $data['tanggal']; ?>">
        </div>
        <div class="for-group">
                <label for="no_anggota">no anggota</label>
                <input type="text" name="no_anggota" class="form-control"
                value="<?php echo $data['no_anggota']; ?>">
        </div>
        <div class="for-group">
                <label for="jml_pinjam">jml pinjam</label>
                <input type="text" name="jml_pinjam" class="form-control"
                value="<?php echo $data['jml_pinjam']; ?>">
        </div>
        <div class="for-group">
                <label for="kode_ksr">kode ksr</label>
                <input type="text" name="kode_ksr" class="form-control"
                value="<?php echo $data['kode_ksr']; ?>">
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>   
    </table>
    </form>
</div>
    <?php
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>