<?php
$servername = "localhost";
$username = "root";
$pass = "";
$database = "perpustakaan";

//create connect
$conn = new mysqli ($servername , $username , $pass , $database);
if ($conn->connect_error) {
    die("connection failed : " . $conn->connect_error); 
}
?>