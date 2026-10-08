<?php
$host     = 'localhost';
$dbname   = 'helpdesk_db';
$username = 'root';
$password = '';

$pdo = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
$stmt = $pdo->query("SELECT * FROM teknisi ORDER BY id ASC");
$teknisi = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Teknisi IT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>Daftar Teknisi IT</h2>
    <p>Kapasitas per teknisi: maksimal 5 tiket aktif.</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Bidang</th>
                <th>Status</th>
                <th>Tiket Aktif</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($teknisi)): ?>
                <?php $no = 1; ?>
                <?php foreach ($teknisi as $t): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($t['nama']) ?></td>
                        <td><?= htmlspecialchars($t['bidang']) ?></td>
                        <td><?= htmlspecialchars($t['status']) ?></td>
                        <td><?= (int)$t['tiket'] ?> / 5</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada data.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>