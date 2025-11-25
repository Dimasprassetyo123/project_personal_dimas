<?php
include '../../app.php';

    if (isset($_POST['tombol'])){
        $date = escapeString($_POST['date']);
        $job = escapeString($_POST['job']);
        $place = escapeString($_POST['place']);
        $description = escapeString($_POST['description']);

        $qInsert = "INSERT INTO resumes(date, job, place, description) 
        VALUES( '$date', '$job', '$place', '$description')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo "
        <script>
        alert('Data berhasil ditambah');
        window.location.href = '../../pages/resume/index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal ditambah');
        window.location.href = '../../pages/resume/create.php';
        </script>
        ";
    }

?>