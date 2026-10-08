<?php
$pdo = new PDO("mysql:host=localhost;dbname=helpdesk_db", "root", "");

// Create & Update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['id'])) {
        $stmt = $pdo->prepare("UPDATE teknisi SET nama=?, bidang=?, status=?, tiket=? WHERE id=?");
        $stmt->execute([$_POST['nama'], $_POST['bidang'], $_POST['status'], $_POST['tiket'], $_POST['id']]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO teknisi (nama, bidang, status, tiket) VALUES (?, ?, ?, ?)");
        $stmt->execute([$_POST['nama'], $_POST['bidang'], $_POST['status'], $_POST['tiket']]);
    }
    header("Location: index.php");
    exit;
}

// Delete
if (isset($_GET['delete'])) {
    $pdo->prepare("DELETE FROM teknisi WHERE id=?")->execute([$_GET['delete']]);
    header("Location: index.php");
    exit;
}

// Edit (ambil data untuk form)
$edit = null;
if (isset($_GET['edit'])) {
    $stmt = $pdo->prepare("SELECT * FROM teknisi WHERE id=?");
    $stmt->execute([$_GET['edit']]);
    $edit = $stmt->fetch();
}

$teknisi = $pdo->query("SELECT * FROM teknisi ORDER BY id ASC")->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD Teknisi IT</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        table, th, td { border: 1px solid #000; border-collapse: collapse; padding: 6px 10px; }
        form { margin-bottom: 20px; }
    </style>
</head>
<body>

    <h2><?= $edit ? 'Edit Teknisi' : 'Tambah Teknisi' ?></h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $edit['id'] ?? '' ?>">
        <input type="text" name="nama" placeholder="Nama" value="<?= $edit['nama'] ?? '' ?>" required>
        <input type="text" name="bidang" placeholder="Bidang" value="<?= $edit['bidang'] ?? '' ?>" required>
        <select name="status">
            <option value="Aktif" <?= ($edit['status'] ?? '') === 'Aktif' ? 'selected' : '' ?>>Aktif</option>
            <option value="Nonaktif" <?= ($edit['status'] ?? '') === 'Nonaktif' ? 'selected' : '' ?>>Nonaktif</option>
        </select>
        <input type="number" name="tiket" placeholder="Tiket" min="0" max="5" value="<?= $edit['tiket'] ?? 0 ?>" required>
        <button type="submit">Simpan</button>
        <?php if ($edit): ?><a href="index.php">Batal</a><?php endif; ?>
    </form>

    <h2>Daftar Teknisi IT</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Bidang</th>
            <th>Status</th>
            <th>Tiket</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; foreach ($teknisi as $t): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($t['nama']) ?></td>
            <td><?= htmlspecialchars($t['bidang']) ?></td>
            <td><?= htmlspecialchars($t['status']) ?></td>
            <td><?= (int)$t['tiket'] ?> / 5</td>
            <td>
                <a href="?edit=<?= $t['id'] ?>">Edit</a> | 
                <a href="?delete=<?= $t['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>