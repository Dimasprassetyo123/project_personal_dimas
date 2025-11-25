<?php
// Include header dan sidebar
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>

<!-- Konten utama -->
<div class="content-wrapper">
    <!-- Header halaman -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Data Sosmed</h1> <!-- Judul halaman -->
                </div>
            </div>
        </div>
    </section>

    <!-- Form input data -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-purple"> <!-- Card dengan warna tema ungu -->
                        <div class="card-header">
                            <h3 class="card-title">Form Tambah Data Sosmed</h3> <!-- Judul card -->
                        </div>

                        <!-- Body card berisi form -->
                        <div class="card-body">
                            <form action="../../action/socmed/store.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="iconInput" class="form-label">Icon</label>
                                    <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon social media..." required>
                                </div>
                                <div class="mb-3">
                                    <label for="linkInput" class="form-label">Link</label>
                                    <input type="text" name="link" id="linkInput" class="form-control" placeholder="Masukkan link social media..." required>
                                </div>
                                <button type="submit" class="btn btn-primary" name="tombol"><i class="bi bi-arrow-down-circle-fill"> Simpan</i></button>
                                <a href="./index.php" class="btn btn-secondary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    // Include footer dan script
    include '../../partials/footer.php';
    include '../../partials/script.php';
    ?>