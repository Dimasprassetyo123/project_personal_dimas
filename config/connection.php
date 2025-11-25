<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'projek_personal_profaile';

    // Membuat koneksi database
  
$connect = mysqli_connect($hostname, $username, $password, $database);

// Cek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>