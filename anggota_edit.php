<!-- anggota_edit.php -->
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
    $sqr = mysqli_query($koneksi, "SELECT * FROM tbl_anggota where no_anggota = '$id'");
    while ($data = mysqli_fetch_array($sqr)) {
    ?>
<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
        <form method="post" action="aksi_edit_anggota.php">
            <table>

        <div class="for-group">
                <label for="no_anggota">No Anggota</label>
                <input type="text" name="no_anggota" class="form-control"
                value="<?php echo $data['no_anggota']; ?>">
        </div>
        <div class="for-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control"
                value="<?php echo $data['nama']; ?>">
        </div>
        <div class="for-group">
                <label for="wajib">Wajib</label>
                <input type="text" name="wajib" class="form-control"
                value="<?php echo $data['wajib']; ?>">
        </div>
        <div class="for-group">
                <label for="pokok">Pokok</label>
                <input type="text" name="pokok" class="form-control"
                value="<?php echo $data['pokok']; ?>">
        </div>
        <div class="for-group">
                <label for="saldo">Saldo</label>
                <input type="text" name="saldo" class="form-control"
                value="<?php echo $data['saldo']; ?>">
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