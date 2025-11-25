<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

// Ambil data skill berdasarkan ID
include '../../action/skill/show.php';
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
                        <div class="card-body">
                            <form action="../../action/skill/update.php?id=<?= $skill->id ?>" method="POST" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <label for="skillInput" class="form-label">Skill</label>
                                    <input type="text" name="skill" id="skillInput" class="form-control" 
                                           placeholder="Masukkan skil anda..." required 
                                           value="<?= htmlspecialchars($skill->skill) ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="percentInput" class="form-label">Persen</label>
                                    <input type="number" name="percent" min="0" max="100" id="percentInput" 
                                           class="form-control" placeholder="Masukkan persentase..." required 
                                           value="<?= htmlspecialchars($skill->percent) ?>">
                                </div>

                                <div class="mb-3">
                                    <label for="descriptionInput" class="form-label">Deskripsi</label>
                                    <textarea name="description" class="form-control" rows="5" required><?= htmlspecialchars($skill->description) ?></textarea>
                                </div>

                                <div class="d-flex gap-3 mt-4">
                                    <button type="submit" class="btn btn-success" name="tombol">
                                        <i class="bi bi-pen-fill"></i> Edit
                                    </button>
                                    <a href="./index.php" class="btn btn-primary">
                                        <i class="bi bi-box-arrow-left"></i> Kembali
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
include '../../partials/footer.php';
include '../../partials/script.php';
?>
