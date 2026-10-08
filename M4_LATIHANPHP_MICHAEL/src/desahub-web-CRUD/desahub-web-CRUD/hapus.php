<?php
include 'koneksi.php';

$id = $_GET['id'] ?? null;

if ($id) {
    // Hapus data berdasarkan ID
    $query = "DELETE FROM pengaduan WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: daftar-aduan.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: daftar-aduan.php");
    exit();
}
?>