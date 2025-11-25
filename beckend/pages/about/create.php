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
                    <h1>Tambah Data About</h1> <!-- Judul halaman -->
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
                            <h3 class="card-title">Form Tambah Data About</h3> <!-- Judul card -->
                        </div>

                        <!-- Body card berisi form -->
                        <div class="card-body">
                            <form action="../../action/about/store.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Input nama -->
                                        <div class="form-group">
                                            <label for="nameInput">Nama</label>
                                            <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan Nama Anda..." required>
                                        </div>

                                        <div class="form-group">
                                            <label for="bornInput">Tanggal Lahir</label>
                                            <input type="date" name="born" id="bornInput" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="zip_codeInput">Kode Pos</label>
                                            <input type="number" name="zip_code" id="zip_codeInput" class="form-control" placeholder="Masukan Kode Post..." required>
                                        </div>

                                        <div class="form-group">
                                            <label for="emailInput">Email</label>
                                            <input type="email" name="email" id="emailInput" class="form-control" placeholder="Masukan Email..." required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phoneInput">No. Telpon</label>
                                            <input type="text" name="phone" id="phoneInput" class="form-control" placeholder="Masukan No Phone..." required>
                                        </div>

                                        <div class="form-group">
                                            <label for="total_projectInput">Total Projek</label>
                                            <input type="text" name="total_project" id="total_projectInput" class="form-control" placeholder="Masukan Total Projek..." required>
                                        </div>

                                        <div class="form-group">
                                            <label for="workInput">Pekerjaan Sekarang</label>
                                            <input type="text" name="work" id="workInput" class="form-control" placeholder="Pekerjaan sekarang" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="descriptionInput" class="form-label">Deskripsi</label>
                                            <textarea name="description" id="descriptionInput" class="form-control" placeholder="Deskripsi...." required></textarea>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="addressInput">Alamat</label>
                                    <textarea name="address" id="addressInput" class="form-control" rows="3" placeholder="Masukan Alamat..." required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="imagesInput" class="form-label">Foto</label>
                                    <input type="file" name="image" class="form-control" id="imageInput" required>
                                </div>

                                <!-- Tombol aksi -->
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