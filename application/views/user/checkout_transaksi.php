<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?= base_url()?>assets/user/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="<?= base_url()?>assets/user/css/kartu.css" rel='stylesheet' type='text/css' />
     <link rel="stylesheet" href="<?=base_url()?>assets/user/fonts/css/font-awesome.min.css">
	
</head>
<body>

<div class="content">		
    <div id="particles-js"></div>

	    <div class="card">
	 
	        <div class="firstinfo"><img style="width: 150px;height: 150px" src="<?php echo base_url('assets/user/img/'.$qrcode)?>">
	            <div class="profileinfo">
	                <h1>Checkout Transaksi</h1><hr>
	                
	                <p>Nama Pemesan    : <?php echo $nama ?></p>
	                <p>Nama Produk     : <?php echo $merk ?></p>
	                <p>Alamat penerima : <?php echo $alamat ?></p>
	                <p>Tanggal Pinjam  : <?php echo $tgl_masuk ?></p>
	                <p>Tanggal Kembali : <?php echo $tgl_kembali ?></p>
	                <b><p>Total bayar : <?php echo $total_biaya ?></p></b><hr>
	                <p>Thanks for rent . &copy; Matalensa </p>
	                
	            </div>
	        </div>
	    </div>
		    <a class="btn btn-default hidden-print" style="width: 100%;padding: 10px;margin-top: 10px;" onclick="javascript:window.print();">
					Cetak Kartu <i class="fa fa-print"></i>
			</a>
	</div>
    <br>

</div>

 <!--Latest version JQuery-->
        <script src="<?=base_url()?>assets/user/js/jquery-3.2.1.min.js"></script>
        <!--Typed js-->
        <script src="<?=base_url()?>assets/user/js/typed.js"></script>
        <!--particle js-->
        <script src="<?=base_url()?>assets/user/js/particles.js"></script>
</body>
  
    <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
</html>