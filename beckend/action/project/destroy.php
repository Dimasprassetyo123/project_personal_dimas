<?php
    include '../../app.php';
    include './show.php';

    $storages = "../../storages/project/";

    // hapus data
    $qDelete = "DELETE FROM projects WHERE id = '$project->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

    // cek apakah data berhasil dihapus atau tidak
    if ($result){
        echo"
        <script>
            alert('Data berhasil dihapus');
            window.location.href='../../pages/project/index.php';
        </script>
        ";
        echo"
        <script>
            alert('Data gagal dihapus');
            window.location.href='../../pages/project/index.php';
        </script>
        ";
    }
?>