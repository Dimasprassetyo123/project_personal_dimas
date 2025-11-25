<?php
// Database connection
include "../../config/connection.php";

$qBlog = "SELECT * FROM blogs ORDER BY date DESC";
$result = mysqli_query($connect, $qBlog) or die(mysqli_error($connect));
?>

<style>
    /* Container utama */
    #blogs {
        padding: 40px 0;
        background: #f9f9f9;
        font-family: Arial, sans-serif;
    }

    /* Judul section */
    .section-title h2 {
        text-align: center;
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .section-title p {
        text-align: center;
        font-size: 16px;
        color: #666;
        max-width: 600px;
        margin: 0 auto 30px;
    }

    /* Grid blog */
    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: auto;
        padding: 0 15px;
    }

    /* Card blog */
    .blog-card {
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* Gambar blog */
    .blog-img-container {
        width: 100%;
        height: 180px;
        overflow: hidden;
    }

    .blog-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .blog-card:hover .blog-img-container img {
        transform: scale(1.05);
    }

    /* Konten blog */
    .blog-content {
        padding: 15px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .blog-title {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .blog-meta {
        font-size: 12px;
        color: #888;
        margin-bottom: 10px;
    }

    .blog-desc {
        font-size: 14px;
        color: #555;
        line-height: 1.4;
        margin-bottom: 15px;
        flex: 1;
    }

    /* Tombol kembali */
    .back-btn {
        display: inline-block;
        background: #007bff;
        color: #fff;
        padding: 8px 14px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.2s ease;
    }

    .back-btn:hover {
        background: #0056b3;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        display: inline-block;
        transition: background 0.2s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<section id="blogs">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Selengkapnya</h2>
        <p>Kumpulan project web, animasi, dan dokumentasi karya saya.</p>
        <div style="text-align:center; margin-bottom:20px;">
            <a href="../index.php#blogs" class="back-btn">← Kembali ke Blog</a>
        </div>
    </div>

    <!-- Blog List -->
    <div class="blog-grid">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($item = mysqli_fetch_assoc($result)):
                $imagePath = "../../storages/blog/" . $item['image'];
                $fallbackImage = "../../storages/blog/default.jpg";
            ?>
                <div class="blog-card">
                    <div class="blog-img-container">
                        <img src="<?= $imagePath ?>"
                            alt="<?= ($item['tittle']) ?>"
                            onerror="this.src='<?= $fallbackImage ?>'">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><?= ($item['tittle']) ?></h3>
                        <div class="blog-meta">
                            <?= date("d M Y", strtotime($item['date'])) ?> | <?= ($item['author']) ?>
                        </div>
                        <p class="blog-desc">
                            <?= substr(strip_tags($item['description']), 0, 80) ?>...
                        </p>
                        <a href="../sections/detaile_blog.php?id=<?= $item['id'] ?>" class="btn-primary text-center">
                            Detail
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div style="grid-column:1/-1; text-align:center; color:#666;">
                Tidak ada blog tersedia.
            </div>
        <?php endif; ?>
    </div>
</section>