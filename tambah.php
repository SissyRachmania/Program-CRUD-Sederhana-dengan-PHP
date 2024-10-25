<?php

require 'functions.php';

if (isset($_POST["submit"])) {
   
 if ( tambah($_POST) > 0){
    echo "data berhasil di tambahkan";
 }else{
    echo "data gagal ditambahkan";
 }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"required>
            </li>
            <li>
                <label for="kode_prodi">Kode Prodi : </label>
                <input type="text" name="kode_prodi" id="kode_prodi"required>
            </li>
            <li>
                <label for="status_aktivitas">Status Aktivitas: </label>
                <input type="text" name="status_aktivitas" id="status_aktivitas"required>
            </li>

            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
            
        </ul>

    </form>

</body>
</html>