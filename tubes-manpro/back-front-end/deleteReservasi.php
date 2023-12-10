<?php 

include('connect.php');

$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM reservasi WHERE id = '$id'");

    mysqli_query($conn, "DELETE FROM reservasi WHERE id='$id'");

    if ($data) {
        echo "<script>alert('Reservasi berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=listReservasi.php'>";
    } else {
        echo "<script>alert('Reservasi gagal dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=listReservasi.php'>";
    }

$conn->close();

?>