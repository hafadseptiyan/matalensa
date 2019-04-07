<style type="text/css">
    form,h4 {
        color: red;
    }

</style>

<div class="col-md-12 col-sm-12 col-xs-12">  
    <h3 class="text-center">Input Produk</h3><hr>
</div>
		<form class="form-horizontal" action="<?= site_url('Admin/insert_data')?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Merk Kamera</label>
                        <div class="col-sm-10">
                            <input name="merk" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Spesifikasi Kamera</label>
                        <div class="col-sm-10"> 
                            <textarea name="spesifikasi" class="form-control" required="required"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Jenis Kamera</label>
                        <div class="col-sm-10">
                            <select name="jenis" class="form-control" required="required">
                                <option value="">- Pilih Jenis Kamera -</option>
                                <?php foreach($kategori as $row){ ?>
                                <option value="<?= $row->id_kategori;?>"><?php echo $row->nama_kategori;?>
                                </option>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Harga</label>
                        <div class="col-sm-10"> 
                            <input name="harga" type="text" class="form-control" required="required">
                        </div>
                    </div>
               
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Deskripsi Kamera</label>
                        <div class="col-sm-10"> 
                            <textarea name="deskripsi" class="form-control" required="required"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Gambar Kamera 1</label>
                        <div class="col-sm-10"> 
                            <input type="file" name="gambar" class="filestyle" data-buttonText= "Find Image" data-placeholder="No file" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Gambar Kamera 2</label>
                        <div class="col-sm-10"> 
                            <input type="file" name="gambar2" class="filestyle" data-buttonText= "Find Image" data-placeholder="No file" required="required">
                        </div>
                    </div>

                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Gambar Kamera 3</label>
                        <div class="col-sm-10"> 
                            <input type="file" name="gambar3" class="filestyle" data-buttonText= "Find Image" data-placeholder="No file" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" required="required">
                            <button type="submit" class="btn btn-success" >Simpan</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </div>
                    </div>
                </form>
             </div>   
</div>	                