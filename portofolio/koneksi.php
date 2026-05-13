<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "db_portofolio";

$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}
?>