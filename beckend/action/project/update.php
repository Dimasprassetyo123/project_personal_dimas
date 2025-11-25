<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    // Hanya ambil data yang benar-benar digunakan
    $id = $project->id; // Ambil ID dari data yang sudah ada
    $title = escapeString($_POST['title']);
    $job = escapeString($_POST['job']);
    $category = escapeString($_POST['category']); // Pastikan ini ada di form
    $description = escapeString($_POST['description']); // Pastikan ini ada di form
    
    $imageNew = $project->image;
    $storages = "../../../storages/project/";

    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';
        if (!empty($project->image) && file_exists($storages . $project->image)) {
            unlink($storages . $project->image);
        }
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    // Query update hanya dengan field yang benar-benar ada
    $qUpdate = "UPDATE projects SET title = '$title', job = '$job', category = '$category', description = '$description', image = '$imageNew' WHERE id = '$id'";

    $result = mysqli_query($connect, $qUpdate);

    if ($result) {
        echo "<script>
              alert('Data berhasil diubah');
              window.location.href='../../pages/project/index.php';
              </script>";
    } else {
        echo "<script>
              alert('Error: ".mysqli_error($connect)."');
              window.location.href='../../pages/project/edit.php?id=$id';
              </script>";
    }
}
?>