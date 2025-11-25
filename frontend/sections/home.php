<?php
include '../config/connection.php';

// Query untuk abouts
$qAbouts = "SELECT * FROM abouts";
$result_abouts = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));

// Query untuk socmeds 
$qSocmed = "SELECT * FROM socmeds"; 
$result_socmed = mysqli_query($connect, $qSocmed) or die(mysqli_error($connect));

// Ambil data about pertama
$about = $result_abouts->fetch_object();
?>

<section id="hero" class="hero section light-background" style="position: relative;">
    <?php if ($about): ?>
        <img src="../storages/about/<?= $about->image ?>" alt="<?= $about->name ?>">

        <div class="container" data-aos="zoom-out">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <h2><?= $about->name ?></h2>
                    <p>Saya adalah <span class="typed" data-typed-items="Programmer, Web Developer, Frontend Development, Backend Development, Designer"></span></p>

                    <div class="d-flex justify-content-start align-items-center gap-3 flex-wrap mt-2">
                        <?php while ($s = $result_socmed->fetch_object()): ?>
                            <a href="<?= $s->link ?>" target="_blank" class="text-decoration-none">
                                <i class="bi bi-<?= strtolower($s->icon) ?> fs-3 text-black"></i>
                            </a>
                        <?php endwhile; ?>

                       <a href="#about" class="btn btn-outline-primary rounded-pill px-4 py-2">Tentang Saya</a>
                       <a href="#contact" class="btn btn-outline-primary rounded-pill px-4 py-2">Kirim Pesan</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jam Digital dan Tanggal (di Home) -->
        <div id="clock-container">
            <div id="digital-clock"></div>
            <div id="date-display"></div>
        </div>
    <?php endif; ?>
</section><!-- /Hero Section -->

<style>
#clock-container {
    position: absolute;
    right: 40px;   /* Jarak dari kanan */
    bottom: 40px;  /* Jarak dari bawah */
    text-align: center;
    z-index: 10;
}

#digital-clock {
    font-size: 70px;
    font-weight: bold;
    font-family: 'Courier New', monospace;
    color: #007bff;
    text-shadow: 0 0 10px rgba(0, 123, 255, 0.9),
                 0 0 20px rgba(0, 123, 255, 0.7),
                 0 0 30px rgba(0, 123, 255, 0.5);
    margin-bottom: 5px;
}

#date-display {
    font-size: 18px;
    font-weight: 600;
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: rgba(255, 255, 255, 0.8);
    padding: 5px 15px;
    border-radius: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>

<script>
function updateDateTime() {
    const now = new Date();
    
    // Format waktu (jam:menit:detik)
    let h = String(now.getHours()).padStart(2, '0');
    let m = String(now.getMinutes()).padStart(2, '0');
    let s = String(now.getSeconds()).padStart(2, '0');
    document.getElementById("digital-clock").textContent = `${h}:${m}:${s}`;
    
    // Format hari, tanggal, dan tahun
    const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                    'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    
    const dayName = days[now.getDay()];
    const date = now.getDate();
    const monthName = months[now.getMonth()];
    const year = now.getFullYear();
    
    document.getElementById("date-display").textContent = `${dayName}, ${date} ${monthName} ${year}`;
}

setInterval(updateDateTime, 1000);
updateDateTime();
</script>