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
                    <h1>Tambah Data Resume</h1> <!-- Judul halaman -->
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
                            <h3 class="card-title">Form Tambah Data Resume</h3> <!-- Judul card -->
                        </div>

                        <!-- Body card berisi form -->
                        <div class="card-body">
                            <form action="../../action/resume/store.php" method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="dateInput" class="form-label">Periode</label>
                                    <input type="text" name="date" class="form-control" id="dateInput" required>
                                </div>

                                <div class="mb-3">
                                    <label for="jobInput" class="form-label">Pekerjaan</label>
                                    <input type="text" name="job" class="form-control" id="jobInput" placeholder="Pekerjaan Anda..." required>
                                </div>

                                <div class="mb-3">
                                    <label for="placeInput" class="form-label">Alamat</label>
                                    <input type="text" name="place" class="form-control" id="placeInput" placeholder="Asal Anda..." required>
                                </div>

                                <div class="mb-3">
                                    <label for="descriptionInput" class="form-label">Deskripsi</label>
                                    <textarea name="description" class="form-control" placeholder="Deskripsi...." required></textarea>
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