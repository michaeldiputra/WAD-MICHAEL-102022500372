<?php
$host = "127.0.0.1";
$user = "root";
$pass = "root";
$db   = "db_desahub";
$port = 8889;

$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>