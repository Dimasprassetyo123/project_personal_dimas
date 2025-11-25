<!-- Skills Section -->
<?php
include '../config/connection.php';

$qFrontend = "SELECT * FROM skills WHERE id BETWEEN 1 AND 3";
$resultFrontend = mysqli_query($connect, $qFrontend) or die(mysqli_error($connect));

// Ambil data skills Backend
$qBackend = "SELECT * FROM skills WHERE id BETWEEN 4 AND 6";
$resultBackend = mysqli_query($connect, $qBackend) or die(mysqli_error($connect));
?>

<section id="skill" class="skills section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Skill yang sudah saya pelajari dan saya kuasai </p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
            <div class="col-lg-6">
                <?php while ($item = mysqli_fetch_object($resultFrontend)) : ?>
                    <div class="progress mb-4"> <!-- Tambah class mb-4 untuk margin bottom -->
                        <span class="skill">
                            <span><?= $item->skill ?></span>
                            <i class="val"><?= $item->percent ?>%</i>
                        </span>
                        <div class="progress-bar-wrap mt-2"> <!-- Tambah class mt-2 untuk margin top -->
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $item->percent ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $item->percent ?>%">
                            </div>
                            <p class="mt-2 mb-0"><?= $item->description ?></p> <!-- Tambah class mt-2 dan mb-0 -->
                        </div>
                    </div><!-- End Skills Item -->
                <?php endwhile; ?>
            </div>

            <div class="col-lg-6">
                <?php while ($item = mysqli_fetch_object($resultBackend)) : ?>
                    <div class="progress mb-4"> <!-- Tambah class mb-4 untuk margin bottom -->
                        <span class="skill"> 
                            <span><?= $item->skill ?></span>
                            <i class="val"><?= $item->percent ?>%</i>
                        </span>
                        <div class="progress-bar-wrap mt-2"> <!-- Tambah class mt-2 untuk margin top -->
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $item->percent ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $item->percent ?>%">
                            </div>
                            <p class="mt-2 mb-0"><?= $item->description ?></p> <!-- Tambah class mt-2 dan mb-0 -->
                        </div>
                    </div><!-- End Skills Item -->
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section><!-- /Skills Section -->