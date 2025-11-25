<?php
// Muat koneksi dan fungsi umum hanya sekali
include_once '../../app.php';

// Cek apakah form dikirim
if (isset($_POST['tombol'])) {
    // Escape input
    $skill = escapeString($_POST['skill']);
    $percent = (int)$_POST['percent'];
    $description = escapeString($_POST['description']);

    // Query untuk menambah data skill baru
    $qInsert = "INSERT INTO skills(skill, percent, description) VALUES('$skill', '$percent', '$description')";

    // Eksekusi query & cek hasil
    if (mysqli_query($connect, $qInsert)) {
        echo "<script>
            alert('Data berhasil ditambahkan');
            window.location.href = '../../pages/skill/index.php';
        </script>";
    } else {
        echo "<script>
            alert('Data gagal ditambah');
            window.location.href = '../../pages/skill/create.php';
        </script>";
    }
}
?>
