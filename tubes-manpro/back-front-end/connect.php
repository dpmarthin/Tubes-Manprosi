<?php

$host = "localhost";
$username = "root";
$pass = "";
$database = "ujung_landasan";

$conn = mysqli_connect("$host", "$username", "$pass", "$database");

if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}

?>