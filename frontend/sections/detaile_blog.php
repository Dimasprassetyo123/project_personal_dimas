<?php
include "../../config/connection.php";

// Ambil ID dari URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "ID blog tidak ditemukan.";
    exit;
}

$id = intval($_GET['id']); // Amankan ID

// Ambil data blog berdasarkan ID

$qDetail = "SELECT * FROM blogs WHERE id = $id LIMIT 1";
$result = mysqli_query($connect, $qDetail) or die(mysqli_error($connect));

if (mysqli_num_rows($result) === 0) {
    echo "Blog tidak ditemukan.";
    exit;
}

$blog = mysqli_fetch_assoc($result);
$imagePath = "../../storages/blog/" . $blog['image'];
$fallbackImage = "../../storages/blog/default.jpg";
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #f9f9f9;
        padding: 20px;
    }
    .blog-detail {
        max-width: 500px;
        margin: auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        padding: 20px;
    }
    .blog-detail img {
        width:100%;
        border-radius: 10px;
        margin-bottom: 15px;
    }
    .blog-detail h1 {
        font-size: 26px;
        margin-bottom: 10px;
    }
    .blog-meta {
        color: #888;
        font-size: 14px;
        margin-bottom: 20px;
    }
    .blog-desc {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
    }
    .back-btn {
        display: inline-block;
        margin-top: 20px;
        padding: 8px 14px;
        background: #007bff;
        color: #fff;
        border-radius: 6px;
        text-decoration: none;
    }
    .back-btn:hover {
        background: #0056b3;
    }
</style>

<div class="blog-detail">
    <img src="<?= $imagePath ?>" alt="<?= ($blog['tittle']) ?>"
         onerror="this.src='<?= $fallbackImage ?>'">
    <h1><?= ($blog['tittle']) ?></h1>
    <div class="blog-meta">
        <?= date("d M Y", strtotime($blog['date'])) ?> | <?= ($blog['author']) ?>
    </div>
    <div class="blog-desc">
        <?= nl2br($blog['description']) ?>
    </div>
    <a href="../sections/list_blog.php" class="back-btn">← Kembali</a>
</div>
