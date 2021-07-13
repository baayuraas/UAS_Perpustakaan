<?php
require 'koneksi.php';

if ( isset($_POST["regis"]) ) {
    
    if (regis($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan')
            </script>";
    } else {
        echo mysqli_error($conn);
    }
    header("location:login.php");
}

function regis($data){
    global $conn;

    $user = strtolower(stripslashes($data["user_admin"]));
    $ema = $_POST["email_admin"];
    $fot = datfot();
    if (!$fot) {
        return false;
    }
    $pass = mysqli_real_escape_string($conn, $data["pass_admin"]);
    $rpass = mysqli_real_escape_string($conn, $data["rpass_admin"]);
    $selu = "SELECT user_admin FROM admin where user_admin = '$user'";
    $cekus = mysqli_query($conn, $selu);

    if(MYSQLI_FETCH_ASSOC($cekus)){
        echo "<script>
                alert('username sudah terdaftar!')
                </script>";
                return false;
    }

    if($pass !== $rpass){
        echo"<script>
            alert('Password tidak sesuai')
            </script>";
            return false;
    }
    
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $tam = "INSERT INTO admin VALUES ( '', '$user', '$ema', '$pass', '$fot' )";
    var_dump(mysqli_query($conn, $tam));

    return mysqli_affected_rows($conn);
}

function datfot(){

    $nfile = $_FILES['foto_admin']['name'];
    $ufile = $_FILES['foto_admin']['size'];
    $er = $_FILES['foto_admin']['error'];
    $temfile = $_FILES['foto_admin']['tmp_name'];

    if ($er === 4) {
        echo "<script>
                alert('Pilih File Word yang akan di Upload terlebih dahulu);
                </script>";
        return false;
    }

    $fotval = ['jpeg', 'jpg', 'png'];
    $filefot = explode('.', $nfile);
    $filefot = strtolower(end($filefot));
    if (!in_array($filefot, $fotval)) {
        echo "<script>
                alert('Format File yang anda pilih bukan JPEG, JPG, PNG ');
                </script>";
        return false;
    }

    if ($ufile > 50000000) {
        echo "<script>
                alert('Ukuran File yang anda pilih terlalu besar ');
                </script>";
        return false;
    }

    move_uploaded_file($temfile, 'file/foto/' . $nfile);
    return $nfile;


}


?>