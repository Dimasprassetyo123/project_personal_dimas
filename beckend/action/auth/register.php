<?php
include '../../app.php';

// Mengecek apakah form dikirim dengan method POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Membersihkan input dan hashing password
    $username = htmlentities($_POST['username']); // Tetap pakai username di form tapi disimpan ke name
    $email = htmlentities($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $hashPassword = password_hash($password, PASSWORD_DEFAULT);

    // simpan data pengguna baru
    $insertQuery = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashPassword')";
    if (mysqli_query($connect, $insertQuery)) {
        echo "<script>
                alert('Registrasi berhasil');
                window.location.href='../../pages/user/login.php';
            </script>";
    } else {
        echo "<script>
                alert('Gagal register');
                window.location.href='../../pages/user/register.php';
            </script>";
    }

}