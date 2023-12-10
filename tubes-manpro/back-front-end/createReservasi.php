<?php

include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama = $_POST['nama'];
    $no_telepon = $_POST['no_telepon'];
    $jumlah_orang = $_POST['jumlah_orang'];
    $tanggal_reservasi = $_POST['tanggal_reservasi'];
    $catatan = $_POST['catatan'];
}

$query = mysqli_query($conn, "INSERT INTO reservasi(nama, no_telepon, jumlah_orang, tanggal_reservasi, catatan) VALUES ('$nama', '$no_telepon', '$jumlah_orang', '$tanggal_reservasi', '$catatan')");

if ($query) {
    echo "<script>alert('Reservasi berhasil dibuat')</script>";
    echo "<meta http-equiv='refresh' content='1 url=reservasiForm.php>";
} 

else {
    echo "<script>alert('Reservasi gagal dibuat')</script>";
    echo "<meta http-equiv='refresh' content='1 url=reservasiForm.php'>";
}

$conn->close();

?>