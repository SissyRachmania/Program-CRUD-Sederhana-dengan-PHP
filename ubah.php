<?php
require 'functions.php';

$id = $_GET["id"];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah!');
                document.location.href = 'index.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mahasiswa["id"]; ?>">
        <ul>
            <li>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" id="nim" required 
                       value="<?= $mahasiswa["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required 
                       value="<?= $mahasiswa["nama"]; ?>">
            </li>
            <li>
                <label for="kode_prodi">Kode Prodi: </label>
                <input type="text" name="kode_prodi" id="kode_prodi" required 
                       value="<?= $mahasiswa["kode_prodi"]; ?>">
            </li>
            <li>
                <label for="status_aktivitas">Status Aktivitas: </label>
                <input type="text" name="status_aktivitas" id="status_aktivitas" required 
                       value="<?= $mahasiswa["status_aktivitas"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>

</body>
</html>
