<?php 
if(!$_SESSION['login']) {
    redirect('/login');
}
// var_dump($_SESSION);die;
?> 


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="<?= BASEURL ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= BASEURL ?>/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="admin <?= (!$_SESSION['role']== 0) ? 'd-none' : '' ?>">
                <div class="sidebar-heading">
                    Admin
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Transaksi Pembayaran</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Fitur</h6>
                            <a class="collapse-item" href="<?= BASEURL ?>/admin/transaksi">Tambah Transaksi</a>
                            <a class="collapse-item" href="cards.html">Generate Laporan</a>
                        </div>
                    </div>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/admin/siswa">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Data Siswa</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/admin/kelas">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Data kelas</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/admin/petugas">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Data petugas</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/admin/pembayaran">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Data pembayaran</span></a>
                </li>
            </div>

            <!-- Divider -->
            
            <!-- Heading -->
            <!-- petugas -->
            <div class="petugas <?= ($_SESSION['role'] == 1) ? '' : 'd-none' ?>">
                <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Petugas
                </div>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Transaksi Pembayaran</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Fitur</h6>
                            <a class="collapse-item" href="<?= BASEURL ?>/admin/transaksi">Tambah Transaksi</a>
                            <a class="collapse-item" href="cards.html">Generate Laporan</a>
                        </div>
                    </div>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/admin/kelas">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Data kelas</span></a>
                </li>
            </div>


            <!-- Divider -->
            
            <hr class="sidebar-divider d-none d-md-block">
            <div class="siswa <?= ($_SESSION['role']== 2) ? '' : 'd-none' ?>">
                <li class="nav-item">
                    <a class="nav-link" href="<?= BASEURL ?>/home/index">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>History Pembayaran</span></a>
                </li>
                
            </div>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= BASEURL ?>/login/logout" onclick="confirm('yakin?')">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">Logout</i>
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->