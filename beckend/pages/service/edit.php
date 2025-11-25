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
                                        include '../../action/service/show.php';
                                        ?>
                                        <form action="../../action/service/update.php?id=<?= $service->id ?>" method="POST" enctype="multipart/form-data">

                                            <div class="mb-3">
                                                <label for="iconInput" class="form-label">Icon</label>
                                                <input type="text" name="icon" class="form-control" id="serviceInput" placeholder="Masukan service Anda..." required value="<?= $service->icon ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="jobInput" class="form-label">Pekerjaan</label>
                                                <input type="text" name="job" min="0" max="100" class="form-control" id="jobInput" placeholder="Pekerjaan Anda..." required value="<?= $service->job ?>">
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