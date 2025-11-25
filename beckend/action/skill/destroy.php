<?php
    include '../../app.php';
    include './show.php';

    $storages = "../../storages/destroy/";

    // hapus data
    $qDelete = "DELETE FROM skills WHERE id = '$skill->id'";
    $result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

    // cek apakah data berhasil dihapus atau tidak
    if ($result){
        echo"
        <script>
            alert('Data berhasil dihapus');
            window.location.href='../../pages/skill/index.php';
        </script>
        ";
        echo"
        <script>
            alert('Data gagal dihapus');
            window.location.href='../../pages/skill/index.php';
        </script>
        ";
    }
?>