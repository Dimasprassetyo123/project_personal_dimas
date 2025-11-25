<?php
//ini patch
include '../../app.php';
include './show.php';

    if(isset($_POST['tombol'])){
    $name = escapeString($_POST['name']);
    $born = escapeString($_POST['born']);
    $address = escapeString($_POST['address']);
    $zip_code = escapeString($_POST['zip_code']);
    $email = escapeString($_POST['email']);
    $phone = escapeString($_POST['phone']);
    $total_project = escapeString($_POST['total_project']);
    $work = escapeString($_POST['work']);

    $imageNew= $about->image;
    $storages = "../../../storages/about/";
     //cek apakah user menguplod gambar baru
     if(!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew= time() . ".png";

        //hapus gambar lama jika ada
        if(!empty($about->image) && file_exists($storages . $about->image)){
            unlink($storages . $about->image);
     }

     //simpan gambar baru
     move_uploaded_file($imageOld, $storages . $imageNew);
    }
// update data sesuai id

    $qUpdate = "UPDATE abouts SET name='$name', born='$born', address='$address',zip_code='$zip_code', email='$email', phone='$phone',
    total_project='$total_project', work='$work', image='$imageNew' WHERE id='$id'";
    

    //update ke databse
    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result){//kirim ke database

        //kalau berhasil kembali ke halamn index
        echo "
        <script>alert('Data Berhasil Diedit'); window.location.href = '../../pages/about/index.php';
        </script>
        ";
        //kalau gagal kembali ke halaman create
        }else{
            echo"
            <script>alert(Data Gagal Diedit); window.location.href = '../../pages/about/create.php';
            </script>
            ";

    }
} 
    ?>