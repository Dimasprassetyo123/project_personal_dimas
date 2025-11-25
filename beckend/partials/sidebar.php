<?php
$qAbouts = "SELECT * FROM abouts";
$result = mysqli_query($connect, $qAbouts) or die(mysqli_error($connect));
$item = $result->fetch_object();
?>

<nav class="navbar default-layout-navbar p-0">
    <div class="d-flex w-100">
        <!-- Profile Section aligned with purple background -->
        <div class="nav-profile" style="padding: 15px 25px;">
            <div class="d-flex align-items-center">
                <div class="position-relative mr-3">
                    <img src="../../../storages/about/<?= $item->image ?>" alt="profile" 
                         class="rounded-circle border me-2" width="45" height="45">
                </div>
                <div class="d-flex flex-column text-dark">
                    <span class="font-weight-bold">Dimas Prassetyo</span>
                    <span class="small">Personal Profile</span>
                </div>
            </div>
        </div>

        <!-- Rest of the navbar remains unchanged -->
        <div class="d-flex align-items-center justify-content-between flex-grow-1">
            <div class="d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                </button>

                <div class="flex-grow-1 d-none d-md-block"></div>
            </div>

            <nav class="navbar navbar-expand-lg">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row align-items-center">
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="../../../storages/about/<?= $item->image ?>" alt="" width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">Admin</p>
                                    </a>
                                    <a href="../../action/auth/logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</nav>