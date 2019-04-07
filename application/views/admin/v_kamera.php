<!--css Tabel -->
<style type="text/css">
    td {
        background-color: white;
        color: #2f3640;
        text-align: justify;
    }
</style>

<!-- Tabel -->
<div class="col-md-12 col-sm-12 col-xs-12">  
    <h3 class="text-center">Data Kamera</h3><hr>
</div>
<div class="table-responsive">
    <table id="example1" class="table table-striped jambo_table bulk_action">
      
        <thead>
            <tr class="headings">
                <th class="text-center">Merk Kamera</th>
                <th class="text-center">Spesifikasi</th>
                <th class="text-center">Deskrpsi</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Image</th>
                <th style="width:125px;" class="text-center">Action
                </th>
         
            </tr>
        </thead>
     
        <tbody>
        <?php 
            foreach ($data_produk as $row) {                  
              ?>
        <tr>
            <td class="col-md-2 text-center"><?= $row->merk;?></td>
            <td class="col-md-3"><?= $row->spesifikasi;?></td>
            <td class="col-md-3"><?= $row->deskripsi;?></td>
            <td class="col-md-2 text-center">Rp.<?= $row->harga;?></td>
            <td class="col-md-2"><img src="<?php echo base_url('assets/admin/img/'.$row->gambar);?>" width="100%" class="img-responsive thumbnail"></td>
            
            <td class="col-md-1 text-center">
                <a href="<?php echo site_url('admin/edit/'.$row->id_produk); ?>"><button type="submit" class="btn btn-primary" style="margin-top: 10px;">
                    <span class="btn-label"><i class="fa fa-pencil"></i></span><span class="btn-label"></i></span>
                </button></a> 
                 <a style="margin-top: 10px;" href="<?php echo site_url('admin/delete/'.$row->id_produk); ?>"  onclick="return confirm('Apakah anda yakin menghapus data?')"><button style="margin-top: 10px;" type="submit" class="btn btn-danger" >
                    <span class="btn-label"><i class="fa fa-trash-o"></i></span><span class="btn-label"></i></span>
                </button></a>
              
            </td>
        </tr>
        <?php
            }
            ?>
        </tbody>
         
    </table>
</div>
</body>
</html>