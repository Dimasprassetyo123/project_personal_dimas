<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $imageNew = $blog->image;
    $date = escapeString($_POST['date']);
    $author = escapeString($_POST['author']);
    $tittle = escapeString($_POST['tittle']);
    $description = escapeString($_POST['description']);

    $storages = "../../../storages/blog/";

    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';


        if (!empty($blog->image) && file_exists($storages . $blog->image)) {
            unlink($storages . $blog->image);
        }
        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }
    // update data sesuai id
    $qUpdate = "UPDATE blogs SET image='$imageNew', date='$date', author='$author', tittle='$tittle', description='$description'
     WHERE id='$id'";
    // update ke databases
    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {  // kirim ke databases

        // kalau berhasil muncul komen berikut
        echo "
            <script>
                alert('Data berhasil diubah');
                window.location.href='../../pages/blog/index.php';
            </script>
        ";
    } else {
        // jika tidak muncul komen berikut
        echo "
            <script>
                alert('Data gagal di ubah');
                window.location.href='../../pages/blog/create.php';
            </script>
        ";
    }
}
