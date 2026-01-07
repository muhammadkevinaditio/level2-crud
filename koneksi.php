<?php
$host = "localhost";
$user = "level3_user";  // Ubah jadi level3_user
$pass = "password";     // Password tetap sama
$db   = "level3_db";    // Ubah jadi level3_db
$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
