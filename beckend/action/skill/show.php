<?php
// Muat koneksi dan fungsi escapeString hanya sekali
include_once '../../app.php';

// Validasi ID dari URL
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid ID");
}

$id = intval($_GET['id']);

// Query ambil data skill berdasarkan ID
$qShow = "SELECT * FROM skills WHERE id = $id";
$result = mysqli_query($connect, $qShow);

// Cek query berhasil atau tidak
if (!$result) {
    die("Query gagal: " . mysqli_error($connect));
}

// Simpan hasil query ke variabel $skill (bukan $data)
$skill = mysqli_fetch_object($result);
?>
