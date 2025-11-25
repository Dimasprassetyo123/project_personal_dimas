<?php
include '../../../config/connection.php';
include '../../../config/escapeString.php';

if(isset($_POST['tombol'])){
    $name = escapeString($_POST['name']);
    $email = escapeString($_POST['email']);
    $subject= escapeString($_POST['subject']);
    $massage = escapeString($_POST['massage']);

        $qInsert = "INSERT INTO contacts(name, email, subject, massage) 
        VALUES('$name', '$email', '$subject', '$massage')";

        // mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
       if (mysqli_query($connect, $qInsert)) {
        echo "
        <script>
            alert('Data berhasil ditambah');
            window.location.href = '../../index.php#contact';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal ditambah : " . mysqli_error($connect) . "');
             window.location.href = '../../index.php#contact';
        </script>
        ";
    }}

?>