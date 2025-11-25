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
                    <h1>Tambah Data Blog</h1> <!-- Judul halaman -->
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
                            <h3 class="card-title">Form Tambah Data Blog</h3> <!-- Judul card -->
                        </div>

                        <!-- Body card berisi form -->
                        <div class="card-body">
                            <form action="../../action/project/store.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="imageInput" class="form-label">Pilih Gambar</label>
                                    <input type="file" name="image" class="form-control" id="imageInput" required>
                                </div>

                                <div class="mb-3">
                                    <label for="titleInput" class="form-label">Judul</label>
                                    <input type="text" name="title" class="form-control" id="titleInput" placeholder="Masukan Judul Buku..." required>
                                </div>

                                <div class="mb-3">
                                    <label for=jobInput" class="form-label">Pekerjaan</label>
                                    <input type="text" name="job" class="form-control" id="jobInput" placeholder="Masukan Pekerjaan..." required>
                                </div>

                                <div class="mb-3">
                                    <label for="categoryInput" class="form-label">Kategori</label>
                                    <select id="categoryInput" class="form-select" aria-label="Default" name="category">
                                        <option selected>Pilih Kategori</option>
                                        <option value="multimedia">Multimedia</option>
                                        <option value="prestasi">Prestasi</option>
                                        <option value="programming">Programming</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="descriptionInput" class="form-label">Deskripsi</label>
                                    <textarea name="description" class="form-control" rows="5" required></textarea>
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