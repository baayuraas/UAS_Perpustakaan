<?php
require 'koneksi.php';
$username = $_POST['username'];
$pass     = $_POST['password'];
$login = mysqli_query($mysqli, "SELECT * FROM tb_users WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $pass)
{
  session_start();
  
  $_SESSION['nama'] = $row['nama'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['gambar'] = $row['gambar'];
  header('location:home.php');
}
else
{
   echo "<div class='alert alert-info'>Gagal Login</div>";
   echo "<meta http-equiv='refresh' content='1;url=login.php'>";
}
?>