<h3 class="text-center"> Available Product</h3>
<hr style="width: 25%">
<div class="container">
    <div class="col-md-4">
        <p></p>
    </div>
    <div class="col-md-4">
        <ul class="tabs">
            <center>
                <li class="active" rel="tab1">KAMERA</li>
                <li rel="tab2">DRONE</li>
                <li rel="tab3">AKSESORIS</li>
            </center>
        </ul>
    </div>
    <div class="tab_container">
        <h3 class="d_active tab_drawer_heading" rel="tab1">Available Camera</h3>
        <div id="tab1" class="tab_content">
            <?php foreach($kamera as $row){ ?>
            <div class="col-md-3">
                <div class="boxCam">
                    <center>
                        <a href="<?php echo site_url('user/detail_produk/'.$row->id_produk); ?>"><img style="width: 200px;height: 200px;" src="<?php echo base_url('assets/admin/img/'.$row->gambar);?>"></a><br>
                        <h4> <?= $row->merk ?></h4>
                        <h5 style="background-color: #EAB543;padding: 5px;width: 50%;color: #fff"> <?= $row->harga ?></h5>
                    </center>
                </div>
                <br><br>
            </div>
            <?php }?>
        </div>
        <!-- #tab1 -->
        <h3 class="d_active tab_drawer_heading" rel="tab2">Available Drone</h3>
        <div id="tab2" class="tab_content">
            <?php foreach($drone as $row){ ?>
            <div class="col-md-3">
                <div class="boxCam">
                    <center>
                        <a href="<?php echo site_url('user/detail_produk/'.$row->id_produk); ?>"><img style="width: 200px;height: 200px;" src="<?php echo base_url('assets/admin/img/'.$row->gambar);?>"><br></a>
                        <h4> <?= $row->merk ?></h4>
                        <h5 style="background-color: #EAB543;padding: 5px;width: 50%;color: #fff"> <?= $row->harga ?></h5>
                    </center>
                </div>
                <br><br>
            </div>
            <?php }?>
        </div>
        <!-- #tab1 -->
        <h3 class="d_active tab_drawer_heading" rel="tab4">Available Accessories</h3>
        <div id="tab3" class="tab_content">
            <br>
            <?php foreach($aksesoris as $row){ ?>
            <div class="col-md-3">
                <div class="boxCam">
                    <center>
                        <a href="<?php echo site_url('user/detail_produk/'.$row->id_produk); ?>"><img style="width: 200px;height: 200px;" src="<?php echo base_url('assets/admin/img/'.$row->gambar);?>"></a><br>
                        <h4> <?= $row->merk ?></h4>
                        <h5 style="background-color: #EAB543;padding: 5px;width: 50%;color: #fff"> <?= $row->harga ?></h5>
                    </center>
                </div>
                <br><br>
            </div>
            <?php }?>
        </div>
        <!-- #tab3 -->
    </div>
</div>
</div>