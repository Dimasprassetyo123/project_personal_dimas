<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    echo "<script>
        alert('Anda belum login');
        window.location.href='../user/login.php';
    </script>";
    exit();
}
// Include file header dan sidebar
include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

// Cek koneksi database
if (!$connect) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query data about
$qSkills = "SELECT * FROM skills";
$result = mysqli_query($connect, $qSkills);

if (!$result) {
    die("Query gagal: " . mysqli_error($connect));
}
?>

<!-- Konten utama -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Skill</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-purple">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="./create.php" class="btn btn-sm btn-info">
                                    <i class="bi bi-plus"></i> Tambah Data
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" style="table-layout: fixed;">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%">No</th>
                                            <th style="width: 15%">Skill</th>
                                            <th style="width: 10%">Persent</th>
                                            <th style="width: 50%">Deskripsi</th>
                                            <th style="width: 20%">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        while ($item = $result->fetch_object()):
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $item->skill ?></td>
                                                <td><?= $item->percent ?>%</td>
                                                <td style="word-wrap: break-word; white-space: normal;"><?= $item->description ?></td>
                                                <td>
                                                    <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning btn-sm"><i class="bi bi-pen-fill"></i> Edit</a>
                                                    <a href="../../action/skill/destroy.php?id=<?= $item->id ?>" class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda Yakin')"><i class="bi bi-trash3-fill"></i> Hapus</a>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++;
                                        endwhile;
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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