<!-- login.php -->
<?php
    //import file koneksi.php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h2>LOGIN</h2>
    <form method="post" action="cek_login.php">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="nama_ksr" placeholder="Masukkan username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password_ksr" placeholder="Masukkan password"></td>
            </tr>
            <tr></tr><tr></tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="LOGIN"></td>
            </tr>
        </table>
    </form>
    <br>
    
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "Login gagal! USERNAME dan PASSWORD salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
</body>
</html>