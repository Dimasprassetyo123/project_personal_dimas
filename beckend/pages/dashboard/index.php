<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    echo "<script>
        alert('Anda belum login');
        window.location.href='../user/login.php';
    </script>";
    exit();
}

include '../../partials/header.php';
include '../../partials/sidebar.php';
include '../../partials/navbar.php';

// Get counts for dashboard stats
$totalProjects = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM projects"))['total'];
$totalBlogs = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM blogs"))['total'];
$totalSkills = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(*) as total FROM skills"))['total'];

// $contactsQuery = mysqli_query($connect, "SELECT * FROM contacts ORDER BY created_at DESC LIMIT 5");
?>

<?php $activePage = 'dashboard'; ?>

<!-- Main Content -->
<div class="main-panel">
    <div class="content-wrapper">
        <!-- Page Header dengan icon home yang sejajar -->
        <div class="page-header d-flex align-items-center mb-4">
            <span class="page-title-icon bg-gradient-primary text-white me-3 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 12px;">
                <i class="mdi mdi-home" style="font-size: 1.5rem;"></i>
            </span>
        </div>

        <!-- Welcome Card dengan jarak dan warna yang ditingkatkan -->
        <div class="row justify-content-center mb-5">
            <!-- Card Selamat Datang -->
            <div class="col-md-6 col-lg-5">
                <div class="card border-0 shadow-lg" style="border-radius: 15px; background: linear-gradient(135deg, #4B49AC 0%, #6A67CE 100%);">
                    <div class="card-body text-center py-4">
                        <i class="mdi mdi-home-outline display-1 text-white mb-3"></i>
                        <h1 class="display-5 fw-bold text-white mb-2">SELAMAT DATANG</h1>
                        <p class="fs-4 text-white-50">Di Halaman Dashboard Saya</p>
                    </div>
                </div>
            </div>
            
            <!-- Jam Digital di samping Card Selamat Datang -->
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg" style="border-radius: 15px; background: linear-gradient(135deg, #4B49AC 0%, #6A67CE 100%);">
                    <div class="card-body text-center py-4">
                        <i class="mdi mdi-clock-outline display-1 text-white mb-3"></i>
                        <div id="dashboard-digital-clock" style="font-size: 42px; font-weight: bold; font-family: 'Courier New', monospace; color: white; margin-bottom: 10px;"></div>
                        <div id="dashboard-date-display" style="font-size: 18px; font-weight: 600; font-family: 'Arial', sans-serif; color: rgba(255, 255, 255, 0.9);"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards dengan jarak dan desain yang lebih baik -->
        <div class="row mb-5 g-4">
            <!-- Projects Card -->
            <div class="col-xl-4 col-md-6">
                <div class="card dashboard-card h-100 border-0 shadow-sm" style="border-radius: 12px; border-left: 4px solid #4B49AC;">
                    <div class="card-body position-relative py-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-uppercase text-gray-700 mb-0">Total Project</h6>
                            <i class="mdi mdi-briefcase-check stat-icon text-primary" style="font-size: 1.5rem;"></i>
                        </div>
                        <h2 class="mb-3" style="color: #4B49AC;"><?= $totalProjects ?></h2>
                        <div class="mt-3">
                            <a href="../projects/index.php" class="text-primary text-decoration-none small d-flex align-items-center">
                                Lihat Semua Project <i class="mdi mdi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blogs Card -->
            <div class="col-xl-4 col-md-6">
                <div class="card dashboard-card h-100 border-0 shadow-sm" style="border-radius: 12px; border-left: 4px solid #28a745;">
                    <div class="card-body position-relative py-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-uppercase text-gray-700 mb-0">Total Blog</h6>
                            <i class="mdi mdi-book-open stat-icon text-success" style="font-size: 1.5rem;"></i>
                        </div>
                        <h2 class="mb-3" style="color: #28a745;"><?= $totalBlogs ?></h2>
                        <div class="mt-3">
                            <a href="../blogs/index.php" class="text-success text-decoration-none small d-flex align-items-center">
                                Lihat Semua Blog <i class="mdi mdi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills Card -->
            <div class="col-xl-4 col-md-6">
                <div class="card dashboard-card h-100 border-0 shadow-sm" style="border-radius: 12px; border-left: 4px solid #fd7e14;">
                    <div class="card-body position-relative py-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="text-uppercase text-gray-700 mb-0">Total Skill</h6>
                            <i class="mdi mdi-code-braces stat-icon text-warning" style="font-size: 1.5rem;"></i>
                        </div>
                        <h2 class="mb-3" style="color: #fd7e14;"><?= $totalSkills ?></h2>
                        <div class="mt-3">
                            <a href="../skills/index.php" class="text-warning text-decoration-none small d-flex align-items-center">
                                Lihat Semua Skill <i class="mdi mdi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include '../../partials/footer.php';
        include '../../partials/script.php';
        ?>
        
        <script>
        function updateDashboardDateTime() {
            const now = new Date();
            
            // Format waktu (jam:menit:detik)
            let h = String(now.getHours()).padStart(2, '0');
            let m = String(now.getMinutes()).padStart(2, '0');
            let s = String(now.getSeconds()).padStart(2, '0');
            
            // Update jam di dashboard
            const dashboardClock = document.getElementById("dashboard-digital-clock");
            if (dashboardClock) {
                dashboardClock.textContent = `${h}:${m}:${s}`;
            }
            
            // Format hari, tanggal, dan tahun
            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
            
            const dayName = days[now.getDay()];
            const date = now.getDate();
            const monthName = months[now.getMonth()];
            const year = now.getFullYear();
            
            // Update tanggal di dashboard
            const dashboardDate = document.getElementById("dashboard-date-display");
            if (dashboardDate) {
                dashboardDate.textContent = `${dayName}, ${date} ${monthName} ${year}`;
            }
        }

        // Jalankan fungsi update waktu setiap detik
        setInterval(updateDashboardDateTime, 1000);
        
        // Jalankan fungsi pertama kali saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            updateDashboardDateTime();
        });
        </script>