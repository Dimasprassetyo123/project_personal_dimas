<?php
// Pastikan file app.php hanya dimuat sekali (berisi koneksi DB & fungsi umum)
include_once '../../app.php';

// Pastikan file show.php hanya dimuat sekali (ambil data skill berdasarkan ID)
include_once './show.php';

// Cek apakah form dikirim
if (isset($_POST['tombol'])) {

    // Validasi input wajib
    if (!isset($_POST['skill']) || !isset($_POST['percent']) || !isset($_POST['description'])) {
        die("Required fields are missing");
    }

    // Escape input untuk mencegah SQL Injection
    $skill = escapeString($_POST['skill']);
    $percent = intval($_POST['percent']); 
    $description = escapeString($_POST['description']);

    // Validasi range persentase
    if ($percent < 0 || $percent > 100) {
        die("Percentage must be between 0 and 100");
    }

    // Pastikan ID valid (diambil dari show.php)
    if (!isset($id) || !is_numeric($id)) {
        die("Invalid ID");
    }

    // Gunakan prepared statement untuk update data
    $qUpdate = "UPDATE skills SET skill=?, percent=?, description=? WHERE id=?";
    $stmt = mysqli_prepare($connect, $qUpdate);
    
    if ($stmt) {
        // Bind parameter ke query (s = string, i = integer)
        mysqli_stmt_bind_param($stmt, "sisi", $skill, $percent, $description, $id);
        
        // Jalankan query
        $result = mysqli_stmt_execute($stmt);
        
        // Cek hasil eksekusi
        if ($result) {
            echo "
                <script>
                    alert('Data berhasil diubah');
                    window.location.href='../../pages/skill/index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Data gagal diubah: " . mysqli_error($connect) . "');
                    window.location.href='../../pages/skill/update.php?id=$id';
                </script>
            ";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "
            <script>
                alert('Prepared statement failed');
                window.location.href='../../pages/skill/update.php?id=$id';
            </script>
        ";
    }
}
?>
