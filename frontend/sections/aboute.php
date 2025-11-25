    <?php
    include '../config/connection.php';

    $qAbouts = "SELECT * FROM abouts";
    $result = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
    $item = $result->fetch_object();
    ?>

    <section id="about" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About</h2>
            <p>Halo! Saya Dimas, seorang pelajar SMKN 3 BANJAR yang bersemangat dalam pengembangan web. Saya menikmati proses belajar dan berusaha menerapkan keterampilan coding saya dalam proyek-proyek keci.</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4">
                    <img src="../storages/about/<?= $item->image ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 content">
                    <h2>Pelajar &amp; Web Developer.</h2>
                    <p class="fst-italic py-3">
                        Data diri saya :
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span><?= $item->name ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Pekerjaan:</strong> <span><?= $item->work ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?= $item->email ?></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span><?= $item->born ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?= $item->phone ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span><?= $item->address ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <p class="py-3">
                        Halo! Saya Dimas, seorang pelajar dari SMK Negeri 3 Banjar. Sebagai siswa jurusan PPLG.
                        Saat ini, saya fokus mendalami pembuatan aplikasi web yang interaktif dan selalu antusias untuk terus belajar hal-hal baru. 
                        Saya percaya bahwa teknologi bisa membawa banyak perubahan positif, dan saya ingin menjadi bagian dari perubahan itu.
                    </p>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->
    <section id="stats" class="stats section pt-3"> <!-- pt-3 untuk naik sedikit -->
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="stats-container text-center">
                        <div class="row gy-3 justify-content-center"> <!-- gy-3 untuk gap lebih kecil -->

                            <!-- Item 1 -->
                        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                            <div class="stats-item p-3">
                                <i class="bi bi-images mb-2"></i>
                                <span data-purecounter-start="0"
                                    data-purecounter-end="<?= mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM projects"))['total'] ?>"
                                    data-purecounter-duration="1"
                                    class="purecounter d-block mb-1">
                                </span>
                                <p class="mb-0 small">Total Projek</p>
                            </div>
                        </div>


                        <!-- Item 2 -->
                        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                            <div class="stats-item p-3">
                                <i class="bi bi-journal-text mb-2"></i>
                                <span data-purecounter-start="0" 
                                      data-purecounter-end="<?= mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM blogs"))['total'] ?>"
                                      data-purecounter-duration="1" 
                                      class="purecounter d-block mb-1">
                                </span>
                                <p class="mb-0 small">Total Blog</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
                            <div class="stats-item p-3">
                                <i class="bi bi-code-square mb-2"></i>
                                <span data-purecounter-start="0" 
                                      data-purecounter-end="<?= mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM skills"))['total'] ?>"
                                      data-purecounter-duration="1" 
                                      class="purecounter d-block mb-1">
                                </span>
                                <p class="mb-0 small">Total Skill</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>