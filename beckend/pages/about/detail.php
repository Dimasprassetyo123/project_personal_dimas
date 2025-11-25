<?php
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';
include '../../action/about/show.php';
?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Data About</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img src="../../../storages/about/<?= $about->image ?>" 
                                         class="img-fluid rounded-circle mb-3" 
                                         style="width: 200px; height: 200px; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <h3 class="mb-4"><?= $about->name ?></h3>
                                    
                                    <div class="row mb-3">
                                        <div class="col-md-6">

                                             <!-- d/m/y itu format tanggal lahir strtotime() mengubah string tanggal ke timestamp
                                            date() memformat timestamp ke d/m/Y (01/08/2023) -->
                                            <p><tr>Tanggal Lahir:</tr><br><?= date('d/m/Y', strtotime($about->born)) ?></p>
                                            <p><tr>Email:</tr><br><?= $about->email ?></p>
                                            <p><tr>Total Projek:</tr><br><?= $about->total_project ?></p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><tr>Kode Pos:</tr><br><?= $about->zip_code ?></p>
                                            <p><tr>No. Telpon:</tr><br><?= $about->phone ?></p>
                                            <p><tr>Pekerjaan:</tr><br><?= $about->work ?></p>
                                        </div>
                                    </div>
                                    
                                    <p><tr>Alamat:</tr><br><?= nl2br($about->address) ?></p>
                                </div>
                            </div>
                            
                            <div class="text-center mt-4">
                                <a href="index.php" class="btn btn-primary">
                                    <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                                </a>
                            </div>
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