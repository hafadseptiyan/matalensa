!--navigation area starts-->
<header class="nav-area navbar-fixed-top" style="background-color:#EAB543">
    <div class="container">
        <div class="row">
            <!--main menu starts-->
            <div class="col-md-12">
                <div class="main-menu">
                    <div class="navbar navbar-cus">
                        <div class="navbar-header">
                            <a style="color: #fff" href="<?= site_url('user/') ?>" class="navbar-brand"><i class="fa fa-eye" style="color: #fff"></i> <span style="color: #fff">Mata Lensa</span></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active"><a href="<?= site_url('user/') ?>">Home</a></li>
                                    <li class="active"><a href="<?= site_url('user/kamera') ?>">Kamera</a></li>
                                    <li class="active"><a href="<?= site_url('user/drone') ?>">Drone</a></li>
                                    <li class="active"><a href="<?= site_url('user/aksesoris') ?>">Aksesoris</a></li>
                                    <li class="active"><a href="<?= site_url('user/registrasi') ?>">Daftar Member</a></li>
                                    <li class="active"><a href="#testimonial">Testimoni</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--main menu ends-->
        </div>
    </div>
</header>

<!-- Modal Reg -->
<div class="modal fade" id="myModall" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #EAB543;;color: white">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" style="color: #fff">Daftar Member</h4>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form method="post" action="<?= site_url('user/login') ?>">
                        <div class="input-container">
                            <input name="username" type="text" id="#{label}" required="required" />
                            <label for="#{label}">Username</label>
                            <div class="bar"></div>
                        </div>
                        <div class="input-container">
                            <?php 
                                $id = $this->uri->segment(3);
                                ?>
                            <input name="password" type="password" id="#{label}" required="required" />
                            <input name="id" type="hidden" value="<?php echo $id; ?>" required="required" />
                            <label for="#{label}">Password</label>
                            <div class="bar"></div>
                        </div>
                </div>
                <a href="<?php echo site_url('user/transaksi/'.$id); ?>"><input type="submit" value="Login" class="button"></a><br>
                </form>    
            </div>
            <div class="modal-footer">
                <h5>Belum punya akun, daftar terlebih dahulu. <a href="<?php echo site_url('user/registrasi'); ?>">Daftar <i class="glyphicon glyphicon-log-in"></i></a></h5>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Ends Modal -->
<br><br><br><br><br>
<div class="container">
    <div class="col-md-4 single-right-left ">
        <div class="grid images_3_of_2">
            <div class="flexslider">
                <ul class="slides">
                    <li data-thumb="<?php echo base_url('assets/admin/img/'.$gambar) ?>">
                        <div class="thumb-image"> <img src="<?php echo base_url('assets/admin/img/'.$gambar) ?>" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="<?php echo base_url('assets/admin/img/'.$gambar2) ?>">
                        <div class="thumb-image"> <img src="<?php echo base_url('assets/admin/img/'.$gambar2) ?>" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                    <li data-thumb="<?php echo base_url('assets/admin/img/'.$gambar3) ?>">
                        <div class="thumb-image"> <img src="<?php echo base_url('assets/admin/img/'.$gambar3) ?>" data-imagezoom="true" class="img-responsive"> </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <h4><?= $merk ?></h4>
        <h3 style="color: #EAB543;">Rp. <?= $harga ?></h3>
        <button type="button" class="btn" data-toggle="modal" data-target="#myModall">
        <span class="btn-label"><i class="glyphicon glyphicon-camera"></i></span> Pesan Sekarang<span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
        </button><br><br>
    </div>
    <div class="col-md-8">
        <ul class="tabs">
            <li class="active" rel="tab1">DESKRIPSI</li>
            <li rel="tab2">SPESIFIKASI</li>
        </ul>
        <div class="tab_container">
            <h3 class="d_active tab_drawer_heading" rel="tab1">Tab 1</h3>
            <div id="tab1" class="tab_content">
                <h4>Deskrpisi <?= $merk ?></h4>
                <p><?= $deskripsi ?></p>
            </div>
            <!-- #tab1 -->
            <h3 class="tab_drawer_heading" rel="tab2">Tab 2</h3>
            <div id="tab2" class="tab_content">
                <h4>Spesifikasi <?= $merk ?></h4>
                <p><?= $spesifikasi ?></p>
            </div>
        </div>
    </div>
    <!-- .tab_container -->
</div>
<script src="<?=base_url()?>assets/user/js/jquery.js"></script>
<!--Tab js-->
<script src="<?=base_url()?>assets/user/js/tabsaccordion.js"></script>
<!--image zoom-->
<script src="<?=base_url()?>assets/user/js/imagezoom.js"></script>
<!--flexslider js-->
<script src="<?=base_url()?>assets/user/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->
<!--Bootstrap js-->
<script src="<?=base_url()?>assets/user/js/bootstrap.min.js"></script>  
</body>
</html>