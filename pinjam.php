<!-- pinjam.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DOSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

    
    <div class="container">
    <nav class="navbar navbar-expand-lg bg-warning mt-2">
      <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="anggota.php">Data Anggota</a>
            <a class="nav-link active" aria-current="page" href="pinjam.php">Data Pinjam</a>    
            <a class="nav-link active" aria-current="page" href="simpan.php">Data Simpan</a>  
          </div>
        </div>
        <form class="d-flex">
        <a class="btn btn-outline-success" href="logout.php">logout</a>
      </form>
      </div>
    </nav>
    </div>

    <div class="container mt-4">
        <div class="container-fluid">
        
        <button class="btn btn-warning btn-sm mb-3" data-toggle="modal" data-target=""><i class="fas fa-plus fa-sm"></i> <a href="tambah_pinjam.php"><b>Tambah Pinjam</b></a></button>
    <table class="table table-bordered mt-4">
        <tr>
            <th>No Pinjam</th>
            <th>Tanggal</th>
            <th>No Angggota</th>
            <th>Jumlah Pinjam</th>
            <th>Kode Kasir</th>
            <th>aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        $sql = mysqli_query($koneksi, "select * from tbl_pinjam");
        while($data = mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?php echo $data['no_pinjam']; ?></td>
                <td><?php echo $data['tanggal']; ?></td>
                <td><?php echo $data['no_anggota']; ?></td>
                <td><?php echo $data['jml_pinjam']; ?></td>
                <td><?php echo $data['kode_ksr']; ?></td>

                <td>
                    <a href="pinjam_edit.php?id=<?php echo $data['no_pinjam'];?> ">Edit</a>
                    <a href="pinjam_delete.php?no_pinjam=<?php echo $data['no_pinjam'];?> ">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>


</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>