<br><br><br>
<h3 class="text-center">Aksesoris</h3>
<hr style="width: 25%">
<div class="container">
    <?php foreach($aksesoris as $row){ ?>
    <div class="col-md-3">
        <div class="boxCam">
            <center>
                <a href="<?php echo site_url('user/detail_produk/'.$row->id_produk); ?>"><img style="width: 200px;height: 200px;" src="<?php echo base_url('assets/admin/img/'.$row->gambar);?>"><br>
                <h4> <?= $row->merk ?></h4>
                <h5 style="background-color: #EAB543;padding: 5px;width: 50%;color: #fff"> <?= $row->harga ?></h5>
            </center>
        </div>
        <br><br>
    </div>
    <?php }?>
</div>