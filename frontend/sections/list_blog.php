<?php
// Debug: Cek lokasi file
echo "<pre>";
echo "File: " . __FILE__ . "\n";
echo "Directory: " . __DIR__ . "\n";
echo "Current dir: " . getcwd() . "\n";

// Database connection - sesuaikan path
$configPath = __DIR__ . '/../config/connection.php';
echo "Mencari config di: " . $configPath . "\n";

if (!file_exists($configPath)) {
    die("ERROR: File config tidak ditemukan!<br>
         Cari di: $configPath<br>
         Pastikan file connection.php ada di folder config/");
}

include $configPath;

// Cek koneksi
if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Test query
$testQuery = mysqli_query($connect, "SHOW TABLES");
echo "Jumlah tabel: " . mysqli_num_rows($testQuery) . "\n";

// Cek tabel blogs
$checkBlogs = mysqli_query($connect, "SHOW TABLES LIKE 'blogs'");
if (mysqli_num_rows($checkBlogs) == 0) {
    die("ERROR: Tabel 'blogs' tidak ditemukan di database!");
}

echo "Tabel blogs ditemukan!\n";
echo "</pre>";

// Query blogs
$qBlog = "SELECT * FROM blogs ORDER BY date DESC";
$result = mysqli_query($connect, $qBlog);

if (!$result) {
    die("Error query: " . mysqli_error($connect));
}

$blogCount = mysqli_num_rows($result);
echo "<p>Jumlah blog ditemukan: $blogCount</p>";
?>

<style>
    /* CSS tetap sama seperti sebelumnya */
    #blogs {
        padding: 40px 0;
        background: #f9f9f9;
        font-family: Arial, sans-serif;
    }

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

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 20px;
        max-width: 1200px;
        margin: auto;
        padding: 0 15px;
    }

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

    .back-btn, .btn-primary {
        display: inline-block;
        background: #007bff;
        color: #fff;
        padding: 8px 14px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        transition: background 0.2s ease;
        text-align: center;
    }

    .back-btn:hover, .btn-primary:hover {
        background: #0056b3;
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
                // PERBAIKAN PATH GAMBAR
                $imagePath = "../storages/blog/" . $item['image'];
                $fallbackImage = "../storages/blog/default.jpg";
                
                // Debug path gambar
                $fullImagePath = __DIR__ . '/../storages/blog/' . $item['image'];
                $fullFallbackPath = __DIR__ . '/../storages/blog/default.jpg';
                
                echo "<!-- Debug: $imagePath -->\n";
                echo "<!-- File exists: " . (file_exists($fullImagePath) ? 'YES' : 'NO') . " -->\n";
            ?>
                <div class="blog-card">
                    <div class="blog-img-container">
                        <img src="<?= $imagePath ?>"
                            alt="<?= htmlspecialchars($item['tittle']) ?>"
                            onerror="this.src='<?= $fallbackImage ?>'; console.log('Gambar gagal: <?= $imagePath ?>')">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><?= htmlspecialchars($item['tittle']) ?></h3>
                        <div class="blog-meta">
                            <?= date("d M Y", strtotime($item['date'])) ?> | <?= htmlspecialchars($item['author']) ?>
                        </div>
                        <p class="blog-desc">
                            <?= substr(strip_tags($item['description']), 0, 80) ?>...
                        </p>
                        <!-- PERBAIKAN PATH DETAIL BLOG -->
                        <a href="details_blog.php?id=<?= $item['id'] ?>" class="btn-primary">
                            Detail
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div style="grid-column:1/-1; text-align:center; color:#666; padding: 40px;">
                <h3>Tidak ada blog tersedia.</h3>
                <p>Silakan tambahkan blog melalui admin panel.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php
// Tutup koneksi
mysqli_close($connect);
?>