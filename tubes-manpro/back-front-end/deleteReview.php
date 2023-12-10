<?php 

include('connect.php');

$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM review WHERE id = '$id'");

    mysqli_query($conn, "DELETE FROM review WHERE id='$id'");

    if ($data) {
        echo "<script>alert('Review berhasil dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=listReview.php'>";
    } else {
        echo "<script>alert('Review gagal dihapus')</script>";
        echo "<meta http-equiv='refresh' content='1 url=listReview.php'>";
    }

$conn->close();

?>