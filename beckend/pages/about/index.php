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
$qAbouts = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbouts);

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
                    <h1>Data About</h1>
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
                            <table id="aboutTable" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Email</th>
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
                                                        <img src="../../../storages/about/<?= $item->image ?>"
                                                            class="img-thumbnail"
                                                            style="width: 80px; height: 80px; object-fit: cover;">
                                                    <?php else: ?>
                                                        <span class="text-muted">Tidak ada gambar</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td><?= $item->name ?></td>
                                                <td><?= $item->born ?></td>
                                                <td><?= $item->email ?></td>

                                                <td class="text-center">
                                                    <div class="btn-group-sm"> <!-- Tambahkan btn-group-sm di sini -->
                                                        <a href="./detail.php?id=<?= $item->id ?>" class="btn btn-success btn-xs">
                                                            <i class="bi bi-search"></i> Detail
                                                        </a>
                                                        <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning btn-xs">
                                                            <i class="bi bi-pen-fill"></i> Edit
                                                        </a>
                                                        <a href="../../action/about/destroy.php?id=<?= $item->id ?>"
                                                            class="btn btn-danger btn-xs"
                                                            onclick="return confirm('Apakah Anda Yakin')">
                                                            <i class="bi bi-trash3-fill"></i> Hapus
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php $no++;
                                        endwhile; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="6" class="text-center">Tidak ada data</td>
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