<?php 
require_once("_config/config.php");

if (!isset($_SESSION['id'])) {
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simomo</title>

    <link href="<?= base_url('_assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url('_assets/css/simple-sidebar.css');?>" rel="stylesheet">
</head>
<body>
	<script src="<?=base_url('_assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('_assets/js/bootstrap.min.js')?>"></script>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#"><span class="text-primary"><b>Simomo</b></span></a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard')?>">Dashboard</a>
                </li>
                 <li>
                    <a href="<?=base_url('user')?>">User</a>
                </li>
                <li>
                    <a href="<?=base_url('pkh')?>">Perintah Kerja Harian</a>
                </li> 
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="<?=base_url('auth/logout.php')?>"> <span class="text-danger">Keluar</span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
	
</body>
</html>