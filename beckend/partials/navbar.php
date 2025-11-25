<?php
// Ambil nama direktori saat ini untuk menentukan active page
$current_dir = basename(dirname($_SERVER['PHP_SELF']));
$activePage = ($current_dir == 'index') ? 'dashboard' : $current_dir;
?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'dashboard') ? 'active' : '' ?>" href="../dashboard/index.php">
                        <span class="menu-title">Dashboards</span>
                        <i class="mdi mdi-home menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'about') ? 'active' : '' ?>" href="../about/index.php">
                        <span class="menu-title">About</span>
                        <i class="mdi mdi-information-outline menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'blog') ? 'active' : '' ?>" href="../blog/index.php">
                        <span class="menu-title">Blog</span>
                        <i class="mdi mdi-post menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'contact') ? 'active' : '' ?>" href="../contact/index.php">
                        <span class="menu-title">Contact</span>
                        <i class="mdi mdi-email-outline menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'project') ? 'active' : '' ?>" href="../project/index.php">
                        <span class="menu-title">Project</span>
                        <i class="mdi mdi-folder-multiple-outline menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'resume') ? 'active' : '' ?>" href="../resume/index.php">
                        <span class="menu-title">Resume</span>
                        <i class="mdi mdi-file-account menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'service') ? 'active' : '' ?>" href="../service/index.php">
                        <span class="menu-title">Service</span>
                        <i class="mdi mdi-wrench menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'skill') ? 'active' : '' ?>" href="../skill/index.php">
                        <span class="menu-title">Skill</span>
                        <i class="mdi mdi-star-circle menu-icon"></i>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'socmed') ? 'active' : '' ?>" href="../socmed/index.php">
                        <span class="menu-title">Social Media</span>
                        <i class="mdi mdi-share-variant menu-icon"></i>
                    </a>
                </li>
            </ul>
        </nav>
    <style>
    /* Sidebar */
.sidebar {
    background: #fff;
    border-right: 1px solid #eee;
    padding-top: 20px;
}

.sidebar .nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

.sidebar .nav .nav-item {
    margin-bottom: 5px;
}

.sidebar .nav .nav-link {
    display: flex;
    align-items: center;
    padding: 10px 15px;
    border-radius: 6px;
    color: #6c757d;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

.sidebar .nav .nav-link:hover {
    background-color: #f5f5f5;
    color: #000;
}

.sidebar .nav .nav-item .menu-icon {
    font-size: 18px;
    margin-right: 10px;
}

.sidebar .nav .nav-item .menu-title {
    font-size: 14px;
    font-weight: 500;
}

/* Active menu */
.sidebar .nav .nav-item .nav-link.active {
    background-color: #ede7f6; /* Ungu muda */
    border-left: 4px solid #9c27b0; /* Ungu */
    color: #9c27b0;
}

.sidebar .nav .nav-item .nav-link.active .menu-icon {
    color: #9c27b0;
}

</style>