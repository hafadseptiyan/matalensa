<style type="text/css">
.loading{
    position: fixed;
    width: 100%;
    top:0px;
    right:0px;
    left:0px;
    bottom:0px;
    background-color: rgba(255, 255, 255, 0.86);
    z-index: 9999;
    text-align: center;
}
.spinner {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: relative;
    margin-top: 15%;
    display: inline-block;
}
.spinner:after,
.spinner:before {
    content: "";
    display: block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    background: #ea6100;
    opacity: 0;
    animation:zoom 3s ease-out 0s infinite;
}

.spinner:after{
    animation:zoom 3s linear 1s infinite;
}

@keyframes zoom {
    0% {
        -webkit-transform: scale(0);
        transform: scale(0);
        opacity: 1;
    }
    100% {
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
        opacity: 0;
    }
}

.check{fill:none;
  stroke:green;
  stroke-linecap:round;
  stroke-linejoin:round;
  stroke-miterlimit:10;
}

.check {
    stroke-dasharray: 60 200;
    animation: check 2.75s cubic-bezier(0.5, 0, 0.6, 1) forwards 0.0s; 
    opacity: 0;
}

@-webkit-keyframes check {
    from {stroke-dashoffset: 60;
  opacity: 1;}

    to {stroke-dashoffset: 293;
    opacity: 1;}
}
.smaller{
    width: 20%;
    margin: 15% auto;
}
.sukses{
    position: fixed;
    width: 100%;
    top:0px;
    right:0px;
    left:0px;
    bottom:0px;
    background-color: rgba(255, 255, 255, 0.86);
    z-index: 9999;
    text-align: center;
}
</style>
<div class="sukses" style="display:none">
<div class="smaller">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
            <path class="check" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
              c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
              c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578"/>
    </svg>
</div>
</div>
<div class="loading" style="display:none">
    <div class="spinner"></div>
</div>
          
        <?php 
           $tgl_skrg       = date('Y-m-d');
            $tgl_mulai      = new DateTime($tgl_kembali);
            $tgl_selesai    = new DateTime($tgl_skrg);
            $variable       = date_diff($tgl_mulai,$tgl_selesai);
            if ($variable->format("%R%a") > 0) {
                $jumlah_denda   = $variable->days * 5000;
                $keterlambat    = $variable->days;
            }else{
                $jumlah_denda   = 0;
                $keterlambat    = 0;
            }
        ?>
        <div class="col-md-14">
            
        
        <div class="panel panel-success" style="margin-top: -24px">
            <div class="panel-heading" style="color: #2d3436"><b>Ringkasan Peminjaman</b></div>
                <div class="panel-body">
                    <h5>Nama Pemesan : <?= $nama?></h5><hr>
                    <h5>Nama Produk : <?= $produk ?></h5><hr>
                    <h5>Biaya Peminjaman : Rp.<?= $total_biaya ?></h5><hr>
                    <h5>Tanggal Peminjaman : <?= $tgl_masuk ?></h5><hr>
                    <h5>Tanggal Rencana Pengembalian :<?= $tgl_kembali ?></h5><hr>
                    <h5>Tanggal Sekarang : <?= date('Y-m-d') ?></h5><hr>
                    <h5>Telat : <?= $keterlambat; ?> Hari</h5><hr>
                    <h5>Denda : Rp.<?= $jumlah_denda ?> </h5><hr>
                    <h5>Total Yang Harus Dibayar : Rp.<?= $jumlah_denda + $total_biaya ?> </h5><hr>
                    <h5>Status Barang : <a href="#" class="btn btn-primary"> <?= $status ?></a></h5><hr>
                    <a class="btn btn-success" onclick="simpan_pengembalian()" >Barang Kembali</a><br><br>
                    <input type="hidden" value="<?php echo $id_transaksi ?>" id="id_transaksi">
                </div>
            </div>
        </div>
 </div>

<script type="text/javascript">
function simpan_pengembalian() {
    id_transaksi = $('#id_transaksi').val();
    $.ajax( {  
        type :"post",  
        url : "<?php echo site_url('admin/simpan_pengembalian') ?>",  
        cache :false,
        timeout: 5000, 
        dataType:'Json',
        data:{id_transaksi:id_transaksi},
        beforeSend: function(data){
            $('.loading').show();
        },
        success : function(data) {
            $('.loading').fadeOut(); 
            if (data.response == 'sukses') {
                $('.sukses').fadeIn(); 
                setTimeout(function(){ 
                    window.location = "<?php echo site_url('admin/pengembalian') ?>";
                }, 3000);
            }else{
                alert('Gagal Menyimpan data');
            }
            
        },   
        error: function(x, t, m) {
            $('.loading').fadeOut();
           alert(m)
        } 
    });
}    
</script>