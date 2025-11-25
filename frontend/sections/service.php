<?php
include '../config/connection.php';
$qServices = "SELECT * FROM services";
$result = mysqli_query($connect, $qServices) or die(mysqli_error($connect));
?>

<style>
.services .service-item {
    border-radius: 15px;
    padding: 30px;
    margin-bottom: 30px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.services .service-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
    opacity: 0.9;
    z-index: 1;
}

.services .service-item .icon {
    position: relative;
    z-index: 2;
    margin-bottom: 20px;
}

.services .service-item .icon svg path {
    fill: rgba(255, 255, 255, 0.2);
}

.services .service-item .icon i {
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.services .service-item h3 {
    position: relative;
    z-index: 2;
    color: white;
    margin-bottom: 15px;
    font-weight: 700;
}

.services .service-item p {
    position: relative;
    z-index: 2;
    color: rgba(255, 255, 255, 0.9);
    margin-bottom: 0;
}

.services .service-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
}

/* Warna otomatis untuk card */
.services .service-item:nth-child(1) {
    --primary-color: #4e73df;
    --secondary-color: #6f42c1;
}

.services .service-item:nth-child(2) {
    --primary-color: #1cc88a;
    --secondary-color: #17a673;
}

.services .service-item:nth-child(3) {
    --primary-color: #36b9cc;
    --secondary-color: #2c9faf;
}

.services .service-item:nth-child(4) {
    --primary-color: #f6c23e;
    --secondary-color: #f4b619;
}

.services .service-item:nth-child(5) {
    --primary-color: #e74a3b;
    --secondary-color: #d52a1a;
}

.services .service-item:nth-child(6) {
    --primary-color: #6f42c1;
    --secondary-color: #5a36a9;
}

/* Animasi gradient background */
@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

.services .service-item::before {
    background: linear-gradient(-45deg, var(--primary-color), var(--secondary-color), var(--primary-color));
    background-size: 400% 400%;
    animation: gradientAnimation 15s ease infinite;
}
</style>

<section id="services" class="services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Kami menghadirkan solusi digital yang tepat untuk kebutuhan Anda. Dengan dedikasi tinggi, kami transformasi ide menjadi kenyataan melalui layanan unggulan</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            <?php 
            $counter = 0;
            while ($item = $result->fetch_object()): 
                $counter++;
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $counter * 100 ?>">
                <div class="service-item position-relative" style="--primary-color: <?= getColor($counter, 'primary') ?>; --secondary-color: <?= getColor($counter, 'secondary') ?>;">
                    <div class="icon">
                        <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                        </svg>
                        <i class="<?= $item->icon ?>" style="font-size:2rem"></i> 
                    </div>
                    <a class="stretched-link">
                        <h3><?= $item->job ?></h3>
                    </a>
                </div>          
            </div><!-- End Service Item -->
            <?php endwhile; ?>
        </div>
    </div>
</section><!-- /Services Section -->

<?php
// Fungsi untuk menghasilkan warna otomatis
function getColor($index, $type) {
    $colors = [
        ['primary' => '#03050dff', 'secondary' => '#773ce4ff'],
        ['primary' => '#066472ff', 'secondary' => '#5fc4d1ff'],
        ['primary' => '#a20e00ff', 'secondary' => '#c84c41ff'],
    ];
    
    $colorIndex = ($index - 1) % count($colors);
    return $colors[$colorIndex][$type];
}
?>