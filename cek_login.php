<?php
session_start();
require 'koneksi.php';


if ( isset($_POST["login"]) ){

    $loguser = $_POST["user_admin"];
    $logpass = $_POST["pass_admin"];

    $cek = "SELECT * FROM admin WHERE user_admin = '$loguser'";
    $hc = mysqli_query($conn, $cek);

    if( mysqli_num_rows($hc) == 1 ){

        $row = MYSQLI_FETCH_ASSOC($hc);

        if( password_verify($logpass, $row["pass_admin"]) ) {

            $_SESSION["login"] = true;
            $_SESSION["user_admin"] = $row["user_admin"];
            $_SESSION["foto_admin"] = $row["foto_admin"];

            header("location:buku.php");
            exit;
        }
    }

    $error = true;

}

?>