<?php
require 'koneksi.php';

if ($_POST['yes'] == 'yes') {

	$nama = $_POST['judul_buku'];
    $gen = $_POST['genre'];
    $tglr = $_POST['tanggal_rilis'];
    $pen = $_POST['penerbit_buku'];
    $peng = $_POST['pengarang_buku'];
    $file = upload();
    if(!$file){
        return false;
    }
	$key = "INSERT INTO buku  VALUES ( '' , '$nama' , '$pen' , '$peng' , '$file', '$tglr', '$gen')";
    var_dump(mysqli_query($conn, $key));

}

function upload() {

    $nameFiles = $_FILES['data_buku']['name'];
    $ukuranFiles = $_FILES['data_buku']['size'];
    $error = $_FILES['data_buku']['error'];
    $tmpname = $_FILES['data_buku']['tmp_name'];

    if($error === 4){
        echo "<script>
                alert('Pilih File Word yang akan di Upload terlebih dahulu);
                </script>";
        return false;
    }

    $pdfvalid = ['pdf'];
    $filepdf = explode('.', $nameFiles);
    $filepdf = strtolower(end($filepdf));
    if( !in_array( $filepdf, $pdfvalid ) ){
        echo "<script>
                alert('Format File yang anda pilih bukan pdf ');
                </script>";
        return false;
        
    }

    if($ukuranFiles > 50000000){
        echo "<script>
                alert('Ukuran File yang anda pilih terlalu besar ');
                </script>";
                return false;
        header("location:tambah_buku.php");
    }

    move_uploaded_file($tmpname, 'file/pdf/' . $nameFiles);
    return $nameFiles;


}

header("location:buku.php");
