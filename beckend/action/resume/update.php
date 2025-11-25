<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $date = escapeString($_POST['date']);
    $job = escapeString($_POST['job']);
    $place = escapeString($_POST['place']);
    $description = escapeString($_POST['description']);

    // update data sesuai id
    $qUpdate = "UPDATE resumes SET date='$date', job='$job', place='$place', description='$description' WHERE id='$id'";
    // update ke databases
    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {  // kirim ke databases

        // kalau berhasil muncul komen berikut
        echo "
            <script>
                alert('Data berhasil diubah');
                window.location.href='../../pages/resume/index.php';
            </script>
        ";
    } else {
        // jika tidak muncul komen berikut
        echo "
            <script>
                alert('Data gagal di ubah');
                window.location.href='../../pages/update/create.php';
            </script>
        ";
    }
}
