<?php
include 'koneksi.php';

// Ambil ID dari URL
$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: daftar-aduan.php");
    exit();
}

// Ambil data pengaduan berdasarkan ID
$query  = "SELECT * FROM pengaduan WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data   = mysqli_fetch_assoc($result);

if (!$data) {
    echo "Data tidak ditemukan!";
    exit();
}

$nama_pelapor = $data['nama'] ?? $data['nama'] ?? '';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengaduan - DesaHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm p-4">
                    <h3 class="fw-bold mb-3 border-bottom pb-2">Edit Pengaduan</h3>
                    <form action="proses-edit.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?= htmlspecialchars($nama_pelapor); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Alamat Email</label>
                            <input type="email" class="form-control" name="email" value="<?= htmlspecialchars($data['email'] ?? ''); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori Aduan</label>
                            <select class="form-select" name="kategori" required>
                                <option value="Jalan Rusak" <?= ($data['kategori'] == 'Jalan Rusak') ? 'selected' : ''; ?>>Jalan Rusak</option>
                                <option value="Lampu Penerangan" <?= ($data['kategori'] == 'Lampu Penerangan') ? 'selected' : ''; ?>>Lampu Penerangan</option>
                                <option value="Fasilitas Umum" <?= ($data['kategori'] == 'Fasilitas Umum') ? 'selected' : ''; ?>>Fasilitas Umum</option>
                                <option value="Kebersihan" <?= ($data['kategori'] == 'Kebersihan') ? 'selected' : ''; ?>>Kebersihan</option>
                                <option value="Lainnya" <?= ($data['kategori'] == 'Lainnya') ? 'selected' : ''; ?>>Lainnya</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Status Aduan</label>
                            <select class="form-select" name="status" required>
                                <option value="Pending" <?= (($data['status'] ?? '') == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                                <option value="Diproses" <?= (($data['status'] ?? '') == 'Diproses') ? 'selected' : ''; ?>>Diproses</option>
                                <option value="Selesai" <?= (($data['status'] ?? '') == 'Selesai') ? 'selected' : ''; ?>>Selesai</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Deskripsi Laporan</label>
                            <textarea class="form-control" name="deskripsi" rows="4" required><?= htmlspecialchars($data['deskripsi']); ?></textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="daftar-aduan.php" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>