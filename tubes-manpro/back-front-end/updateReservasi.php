<?php

include('connect.php'); 

$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM reservasi WHERE id = '$id'");
        
        $nama = $_POST['nama'];
        $no_telepon = $_POST['no_telepon'];
        $jumlah_orang = $_POST['jumlah_orang'];
        $tanggal_reservasi = $_POST['tanggal_reservasi'];
        $catatan = $_POST['catatan'];

        mysqli_query($conn, "UPDATE reservasi set nama='$nama', no_telepon='$no_telepon', jumlah_orang='$jumlah_orang', tanggal_reservasi='$tanggal_reservasi', catatan='$catatan' WHERE id='$id'");

        if ($data) {
            echo "<script>alert('Reservasi berhasil diubah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=listReservasi.php'>";
        } 

        else {
            echo "<script>alert('Reservasi gagal diubah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=listReservasi.php'>";
        }
        
$conn->close();
?>