<?php
include "../../partials/header.php";
include "../../partials/sidebar.php";
include "../../partials/navbar.php";

$qcontacts = "SELECT * FROM contacts";
$result = mysqli_query($connect, $qcontacts) or die(mysqli_error($connect));
?>

<!-- Add some top margin to create space -->
<div class="container-fluid mt-4"> <!-- Added mt-4 for margin top -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between bg-primary text-white"> <!-- Added bg color -->
                    <h5 class="mb-0">Tabel Contact</h5> <!-- Added mb-0 -->
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered m-0">
                            <thead class="thead-light"> <!-- Added thead-light -->
                                <tr>
                                    <th class="align-middle">No</th>
                                    <th class="align-middle">Nama</th>
                                    <th class="align-middle">Email</th>
                                    <th class="align-middle">Subjek</th>
                                    <th class="align-middle">Pesan</th>
                                    <th class="align-middle">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($item = $result->fetch_object()):
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $item->name ?></td>
                                        <td><?= $item->email ?></td>
                                        <td><?= $item->subject ?></td>
                                        <td><?= $item->massage ?></td>
                                        <td>
                                            <a href="../../action/contact/destroy.php?id=<?= $item->id ?>" class="btn btn-danger"
                                                oneclick="return confirm ('Apakah anda yakin?')">Hapus</a>
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


    <!-- Add some bottom margin before footer -->
    <div class="mb-5"></div> <!-- Added space before footer -->

    <?php
    include "../../partials/script.php";
    include "../../partials/footer.php";
    ?>