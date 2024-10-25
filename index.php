<?php
require 'functions.php';  

$mahasiswa = query("SELECT * FROM mahasiswa limit 15");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin - Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Prodi</th>
            <th>Status Aktivitas</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row): ?>
        <tr>
            <td><?= $i++; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" 
                   onclick="return confirm('Yakin ingin menghapus data?');">
                   Hapus
                </a>
            </td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["kode_prodi"]; ?></td>
            <td><?= $row["status_aktivitas"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
