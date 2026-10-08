<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama      = $_POST['nama'];
    $email     = $_POST['email'];
    $kategori  = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $status    = $_POST['status'];


    $created_at = date('Y-m-d H:i:s');

    
    $query = "INSERT INTO pengaduan (nama, email, kategori, deskripsi, created_at, status) 
              VALUES ('$nama', '$email', '$kategori', '$deskripsi', '$created_at', '$status')";

    if (mysqli_query($koneksi, $query)) {
       
        header("Location: daftar-aduan.php");
        exit();
    } else {
        
        echo "<h3>Gagal Menyimpan Data!</h3>";
        echo "Pesan Error: " . mysqli_error($koneksi);
    }
} else {
    echo "Akses langsung tidak diizinkan.";
}
?>