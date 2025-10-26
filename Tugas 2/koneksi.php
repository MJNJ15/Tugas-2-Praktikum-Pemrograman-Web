<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "reviewlaptop";

$koneksi = new mysqli($hostname, $username, $password, $database);

if($koneksi->connect_errno){
    die("Koneksi Gagal" . $koneksi->connect_errno);
}

?>