<?php
$host = "localhost";     // Atau IP server database
$user = "root";          // Username default XAMPP
$pass = "";              // Password default XAMPP biasanya kosong
$db   = "tugas_html";    // Nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
