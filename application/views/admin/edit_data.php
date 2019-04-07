<div class="col-md-12 col-sm-12 col-xs-12">  
    <h3 class="text-center">Edit Data</h3><hr>
</div>            
    <form class="form-horizontal" action="<?= site_url('Admin/update_gambar/'.$id_produk)?>" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 314px; height: 230px;"><img src="<?php echo base_url('assets/admin/img/'.$gambar);?>" alt="" />
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="width: 314px; height: 230px; line-height: 20px;">
                                
                            </div>
                        <div>
                            <input type="file" class="filestyle" name="gambar"/></input>                  
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default" style="background-color:#0a3d62;color: white">Update Gambar</button>
                </div>

                
                         
                </form>

                <form action="<?= site_url('Admin/update/'.$id_produk)?>" method="post">
                    
                    <div class="col-md-12">
                    <p></p>     
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Merk Kamera</label>
                        <div class="col-sm-10">
                            <input name="merk" type="text" class="form-control" value="<?= $merk ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Spesifikasi Kamera</label>
                        <div class="col-sm-10"> 
                            <textarea rows="5" name="spesifikasi" class="form-control"><?= $spesifikasi ?></textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Harga</label>
                        <div class="col-sm-10"> 
                            <input name="harga" type="text" class="form-control" value="<?= $harga ?>">
                        </div>
                    </div>
               
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Deskripsi Kamera</label>
                        <div class="col-sm-10"> 
                            <textarea rows="5" name="deskripsi" class="form-control"><?= $deskripsi ?></textarea>
                        </div>
                    </div>

                
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" style="background-color:#0a3d62;color: white">Update</button>
                            <button type="reset" class="btn btn-default" style="background-color:#0a3d62;color: white">Reset</button>
                        </div>
                    </div>
                </form>

               