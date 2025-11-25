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
                                        include '../../action/about/show.php';
                                        ?>
                                        <form action="../../action/about/update.php?id=<?= $about->id ?>" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="nameInput" class="form-label">Nama</label>
                                                <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan Nama Anda..."
                                                    required value="<?= $about->name ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="bornInput" class="form-label">Tenggal Lahir</label>
                                                <input type="date" name="born" class="form-control" id="bornInput" required
                                                    value="<?= $about->born ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="zip_codeInput" class="form-label">Kode Post</label>
                                                <input type="number" name="zip_code" class="form-control" id="zip_codeInput" placeholder="Masukan Kode Post...." required value="<?= $about->zip_code ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="emailInput" class="form-label">Email</label>
                                                <input type="email" name="email" class="form-control" id="emaiInput" placeholder="Masukan Email...." required value="<?= $about->email ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="phoneInput" class="form-label">No.Telpon</label>
                                                <input type="text" name="phone" class="form-control" id="phoneInput" placeholder="Masukan No Phone...." required value="<?= $about->phone ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for=total_projectInput" class="form-label">Total Projek</label>
                                                <input type="text" name="total_project" class="form-control" id="total_projectInput" placeholder="Masukan Total Projek...." required value="<?= $about->total_project ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="workInput" class="form-label">Pekerjaan Sekarang</label>
                                                <input type="text" name="work" class="form-control" id="workInput" placeholder="Masukan Total Projek...." required value="<?= $about->work ?>">
                                            </div>

                                            <div class="mb-3">
                                                <label for="addressInput" class="form-label">Alamat</label>
                                                <textarea name="address" class="form-control" placeholder="Masukan Alamat...." rows="5"><?= $about->address ?></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="descriptionInput" class="form-label">Deskripsi</label>
                                                <textarea name="description" class="form-control" placeholder="Deskripsi...." rows="5"><?= $about->description ?></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <img src="../../../storages/about/<?= $about->image ?>" alt="Gambar" width="100px" height="100" class="mb-3">
                                                <input type="file" name="image" class="form-control" id="imageInput">
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