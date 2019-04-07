<!DOCTYPE html>
<html>
    <head>
        <title>Mata Lensa Admin Login</title>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/admin/css/login.css') ?>">
    </head>
    <body>
        <!--slider area starts-->
        <div id="home"></div>
        <div class="banner-area" id="slider-area">
            <div id="particles-js"></div>
            <div class="banner-table">
                <div class="banner-table-cell">
                    <div class="welcome-text">
                        <div class="container">
                            <div class="row">
                                <br><br><br><br>
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <h4 style="font-size: 42px;color: #fff"><span><img style="width: 36px" src="<?= base_url('assets/admin/img/logo.png') ?>"> <span style="color: #EAB543;">M</span></span>ATA LENSA ADMIN</h4>
                                    <div class="clearfix"></div>
                                    <br><br><br><br>
                                    <div class="card">
                                        <form method="post" action="<?= site_url('login/aksi_login') ?>">
                                        <div class="input-container">
                                            <input name="username" type="text" id="#{label}" required="required" />
                                            <label for="#{label}">Username</label>
                                            <div class="bar"></div>
                                        </div>
                                        <div class="input-container">
                                            <input name="password" type="password" id="#{label}" required="required" />
                                            <label for="#{label}">Password</label>
                                            <div class="bar"></div>
                                        </div>
                                    </div>
                                    <input id="buttonId" type="submit" value="Login" class="button"></a><br><br><br><br><br><br><br><br><br>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--slider area ends-->
        <!--Latest version JQuery-->
        <script src="<?=base_url()?>assets/user/js/jquery-3.2.1.min.js"></script>
        <!--Typed js-->
        <script src="<?=base_url()?>assets/user/js/typed.js"></script>
        <!--particle js-->
        <script src="<?=base_url()?>assets/user/js/particles.js"></script>
        <script src="<?=base_url()?>assets/user/js/app.js"></script>
        <!--Main js-->
        <script src="<?=base_url()?>assets/user/js/main.js"></script>
        <script src="<?=base_url()?>assets/user/js/bootstrap.min.js"></script>
    </body>
</html>