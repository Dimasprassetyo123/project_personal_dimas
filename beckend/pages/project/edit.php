<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
?>
<!--content-->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Data</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-purple">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        include '../../action/project/show.php';
                                        ?>
                                        <form action="../../action/project/update.php?id=<?= $project->id ?>" method="POST" enctype="multipart/form-data">

                                            <div class="mb-3">
                                                <img src="../../../storages/project/<?= $project->image ?>" alt="Gambar" width="100px" height="100" class="mb-3">
                                                <input type="file" name="image" class="form-control" id="imageInput" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="titleInput" class="form-label">Judul</label>
                                                <input type="text" name="title" class="form-control" id="titleInput" placeholder="Masukan Judul Buku..." required value="<?= $project->title ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for=jobInput" class="form-label">Pekerjaan</label>
                                                <input type="text" name="job" class="form-control" id="jobInput" placeholder="Masukan Pekerjaan..." required value="<?= $project->job ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="categoryInput" class="form-label">Kategori</label>
                                                <select id="categoryInput" class="form-select" name="category" required>
                                                    <option value="">Pilih Kategori</option>
                                                    <option value="multimedia" <?= $project->category == 'multimedia' ? 'selected' : '' ?>>Multimedia</option>
                                                    <option value="prestasi" <?= $project->category == 'prestasi' ? 'selected' : '' ?>>Prestasi</option>
                                                    <option value="programming" <?= $project->category == 'programming' ? 'selected' : '' ?>>Programming</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="descriptionInput" class="form-label">Deskripsi</label>
                                                <textarea name="description" class="form-control" rows="5" required><?= $project->description ?></textarea>
                                            </div>

                                            <button type="submit" class="btn btn-success" name="tombol"><i class="bi bi-pen-fill"> Edit</i></button>
                                            <a href="./index.php" class="btn btn-primary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>

    <?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
    ?>