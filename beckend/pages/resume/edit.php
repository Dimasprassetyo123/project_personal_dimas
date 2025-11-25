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
                                        include '../../action/resume/show.php';
                                        ?>
                                        <form action="../../action/resume/update.php?id=<?= $resume->id ?>" method="POST" enctype="multipart/form-data">

                                            <div class="mb-3">
                                                <label for="dateInput" class="form-label">Periode</label>
                                                <input type="text" name="date" class="form-control" id="dateInput" required value="<?= $resume->date ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="jobInput" class="form-label">Pekerjaan</label>
                                                <input type="text" name="job" min="0" max="100" class="form-control" id="jobInput" placeholder="Pekerjaan Anda..." required value="<?= $resume->job ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="placeInput" class="form-label">Alamat</label>
                                                <input type="text" name="place" class="form-control" id="placeInput" placeholder="Asal Anda..." required value="<?= $resume->place ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="descriptionInput" class="form-label">Deskripsi</label>
                                                <textarea name="description" class="form-control" placeholder="Deskripsi...." required><?= htmlspecialchars($resume->description) ?></textarea>
                                            </div>

                                            <div class="d-flex gap-3 mt-4">
                                                <button type="submit" class="btn btn-success" name="tombol"><i class="bi bi-pen-fill"> Edit</i></button>
                                                <a href="./index.php" class="btn btn-primary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
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