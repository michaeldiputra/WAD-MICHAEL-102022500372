<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DesaHub - Layanan Pengaduan Warga Desa Sukamaju</title>
    <link rel="icon" type="image/png" href="assets/icon_title.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="daftar-aduan.php">Daftar Aduan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-md-7 text-start">
                    <h1 class="h2 fw-bold mb-1">Desa Sukamaju</h1>
                    <p class="text-muted mb-3">Kecamatan Dayeuhkolot, Kabupaten Bandung</p>
                    <p class="mb-4">
                        Desa Sukamaju merupakan wilayah pemukiman dan pertanian yang berkomitmen untuk meningkatkan
                        kualitas pelayanan publik serta sarana prasarana desa. Melalui platform DesaHub, warga dapat
                        menyampaikan pengaduan, aspirasi, dan laporan kerusakan fasilitas umum secara langsung kepada
                        pihak pemerintah desa untuk ditindaklanjuti secara transparan.
                    </p>
                    <a href="#form-pengaduan" class="btn btn-primary-custom px-4 py-2">Buat Laporan Aduan</a>
                </div>
                <div class="col-md-5 text-center">
                    <img src="assets/desa.jpg" alt="Foto Kantor Desa Sukamaju" class="hero-img">
                </div>
            </div>
        </div>
    </section>

    <section id="form-pengaduan" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-card">
                        <h2 class="h4 fw-bold mb-3 border-bottom pb-2">Formulir Pengaduan Warga</h2>
                        <form action="proses-tambah.php" method="POST">

                            <div class="mb-3">
                                <label for="nama" class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan nama lengkap Anda" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label fw-semibold">Alamat Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="contoh: nama@email.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="kategori" class="form-label fw-semibold">Kategori Aduan</label>
                                <select class="form-select" id="kategori" name="kategori" required>
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    <option value="Jalan Rusak">Jalan Rusak</option>
                                    <option value="Lampu Penerangan">Lampu Penerangan</option>
                                    <option value="Fasilitas Umum">Fasilitas Umum</option>
                                    <option value="Kebersihan">Kebersihan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-semibold">Deskripsi Laporan</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4"
                                    placeholder="Jelaskan detail pengaduan beserta lokasi spesifik..."
                                    required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2">Kirim Pengaduan</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-0">Kantor Pemerintah Desa Sukamaju: Jl. Raya Sukamaju No. 12, Kecamatan Dayeuhkolot, Kabupaten
                Bandung, Jawa Barat 12345 | &copy; 2026 DesaHub Sukamaju</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>