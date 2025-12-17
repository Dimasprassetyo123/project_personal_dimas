<?php
include '../config/connection.php';
$qBlogs = "SELECT * FROM blogs";
$result = mysqli_query($connect, $qBlogs) or die(mysqli_error($connect));
?>

<style>
/* Animasi untuk card blog - PERBAIKAN */
.blog-card {
    transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border: none;
    overflow: hidden;
    background: linear-gradient(145deg, #ffffff, #f8f9fa);
    position: relative;
}

.blog-card:hover {
    transform: translateY(-12px) scale(1.03);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15), 0 8px 20px rgba(0, 0, 0, 0.1);
}

/* Gradient border animasi - DIKASIH WARNA */
.blog-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: linear-gradient(90deg, #ff6b6b, #4ecdc4, #45b7d1, #96ceb4, #ffeaa7, #ff6b6b);
    background-size: 300% 100%;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.8s ease;
    z-index: 2;
}

.blog-card:hover::before {
    transform: scaleX(1);
    animation: gradientMove 3s infinite linear;
}

@keyframes gradientMove {
    0% { background-position: 0% 50%; }
    100% { background-position: 300% 50%; }
}

/* Background color change on hover - ANIMASI WARNA BARU */
.blog-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(78, 115, 223, 0.05), rgba(111, 66, 193, 0.05));
    opacity: 0;
    transition: opacity 0.6s ease;
    z-index: 1;
}

.blog-card:hover::after {
    opacity: 1;
}

.card-img-top {
    transition: all 0.6s ease;
    filter: brightness(0.95);
}

.blog-card:hover .card-img-top {
    transform: scale(1.08);
    filter: brightness(1.05);
}

.card-body {
    position: relative;
    z-index: 3;
    background: white;
    transition: background 0.4s ease;
}

.blog-card:hover .card-body {
    background: linear-gradient(to bottom, #ffffff, #fafbff);
}

.blog-meta {
    transition: all 0.4s ease;
}

.blog-card:hover .blog-meta {
    color: #6f42c1 !important;
    transform: translateX(5px);
}

.card-title {
    transition: all 0.4s ease;
    color: #2d3748;
}

.blog-card:hover .card-title {
    color: #4e73df;
    transform: translateX(3px);
}

.card-text {
    transition: all 0.4s ease;
}

.blog-card:hover .card-text {
    color: #4a5568;
    transform: translateX(2px);
}

.btn-primary {
    background: linear-gradient(45deg, #4e73df, #6f42c1);
    border: none;
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    overflow: hidden;
}

.btn-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.6s ease;
}

.btn-primary:hover::before {
    left: 100%;
}

.btn-primary:hover {
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 8px 25px rgba(110, 66, 193, 0.5);
}

/* Animasi untuk munculnya card */
.col-md-4 {
    animation: fadeInUp 0.8s ease forwards;
    opacity: 0;
    transform: translateY(40px);
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Delay untuk setiap card */
.col-md-4:nth-child(1) { animation-delay: 0.1s; }
.col-md-4:nth-child(2) { animation-delay: 0.2s; }
.col-md-4:nth-child(3) { animation-delay: 0.3s; }
.col-md-4:nth-child(4) { animation-delay: 0.4s; }
.col-md-4:nth-child(5) { animation-delay: 0.5s; }
.col-md-4:nth-child(6) { animation-delay: 0.6s; }

/* Efek glow subtle pada hover */
.blog-card:hover {
    animation: cardGlow 2s infinite alternate;
}

@keyframes cardGlow {
    0% {
        box-shadow: 0 20px 40px rgba(78, 115, 223, 0.1), 0 8px 20px rgba(111, 66, 193, 0.08);
    }
    100% {
        box-shadow: 0 25px 50px rgba(78, 115, 223, 0.15), 0 12px 25px rgba(111, 66, 193, 0.12);
    }
}
</style>

<section id="blogs" class="section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Blog</h2>
        <p>Kumpulan project web, animasi, dan dokumentasi karya saya. Selamat mengeksplorasi!</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row justify-content-center">
            <?php while ($item = $result->fetch_object()): ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm blog-card" style="margin:auto; border-radius:15px;">
                        <img src="../storages/blog/<?= $item->image ?>"
                            class="card-img-top"
                            alt="<?= $item->tittle ?>"
                            style="height:200px; object-fit:cover; border-top-left-radius:15px; border-top-right-radius:15px;">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-2 fw-bold"><?= $item->tittle ?></h5>
                            <!-- Blog Meta (tanggal + author) -->
                            <div class="blog-meta mb-3" style="font-size: 14px; color: #555;">
                                <i class="bi bi-calendar me-1"></i><?= date("d M Y", strtotime($item->date)) ?> 
                                | 
                                <i class="bi bi-person me-1"></i><?= $item->author ?>
                            </div>

                            <p class="card-text mb-3" style="font-size: 15px; line-height:1.5; color: #666;">
                                <?= substr($item->description, 0, 100) ?>...
                            </p>

                            <!-- Tombol Detail -->
                            <a href="sections/detaile_blog.php?id=<?= $item->id ?>" class="btn btn-primary mt-2 w-100">
                                <i class="bi bi-arrow-right me-2"></i>Detail
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <div class="text-center mt-5">
            <a href="frontend/sections/list_blog.php"
                class="btn btn-primary btn-lg px-5">
                <i class="bi bi-grid-3x3-gap me-2"></i>Selengkapnya
            </a>
        </div>
    </div>
</section>