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
$qServices = "SELECT * FROM services";
$result = mysqli_query($connect, $qServices);

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
                    <h1>Data Service</h1>
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
                            <div class="tabel-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Ikon</th>
                                            <th>Pekerjaan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        while ($item = $result->fetch_object()):
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td>
                                                    <i class="<?= $item->icon ?>" style="font-size:2rem"></i>
                                                </td>
                                                <td><?= $item->job ?></td>
                                                <td>
                                                    <a href="./edit.php?id=<?= $item->id ?>" class="btn btn-warning"><i class="bi bi-pen-fill"> Edit</i></a>
                                                    <a href="../../action/service/destroy.php?id=<?= $item->id ?>" class="btn btn-danger"
                                                        onclick="return confirm('Apakah Anda Yakin')"><i class="bi bi-trash3-fill"> Hapus</i></a>
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