<?php
$qResume = "SELECT * FROM resumes";
$result_resume = mysqli_query($connect, $qResume) or die(mysqli_error($connect));
// $itemResume = $result_resume->fetch_object();

$qAbouts = "SELECT * FROM abouts";
$result_about = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
$itemAbout = $result_about->fetch_object();

?>
<section id="resume" class="resume section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Dengan latar belakang pendidikan di SMKN 3 Banjar jurusan [Jurusan]. Menguasai dasar-dasar [sebutkan skill teknis]. Siap berkontribusi dengan energi muda dan pola pikir kreatif.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row">
            <!-- Kolom Kiri - Untuk Portret dan Kontak -->
             <div class="col-lg-4 h-100">
                <div class="resume-side" data-aos="fade-right" data-aos-delay="100">
                    <div class="profile-img mb-4 p-4">
                   
                        <h3>Sumarry Saya</h3>
                       <p>
                        Saya adalah siswa PPLG SMKN 3 Banjar yang memiliki kemampuan dasar dalam pemrograman dan pengembangan web, mencakup HTML, CSS, PHP, dan Laravel. Terbiasa mengerjakan proyek sederhana seperti pembuatan website portofolio dan CRUD. Pada periode 2025–2026, saya mengikuti Praktek Kerja Lapangan di PT. Lauwba Techno Indonesia untuk mengasah kemampuan teknis serta memperluas wawasan di dunia industri.
                       </p>
                    </div>
                </div>
            </div> 
            

            <!-- Kolom Kanan - Untuk Pendidikan -->
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <?php while ($itemResume = $result_resume->fetch_object()): ?>
                    <h3 class="resume-title"><?= $itemResume->date ?></h3>
                    <div class="resume-item pb-0">
                        <h4><?= $itemResume->job ?></h4>
                        <p><em><?= $itemResume->description ?></em></p>
                        <ul>
                            <li><?= $itemAbout->name ?></li>
                            <li><?= $itemResume->place ?></li>
                            <li><?= $itemAbout->email ?></li>
                        </ul>
                    </div>
                <?php endwhile; ?>
                <div class="cta-section">
                    <a href="https://drive.google.com/file/d/1UPXHELrzRWsgEb1BoNA80S9yTS8IkCKF/view?usp=drive_link"
                        class="btn btn-outline-primary rounded-pill">
                        <i class="bi bi-download"></i>
                        Download Cv
                    </a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Resume Section -->