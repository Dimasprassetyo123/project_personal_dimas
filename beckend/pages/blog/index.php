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
$qBlogs = "SELECT * FROM blogs";
$result = mysqli_query($connect, $qBlogs);

if (!$result) {
    die("Query gagal: " . mysqli_error($connect));
}
?>

<!-- Konten utama -->
<div class="content-wrapper" style="min-height: calc(100vh - 200px);">
    <div class="card-body">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Dinas Prasetyo - Personal Profile</h5>
            <div class="card-tools">
                <a href="./create.php" class="btn btn-sm btn-info">
                    <i class="bi bi-plus"></i> Tambah Data
                </a>
            </div>
        </div>
        <div class="table-responsive mt-3" style="max-height: 500px; overflow-y: auto;">
            <table id="aboutTable" class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Tanggal</th>
                        <th>Penulis</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php $no = 1;
                        while ($item = mysqli_fetch_object($result)): ?>
                            <tr>
                                <td class="text-center"><?= $no ?></td>
                                <td class="text-center">
                                    <?php if (!empty($item->image)): ?>
                                        <img src="../../../storages/blog/<?= $item->image ?>"
                                            class="img-thumbnail"
                                            style="width: 80px; height: 80px; object-fit: cover;">
                                    <?php else: ?>
                                        <span class="text-muted">Tidak ada gambar</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-center"><?= htmlspecialchars($item->date) ?></td>
                                <td><?= htmlspecialchars($item->author) ?></td>
                                <td><?= htmlspecialchars($item->tittle) ?></td>
                                <td style="white-space: pre-line;"><?= htmlspecialchars($item->description) ?></td>
                                <td class="text-center">
                                    <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pen-fill"></i> Edit
                                    </a>
                                    <a href="../../action/blog/destroy.php?id=<?= $item->id ?>"
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
<?php
// Include footer dan script
include '../../partials/footer.php';
include '../../partials/script.php';
?>