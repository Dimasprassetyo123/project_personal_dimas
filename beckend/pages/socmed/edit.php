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
                                        include '../../action/socmed/show.php';
                                        ?>
                                        <form action="../../action/socmed/update.php?id=<?= $socmed->id ?>" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="iconInput" class="form-label">Icon</label>
                                                <input type="text" name="icon" id="iconInput" class="form-control" placeholder="Masukkan icon social media..." required value="<?= $socmed->icon ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="linkInput" class="form-label">Link</label>
                                                <input type="text" name="link" id="linkInput" class="form-control" placeholder="Masukkan link social media..." required value="<?= $socmed->link ?>">
                                            </div>
                                            <button type="submit" class="btn btn-warning" name="tombol"><i class="bi bi-pen-fill"> Edit</i></button>
                                            <a href="./index.php" class="btn btn-secondary"><i class="bi bi-box-arrow-left"> Kembali</i></a>
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