<?php
    include '../../app.php';
    include './show.php';

    $storages = "../../storages/destroy/";

    // hapus data
    $qDelete = "DELETE FROM resumes WHERE id = '$resume->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

    // cek apakah data berhasil dihapus atau tidak
    if ($result){
        echo"
        <script>
            alert('Data berhasil dihapus');
            window.location.href='../../pages/resume/index.php';
        </script>
        ";
        echo"
        <script>
            alert('Data gagal dihapus');
            window.location.href='../../pages/resume/index.php';
        </script>
        ";
    }
?>