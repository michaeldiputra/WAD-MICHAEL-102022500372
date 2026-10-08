<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id        = $_POST['id'];
    $nama      = $_POST['nama'];
    $email     = $_POST['email'];
    $kategori  = $_POST['kategori'];
    $status    = $_POST['status'];
    $deskripsi = $_POST['deskripsi'];

    // Update data ke MySQL
    $query = "UPDATE pengaduan SET 
                nama = '$nama', 
                email = '$email', 
                kategori = '$kategori', 
                status = '$status', 
                deskripsi = '$deskripsi' 
              WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: daftar-aduan.php");
        exit();
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: daftar-aduan.php");
    exit();
}
?>