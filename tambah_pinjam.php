<!-- tambah_pinjam.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH PINJAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
 
 <div class="container-fluid mt-3">
    <h3><i class="fas fa-edit mt-4"></i>DATA PINJAM</h3>
        <form method="post" action="aksi_add_pinjam.php">
            <table>

        <div class="for-group">
                <label for="no_pinjam">No Pinjam</label>
                <input type="text" class="form-control" name="no_pinjam" required>
        </div>
        <div class="for-group">
                <label for="tanggal">tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="for-group">
                <label for="no_anggota">no anggota</label>
                <input type="text" name="no_anggota" class="form-control" required>
        </div>
        <div class="for-group">
                <label for="jml_pinjam">Jumlah Pinjam</label>
                <input type="text" name="jml_pinjam" class="form-control"  required>
        </div>
        <div class="for-group">
                <label for="kode_ksr">Kode Kasir</label>
                <input type="text" name="kode_ksr" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>   
    </table>
    </form>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>