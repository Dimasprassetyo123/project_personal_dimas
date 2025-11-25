<?php

if (!isset($_GET['id'])) {
    echo "
    <script>
        alert('Tidak Bisa Memilih Id ini');
        window.location.href='../../pages/about/index.php'; 
    </script>";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM abouts WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$about = mysqli_fetch_object($result);

if (!$about) {
    die("Data tidak ditemukan");
}

?>
