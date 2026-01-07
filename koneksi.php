<?php
$host = "localhost";
$user = "level1_user"; // Sesuai panduan 
$pass = "password";    // Sesuai panduan 
$db   = "level1_db";   // Sesuai panduan [cite: 27]

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
