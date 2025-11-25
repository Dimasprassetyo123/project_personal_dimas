<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $date = escapeString($_POST['date']);
    $author = escapeString($_POST['author']);
    $tittle = escapeString($_POST['tittle']);
    $description = escapeString($_POST['description']);

    $storages = "../../../storages/blog/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO blogs(image, date, author, tittle, description) 
        VALUES( '$imageNew', '$date', '$author', '$tittle', '$description')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo "
        <script>
        alert('Data berhasil ditambah');
        window.location.href = '../../pages/blog/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambah');
        window.location.href = '../../pages/blog/create.php';
        </script>
        ";
    }
}
