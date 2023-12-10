<?php

include('connect.php'); 

$id = $_GET['id'];
$data = mysqli_query($conn,"SELECT * FROM review WHERE id = '$id'");
        
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_telepon = $_POST['no_telepon'];
        $review = $_POST['review'];

        mysqli_query($conn, "UPDATE review set nama='$nama', email='$email', no_telepon='$no_telepon', review='$review'  WHERE id='$id'");

        if ($data) {
            echo "<script>alert('Review berhasil diubah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=listReview.php'>";
        } 
        
        else {
            echo "<script>alert('Review gagal diubah')</script>";
            echo "<meta http-equiv='refresh' content='1 url=listReview.php'>";
        }
        
$conn->close();
?>