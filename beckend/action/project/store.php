<?php
include '../../app.php';

    if (isset($_POST['tombol'])){
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . ".png";
        $title = escapeString($_POST['title']);
        $job = escapeString($_POST['job']);
        $category = escapeString($_POST['category']);
        $description = escapeString($_POST['description']);

        $storages = "../../../storages/project/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO projects(image, title, job, category, description) 
        VALUES( '$imageNew', '$title', '$job', '$category', '$description')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo "
        <script>
        alert('Data berhasil ditambah');
        window.location.href = '../../pages/project/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambah');
        window.location.href = '../../pages/project/create.php';
        </script>
        ";
    }
    }
?>