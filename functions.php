<?php

$conn = mysqli_connect("localhost", "root", "", "web_sekolah");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data) {
    global $conn;

    $nim = mysqli_real_escape_string($conn, $data["nim"]);
    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $kode_prodi = mysqli_real_escape_string($conn, $data["kode_prodi"]);
    $status_aktivitas = mysqli_real_escape_string($conn, $data["status_aktivitas"]);

    $query = "INSERT INTO mahasiswa VALUES 
              ('', '$nim', '$nama', '$kode_prodi', '$status_aktivitas')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nim = mysqli_real_escape_string($conn, $data["nim"]);
    $nama = mysqli_real_escape_string($conn, $data["nama"]);
    $kode_prodi = mysqli_real_escape_string($conn, $data["kode_prodi"]);
    $status_aktivitas = mysqli_real_escape_string($conn, $data["status_aktivitas"]);

    $query = "UPDATE mahasiswa SET 
                nim = '$nim', 
                nama = '$nama', 
                kode_prodi = '$kode_prodi', 
                status_aktivitas = '$status_aktivitas' 
              WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
