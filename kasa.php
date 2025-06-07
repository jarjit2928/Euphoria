<?php
$servername = "localhost";
$username = "root";        // sesuaikan user DB Anda
$password = "";            // sesuaikan password DB Anda
$dbname = "kelompok1";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>