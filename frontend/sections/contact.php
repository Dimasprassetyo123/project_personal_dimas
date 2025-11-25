<?php
include '../config/connection.php';

$qContact = "SELECT * FROM contacts";
$result_contact = mysqli_query($connect, $qContact) or die(mysqli_error($connect));
$qAbouts = "SELECT * FROM abouts";
$result_about = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
$itemAbout = $result_about->fetch_object();

?>
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Punya pertanyaan atau ingin bekerja sama? Tinggalkan pesan, dan saya akan menghubungi Anda segera!</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade" data-aos-delay="100">

        <div class="row gy-4">

            <div class="col-lg-4">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Alamat</h3>
                        <p><?= $itemAbout->address ?></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>No Hendphone</h3>
                        <p><?= $itemAbout->phone ?></p>
                    </div>
                </div><!-- End Info Item -->

                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email</h3>
                        <p><?= $itemAbout->email ?></p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="col-lg-8">
                <form action="action/contact/create_contact.php" method="post" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Masukan Nama" required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Masukan Email" required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="massage" rows="6" placeholder="Pesan" required=""></textarea>
                        </div>
                        <div class="php-email-form">
                        <div class="col-md-12 text-center">
                            <button type="submit" name="tombol">Kirim Pesan</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->