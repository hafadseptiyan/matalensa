<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?= base_url()?>assets/admin/img/logo.png">

    <title>Mata Lensa</title>
    
    <link rel="stylesheet" href="<?=base_url()?>assets/user/fonts/css/font-awesome.min.css">
    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="<?= base_url() ?>assets/admin/css/animate.min.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>assets/admin/upload/css/bootstrap-fileupload.css" rel="stylesheet"/>
 <!-- Bootstrap core CSS     -->
    <link href="<?= base_url() ?>assets/admin/datatable/dataTables.bootstrap.css" rel="stylesheet" />
    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?= base_url() ?>assets/admin/css/light-bootstrap-dashboard.css" rel="stylesheet"/>
    <link href="<?= base_url() ?>assets/admin/css/box.css" rel="stylesheet"/>

    <link href="<?= base_url() ?>assets/admin/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="<?= base_url() ?>assets/admin/img/tes.jpg">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Mata Lensa
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?php echo site_url('admin/') ?>">
                        <i class="fa fa-dashboard"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/peminjam') ?>">
                        <i class="fa fa-user"></i>
                        <p>Data Member</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/input') ?>">
                        <i class="fa fa-pencil"></i>
                        <p>Input Produk</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/produk') ?>">
                        <i class="fa fa-table"></i>
                        <p>Data Produk</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/kamera') ?>">
                        <i class="fa fa-camera"></i>
                        <p>Kategori Kamera</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/aksesoris') ?>">
                        <i class="fa"><img style="width: 30px" src="<?= base_url('assets/admin/img/lens.png') ?>"></i>
                        <p>Kategori Aksesoris</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/drone') ?>">
                        <i class="fa"><img style="width: 35px" src="<?= base_url('assets/admin/img/dr.png') ?>"></i>
                        <p>Kategori Drone</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/transaksi') ?>">
                        <i class="fa fa-list"></i>
                        <p>Data Peminjaman</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="<?php echo site_url('admin/pengembalian') ?>">
                        <i class="fa fa-check"></i>
                        <p>Data Pengembalian</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                  

                    <ul class="nav navbar-nav navbar-right">
                       
                        <li>
                            <a href="<?php echo site_url('login/logout') ?>">
                                Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                          
                                <?php $this->load->view($main_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>            


</body>

    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/admin/js/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/admin/js/bootstrap.min.js" type="text/javascript"></script>

    <!--   Datatable JS Files   -->
    <script src="<?= base_url() ?>assets/admin/datatable/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/admin/datatable/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/admin/upload/js/bootstrap-fileupload.js" type="text/javascript"></script>
 

    <!--  Notifications Plugin    -->
    <script src="<?= base_url() ?>assets/admin/js/bootstrap-notify.js"></script>
    <script src="<?= base_url() ?>assets/admin/js/bootstrap-filestyle.min.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="<?= base_url() ?>assets/admin/js/light-bootstrap-dashboard.js"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

        });
    </script>

</html>
