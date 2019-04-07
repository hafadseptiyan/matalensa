<!-- css Tabel -->
<style type="text/css">
    td {
        background-color: white;
        color: #2f3640;
        text-align: justify;
    }
</style>
<div class="col-md-12 col-sm-12 col-xs-12">  
    <h3 class="text-center">Tabel Data Member</h3><hr>
</div>
<div class="table-responsive">
    <table id="example1" class="table table-striped jambo_table bulk_action">
      
        <thead>
            <tr class="headings">
                <th class="text-center">Username</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Password</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Email</th>
                <th class="text-center">No Telepon</th>
                <th style="width:125px;" class="text-center">Action
                </th>
         
            </tr>
        </thead>
      
        <tbody>
        <?php 
            foreach ($data_peminjam as $row) {                  
              ?>
              <tr>
            <td class="col-md-3 text-center"><?= $row->username;?></td>
            <td class="col-md-3"><?= $row->jenis_kelamin;?></td>
            <td class="col-md-2"><?= $row->password;?></td>
            <td class="col-md-3"><?= $row->nama;?></td>
            <td class="col-md-3"><?= $row->email;?></td>
            <td class="col-md-3"><?= $row->telp;?></td>
            <td class="col-md-1 text-center">
               
                 <a href="<?php echo site_url('admin/delete_user/'.$row->id_pembeli); ?>" onclick="return confirm('Apakah anda yakin menghapus data?')"><button type="submit" class="btn btn-danger">
                    <span class="btn-label"><i class="fa fa-trash-o"></i></span><span class="btn-label"></i></span>
                </button></a>
              
            </td>
       <?php
            }
            ?> 
        </tr>
        </tbody>
        
    </table>
</div>
</body>
</html>