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
                            <form action="../../action/blog/store.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="imageInput" class="form-label">Pilih Gambar</label>
                                    <input type="file" name="image" class="form-control" id="imageInput" required>
                                </div>

                                <div class="mb-3">
                                    <label for="dateInput" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="date" class="form-control" id="dateInput" required>
                                </div>

                                <div class="mb-3">
                                    <label for="authorInput" class="form-label">Penulis</label>
                                    <input type="text" name="author" class="form-control" id="authorInput" placeholder="Masukan Penulis Buku..." required>
                                </div>

                                <div class="mb-3">
                                    <label for="tittleInput" class="form-label">Judul</label>
                                    <input type="text" name="tittle" class="form-control" id="tittleInput" placeholder="Masukan Judul Buku..." required>
                                </div>

                                <div class="mb-3">
                                    <label for="descriptionInput" class="form-label">Deskripsi</label>
                                    <textarea name="description" class="form-control" placeholder="Deskripsi...." required></textarea>
                                </div>

                                <!-- tombol aksi -->
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-info" name="tombol">
                                        <i class="fas fa-save"></i> Simpan
                                    </button>
                                    <a href="./index.php" class="btn btn-secondary">
                                        <i class="fas fa-arrow-left"></i> Kembali
                                    </a>
                                </div>
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