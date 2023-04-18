<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Motor Like</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>public/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url() ?>public/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>public/admin/css/sb-admin.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>public/admin/css/style-admin.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>public/admin/vendor/jquery/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
</head>

<body id="page-top">

<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo base_url() ?>admin">Motor Like</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i> <?php echo $_SESSION['admin_name'] ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/storemotor/dang-xuat.php">Đăng xuất</a>
            </div>
        </li>
    </ul>

</nav>

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>
                    <strong>ADMIN - <?php echo $_SESSION['admin_name'] ?></strong>
                </span>
            </a>
        </li>
         
        <li class="nav-item <?php echo isset($open) && $open == 'product' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo modules("product") ?>">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Sản phẩm</span>
            </a>
        </li>
        
       

        <li class="nav-item <?php echo isset($open) && $open == 'user' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo modules("user") ?>">
                <i class="fa fa-users"></i>
                <span>User</span></a>
        </li>

        <li class="nav-item <?php echo isset($open) && $open == 'transaction' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo modules("transaction") ?>">
                <i class="fa fa-university"></i>
                <span>Quản lý đơn hàng</span></a>
        </li>

        

        <li class="nav-item <?php echo isset($open) && $open == 'contact' ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo modules("contact") ?>">
                <i class="fa fa-address-book"></i>
                <span>Liên hệ</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/ct27502-project-pMy2k2/dang-xuat.php">
                <i class="fas fa-user-circle fa-fw"></i>
                <span>Đăng xuất</span></a>
        </li>
    </ul>
    <div id="content-wrapper">
