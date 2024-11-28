<?php
$host = 'localhost';
$dbname = 'manajemen_tugas';
$user = 'root';
$password = '';

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
