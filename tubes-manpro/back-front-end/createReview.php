<?php

include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $review = $_POST['review'];
}

$query = mysqli_query($conn, "INSERT INTO review(nama, email, no_telepon, review) VALUES ('$nama', '$email', '$no_telepon', '$review')");

if ($query) {
    echo "<script>alert('Review berhasil dibuat')</script>";
    echo "<meta http-equiv='refresh' content='1 url=reviewForm.php'>";
} 

else {
    echo "<script>alert('Review gagal dibuat')</script>";
    echo "<meta http-equiv='refresh' content='1 url=reviewForm.php'>";
}

$conn->close();
?>