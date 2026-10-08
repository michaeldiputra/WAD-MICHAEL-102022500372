<?php
// 1. Hubungkan ke database
include 'koneksi.php';

// 2. Ambil data pengaduan dari database (diurutkan dari ID terbaru)
$query  = "SELECT * FROM pengaduan ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Aduan - DesaHub Desa Sukamaju</title>
    <link rel="icon" type="image/png" href="assets/icon_title.png">
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header & Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">DesaHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="daftar-aduan.php">Daftar Aduan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama Daftar Aduan -->
    <main class="py-5">
        <div class="container">
            <div class="mb-4">
                <h1 class="h3 fw-bold mb-1">Daftar Pengaduan Warga</h1>
                <p class="text-muted">Rekapitulasi laporan dan aspirasi masyarakat Desa Sukamaju yang masuk ke sistem.</p>
            </div>

            <!-- Tabel Daftar Aduan -->
            <div class="table-responsive bg-white p-3 border rounded-1">
                <table class="table table-bordered table-striped align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th scope="col" class="text-center" style="width: 5%;">No</th>
                            <th scope="col" style="width: 12%;">Tanggal</th>
                            <th scope="col" style="width: 15%;">Pelapor</th>
                            <th scope="col" style="width: 15%;">Kategori</th>
                            <th scope="col" style="width: 28%;">Ringkasan</th>
                            <th scope="col" class="text-center" style="width: 10%;">Status</th>
                            <th scope="col" class="text-center" style="width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        if ($result && mysqli_num_rows($result) > 0) :
                            while ($row = mysqli_fetch_assoc($result)) : 
                                // Format tanggal agar rapi (DD/MM/YYYY)
                                $tgl_raw = $row['created_at'] ?? $row['tanggal'] ?? null;
                                $tanggal = (!empty($tgl_raw) && $tgl_raw !== '0000-00-00 00:00:00') 
                                           ? date('d/m/Y', strtotime($tgl_raw)) 
                                           : '-';
                                
                                // Penanganan nama pelapor
                                $nama_pelapor = $row['nama'] ?? $row['nama_warga'] ?? '-';
                                
                                // Penanganan status aduan (jika NULL atau kosong, otomatis 'Pending')
                                $status_val = $row['status'] ?? '';
                                $status     = !empty(trim($status_val)) ? $status_val : 'Pending';
                                
                                // Kelas warna badge Bootstrap berdasarkan status
                                $badgeClass = 'bg-secondary';
                                if (strtolower($status) == 'pending') {
                                    $badgeClass = 'bg-warning text-dark';
                                } elseif (strtolower($status) == 'diproses') {
                                    $badgeClass = 'bg-info text-dark';
                                } elseif (strtolower($status) == 'selesai') {
                                    $badgeClass = 'bg-success';
                                }
                        ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $tanggal; ?></td>
                            <td><?= htmlspecialchars($nama_pelapor); ?></td>
                            <td><?= htmlspecialchars($row['kategori'] ?? '-'); ?></td>
                            <td><?= htmlspecialchars($row['deskripsi'] ?? '-'); ?></td>
                            <td class="text-center">
                                <span class="badge <?= $badgeClass; ?> px-2 py-1"><?= htmlspecialchars($status); ?></span>
                            </td>
                            <td class="text-center">
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning me-1">Edit</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pengaduan ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                            endwhile; 
                        else : 
                        ?>
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">Belum ada pengaduan yang masuk.</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-0">Kantor Pemerintah Desa Sukamaju: Jl. Raya Sukamaju No. 12, Kecamatan Dayeuhkolot, Kabupaten
                Bandung, Jawa Barat 12345 | &copy; 2026 DesaHub Sukamaju</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>