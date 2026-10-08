# DesaHub — Platform Pengaduan Warga Desa Sukamaju

> Sistem informasi berbasis web untuk menyampaikan pengaduan, aspirasi, dan laporan kerusakan fasilitas umum secara transparan kepada pemerintah desa.

---

## 📋 Deskripsi Proyek

**DesaHub** adalah platform layanan pengaduan warga digital untuk **Desa Sukamaju, Kecamatan Dayeuhkolot, Kabupaten Bandung**. Platform ini memungkinkan warga desa untuk melaporkan berbagai permasalahan infrastruktur dan fasilitas umum secara mudah dan transparan, serta memantau status penanganan laporan yang telah dikirimkan.

Proyek ini dikembangkan sebagai tugas mata kuliah **Web Application Development (WAD)**.

---

## ✨ Fitur Utama

- **Formulir Pengaduan Warga** — Warga dapat mengisi laporan lengkap dengan nama, email, kategori aduan, deskripsi, dan foto bukti.
- **Daftar Rekapitulasi Aduan** — Menampilkan seluruh laporan yang masuk dalam bentuk tabel dengan status terkini.
- **Status Laporan** — Setiap aduan memiliki status: `Pending`, `Diproses`, atau `Selesai`.
- **Desain Responsif** — Tampilan menyesuaikan layar desktop maupun perangkat mobile.

---

## 🗂️ Struktur Proyek

```
desahub-web/
├── index.html          # Halaman utama (profil desa & formulir pengaduan)
├── daftar-aduan.html   # Halaman rekapitulasi daftar pengaduan
├── css/
│   └── style.css       # Kustomisasi tampilan (CSS tambahan)
├── assets/
│   ├── desa.jpg        # Foto kantor/area Desa Sukamaju
│   └── icon_title.png  # Ikon tab browser
└── ReadMe.md           # Dokumentasi proyek ini
```

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Versi | Keterangan |
|---|---|---|
| HTML5 | — | Struktur halaman & semantik |
| CSS3 | — | Kustomisasi tampilan (`style.css`) |
| Bootstrap | 5.3.3 | Framework CSS via CDN |
| Plus Jakarta Sans | — | Tipografi via Google Fonts |

> Seluruh dependensi eksternal (Bootstrap & Google Fonts) dimuat via CDN — tidak diperlukan instalasi npm/node.

---

## 🚀 Cara Menjalankan

Proyek ini adalah website statis yang **tidak memerlukan instalasi** atau build tool apapun.

1. **Clone atau unduh** repositori ini.
2. **Buka** file `index.html` langsung di browser (double-click), **atau** gunakan ekstensi **Live Server** di VS Code untuk pengalaman pengembangan yang lebih baik.

```bash
# Jika menggunakan VS Code + Live Server:
# Klik kanan pada index.html -> "Open with Live Server"
```

---

## 📄 Halaman-Halaman

### 1. Beranda (`index.html`)
- Profil singkat Desa Sukamaju beserta foto kantor desa.
- Formulir pengaduan warga dengan kolom:
  - **Nama Lengkap**
  - **Alamat Email**
  - **Kategori Aduan** (Jalan Rusak, Lampu Penerangan, Fasilitas Umum, Kebersihan, Lainnya)
  - **Deskripsi Laporan**
  - **Unggah Foto Bukti** (JPG, PNG, JPEG)

### 2. Daftar Aduan (`daftar-aduan.html`)
- Tabel rekapitulasi seluruh laporan yang masuk ke sistem.
- Kolom: No, Tanggal, Pelapor, Kategori, Ringkasan, Status.
- Badge status berwarna:
  - **Pending** — laporan baru diterima, belum diproses.
  - **Diproses** — laporan sedang ditangani oleh pihak desa.
  - **Selesai** — laporan telah selesai ditindaklanjuti.

---

## 🎨 Desain & Tampilan

Proyek menggunakan palet warna yang terinspirasi dari nuansa alam pedesaan:

| Variabel CSS | Nilai | Keterangan |
|---|---|---|
| `--primary-color` | `#2F5D50` | Hijau tua — warna utama navbar & tombol |
| `--primary-hover` | `#24483E` | Hijau lebih gelap — efek hover tombol |
| `--accent-color` | `#ECB349` | Kuning emas — aksen & badge "Diproses" |
| `--bg-color` | `#FAFAF7` | Krem putih — latar belakang halaman |

Font: **Plus Jakarta Sans** (Google Fonts)

---

## 📁 Kategori Aduan

Warga dapat mengajukan pengaduan pada kategori berikut:

- **Jalan Rusak** — jalan berlubang, paving block rusak, dsb.
- **Lampu Penerangan** — lampu jalan mati atau tidak berfungsi.
- **Fasilitas Umum** — kerusakan pos ronda, balai warga, posyandu, dsb.
- **Kebersihan** — tumpukan sampah liar, saluran air tersumbat, dsb.
- **Lainnya** — permasalahan di luar kategori di atas.

---

## 👨‍💻 Informasi Pengembang

| | |
|---|---|
| **Mata Kuliah** | Web Application Development (WAD) |
| **Lokasi** | Desa Sukamaju, Kec. Dayeuhkolot, Kab. Bandung, Jawa Barat 12345 |
| **Tahun** | 2026 |

---

## 📜 Lisensi

Proyek ini dibuat untuk keperluan akademik. Seluruh konten dan kode dalam repositori ini bersifat edukatif.
