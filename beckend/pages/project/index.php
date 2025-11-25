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

// Query data project
$qProjects = "SELECT * FROM projects";
$result = mysqli_query($connect, $qProjects);

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
                    <h1>Data Project</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-purple">
                        <div class=" d-flex justify-content-between align-items-center">
                            <a href="./create.php" class="btn btn-sm btn-info mt-3 mx-3">
                                <i class="bi bi-plus"></i> Tambah Data
                            </a>
                        </div>

                        <div class="table-responsive mt-3">
                            <table id="aboutTable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Judul</th>
                                        <th>Pekerjaan</th>
                                        <th>Description</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (mysqli_num_rows($result) > 0): ?>
                                        <?php $no = 1;
                                        while ($item = mysqli_fetch_object($result)): ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td class="text-center">
                                                    <?php if (!empty($item->image)): ?>
                                                        <img src="../../../storages/project/<?= $item->image ?>"
                                                            class="img-thumbnail"
                                                            style="width: 80px; height: 80px; object-fit: cover;">
                                                    <?php else: ?>
                                                        <span class="text-muted">Tidak ada gambar</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?= htmlspecialchars($item->title) ?></td>
                                                <td><?= htmlspecialchars($item->job) ?></td>
                                                <td>
                                                    <div style="white-space: normal; word-wrap: break-word; max-width: 300px;">
                                                        <?= nl2br(htmlspecialchars($item->description)) ?>
                                                    </div>
                                                </td>
                                                <td><?= htmlspecialchars($item->category) ?></td>
                                                <td>
                                                    <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning btn-sm">
                                                        <i class="bi bi-pen-fill"></i> Edit
                                                    </a>
                                                    <a href="../../action/project/destroy.php?id=<?= $item->id ?>"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda Yakin?')">
                                                        <i class="bi bi-trash3-fill"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
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