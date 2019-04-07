  <br><br><br><br>
  <div class="container">
  	<div class="col-md-2"><p></p></div>
  <div class="col-md-8">
            <div class="panel panel-success">
                <div class="panel-heading" style="color: #2d3436"><b>Checkout Transaksi</b></div>
                
                <div class="panel-body">
                	<?= $msg ?>
                		  
                	<center>
                		
                	 <a href="<?php echo site_url('user/checkout_transaksi/'.$id_transaksi); ?>" target="_blank"><button type="submit" class="btn btn-success" style="margin-top: 10px;padding: 15px">
                    <span class="btn-label"><i class="fa fa-print"></i></span><span class="btn-label"> Cetak Kartu Transaksi</i></span>
                </button></a>

                </center>   
                </div>
            </div>
      </div>      
     	
  </div>
      