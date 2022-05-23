<!-- tambah_anggota.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM TAMBAH ANGGOTA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
 
 <div class="container-fluid mt-3">
    <h3><i class="fas fa-edit mt-4"></i>DATA ANGGOTA</h3>
        <form method="post" action="aksi_add_anggota.php">
            <table>

        <div class="for-group">
                <label for="no_anggota">No Anggota</label>
                <input type="text" class="form-control" name="no_anggota" required>
        </div>
        <div class="for-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="for-group">
                <label for="wajib">Wajib</label>
                <input type="text" name="wajib" class="form-control" required>
        </div>
        <div class="for-group">
                <label for="pokok">Pokok</label>
                <input type="text" name="pokok" class="form-control"  required>
        </div>
        <div class="for-group">
                <label for="saldo">Saldo</label>
                <input type="text" name="saldo" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>   
    </table>
    </form>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>