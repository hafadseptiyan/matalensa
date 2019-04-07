
    <!-- convert rupiah -->
    <?php 
        function convert_to_rupiah($angka)
        {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
        }
        ?>
    <!--navigation area starts-->
    <header class="nav-area navbar-fixed-top" style="background-color:#EAB543">
        <div class="container">
            <div class="row">
                <!--main menu starts-->
                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="index.html" class="navbar-brand"><i class="fa fa-eye" style="color: #fff"></i> <span style="color: #fff">Mata Lensa</span></a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a class="smooth-menu" href="#testimonial">Data Pembelian -> Pembayaran</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header ends--><br><br><br><br>
    <div class="container">
        <div class="col-md-7">
            <div class="panel panel-warning">
                <div class="panel-heading" style="color: #2d3436"><b>Detail Pembeli</b></div>
                <div class="panel-body">
                    <div class="card">
                        <!-- form transaki -->
                        <form method="post" action="<?= site_url('user/insert_transaksi') ?>">
                            <?php $session = $this->session->all_userdata('logged_in'); $get_data = $session['logged_in'];  ?>
                            <div class="input-container">
                                <input name="nama" type="text" id="#{label}" value="<?php echo $get_data['nama'] ?>" required="required" />
                                <label for="#{label}">Nama</label>
                                <div class="bar"></div>
                            </div>
                            <div class="input-container">
                                <input name="email" type="text" id="#{label}" value="<?php echo $get_data['email'] ?>" required="required" />
                                <label for="#{label}">Email</label>
                                <div class="bar"></div>
                            </div>
                            <div class="input-container">
                                <input name="alamat" type="text" id="#{label}" required="required" />
                                <label for="#{label}">Alamat</label>
                                <div class="bar"></div>
                            </div>
                            <div class="input-container">
                                <input name="telp" type="text" id="#{label}" value="<?php echo $get_data['telp'] ?>" required="required" />
                                <label for="#{label}">No telp</label>
                                <div class="bar"></div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
        <div class="panel panel-success">
        <div class="panel-heading" style="color: #2d3436"><b>Ringkasan Pembelian</b></div>
        <div class="panel-body">
        <div class="col-md-12">
            <tr>
                <td>Nama Produk :</td>
                <td><?= $merk ?></td>
                <hr>
            </tr>
        </div>
        <div class="col-md-12">
            <tr>
                <td>Harga Produk : </td>
                <td><?= convert_to_rupiah($harga)  ?></td><hr>
            </tr> 
        </div>        

        <div class="col-md-5">               
            <tr>
                <td>Tanggal Pinjam : </td>
            </tr>
        </div>

        <div class="col-md-7">
            <tr>
                 <td><input type="text" readonly value="<?php echo $tgl_pinjam ?>" name="tgl_pinjam" class="form-control"></td><hr>
            </tr>
        </div>     

        <div class="col-md-5">
            <tr>
                <td>Tanggal Kembali : </td>
            </tr>
        </div>

        <div class="col-md-7">
            <tr>
                <td><input type="text" readonly value="<?php echo $tgl_kembali ?>" name="tgl_kembali" class="form-control"></td><hr>             
            </tr>
        </div>
        
        <div class="col-md-5">    
            <tr>
                <td>Total Bayar : </td>
            </tr> 
        </div>   
        <div class="col-md-7">
            <tr>
                <td><input type="text" name="harga_total" value="<?php echo $harga ?>" class="form-control"><br>
            </tr>
        </div>
        
        <?php echo $id_transaksi= $this->uri->segment(3); ?>
        <div class="col-md-12">
                <a href="<?php echo site_url('user/checkout_transaksi/'.$id_transaksi); ?>"> 
                    <button style="width: 100%;margin-left: -0%" class="button" type="submit" ><span class="btn-label"><i class="glyphicon glyphicon-print"></i></span> Checkout
                </button></a>
         </div>
       
            <!-- menyisipkan id  -->
            <input type="hidden" name="status" value="Masuk">
            <input type="hidden" id="harga" value="<?= $harga  ?>" class="form-cont">
            <input type="hidden" name="id_pembeli" value="<?php echo $get_data['id_pembeli'] ?>">
            <input type="hidden" name="id_produk" value="<?php echo $id_produk ?>">
            <!-- ends id  -->
        
           
        </form>
        <!-- Ends form transaki -->    
        </div>
        </div>
        </div>       
        </div>
    </div>

    <script src="<?=base_url()?>assets/user/js/jquery.js"></script>
    <!--Tab js-->
    <script src="<?=base_url()?>assets/user/js/tabsaccordion.js"></script>
    <!--image zoom-->
    <script src="<?=base_url()?>assets/user/js/imagezoom.js"></script>
    <!--flexslider js-->
    <script src="<?=base_url()?>assets/user/js/jquery.flexslider.js"></script>
    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>
    <!-- //FlexSlider-->
    <!--Bootstrap js-->
    <script src="<?=base_url()?>assets/user/js/bootstrap.min.js"></script>  
</body>
</html>