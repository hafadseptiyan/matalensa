<!-- css Tabel -->
<style type="text/css">
    td {
        background-color: white;
        color: #2f3640;
        text-align: center;
    }
    th {
        text-align: center;
    }
</style>
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel" style="min-height: 700px">
<div class="x_title">
    
    <h3>Data Peminjaman</h3>
  
    <div class="clearfix"></div>
</div>
<div class="x_content">
<div class="table-responsive">
    <table id="example1" class="table table-striped jambo_table bulk_action">
      
        <thead>
            <tr class="headings">
                <center>
                <th>Status</th>
                <th>Qrcode</th>
                <th>Username</th>
                <th>Email</th>
                <th>Produk</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Total Biaya</th>
                <th style="width:125px;" class="text-center">Action
                </th>
                </center>
         
            </tr>
        </thead>
        <tbody>
                <?php 
            foreach ($data_transaksi as $row) {                  
              ?>
            <tr>
            <td class="col-md-3"><a href="#" style="background-color: #87CB16;color: white" class="btn"><?= $row->status;?></a></td>

            <td class="col-md-3"><img src="<?php echo base_url('assets/user/img/'.$row->qrcode);?>" width="100%"></td>
            <td class="col-md-2"><?= $row->nama;?></td>
            <td class="col-md-2"><?= $row->email;?></td>
            <td class="col-md-4"><?= $row->merk;?></td>
            <td class="col-md-3"><?= $row->tgl_masuk;?></td>
            <td class="col-md-3"><?= $row->tgl_kembali;?></td>
            <td class="col-md-3">Rp.<?= $row->total_biaya;?></td>
            <td class="col-md-1">
               
                <a href="<?php echo site_url('admin/delete_tr/'.$row->id_transaksi); ?>" onclick="return confirm('Apakah anda yakin menghapus data?')"><button type="submit" class="btn btn-danger">
                    <span class="btn-label"><i class="fa fa-trash-o"></i></span><span class="btn-label"></i>Hapus Data</span>
                </button></a>
                <a href="<?php echo site_url('admin/edit_transaksi/'.$row->id_transaksi); ?>"><button type="submit" class="btn btn-warning" style="margin-top: 10px;">
                    <span class="btn-label"><i class="fa fa-pencil"></i></span><span class="btn-label">  Edit Status</i></span>
                </button></a> 
                   <?php
            }
            ?>   
        </tr>
            </td>
        </tbody>
    </table>
</div>
</body>
</html>