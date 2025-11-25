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
                                        include '../../action/blog/show.php';
                                        ?>
                                        <form action="../../action/blog/update.php?id=<?= $blog->id ?>" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <img src="../../../storages/blog/<?= $blog->image ?>" alt="Gambar" width="100px" height="100" class="mb-3">
                                                <input type="file" name="image" class="form-control" id="imageInput" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="dateInput" class="form-label">Tanggal Lahir</label>
                                                <input type="date" name="date" class="form-control" id="dateInput" required value="<?= $blog->date ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="authorInput" class="form-label">Penulis</label>
                                                <input type="text" name="author" class="form-control" id="authorInput" placeholder="Masukan Penulis Buku..." required value="<?= $blog->author ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="tittleInput" class="form-label">Judul</label>
                                                <input type="text" name="tittle" class="form-control" id="tittleInput" placeholder="Masukan Judul Buku..." required value="<?= $blog->tittle ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="descriptionInput" class="form-label">Deskripsi</label>
                                                <textarea name="description" class="form-control" placeholder="Deskripsi...." required><?= htmlspecialchars($blog->description) ?></textarea>
                                            </div>

                                            <div class="d-flex gap-3 mt-4">
                                                <button type="submit" class="btn btn-success" name="tombol"><i class="bi bi-pen-fill"> Edit</i></button>
                                                <a href="index.php" class="btn btn-primary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
                                            </div>
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