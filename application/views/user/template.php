<!doctype html>
<html lang="en">
    <head>        

        <!--template title-->
        <title>Sewa Kamera Malang</title>

        <link rel="stylesheet" href="<?=base_url()?>assets/user/fonts/css/font-awesome.min.css">
        <!--Bootstrap css-->
        <link rel="stylesheet" href="<?=base_url()?>assets/user/css/bootstrap.min.css">
        <!--Detail CSS-->
        <link rel="stylesheet" href="<?=base_url()?>assets/user/css/flexslider.css">
        <!--Template css-->
        <link rel="stylesheet" href="<?=base_url()?>assets/user/css/accordion.css">
        <!--Template css-->
        <link rel="stylesheet" href="<?=base_url()?>assets/user/css/style.css">
        <!--Responsive css-->
        <link rel="stylesheet" href="<?=base_url()?>assets/user/css/responsive.css">

        <link rel="shortcut icon" href="<?= base_url()?>../matalensa/assets/user/img/logo.png" />

    </head>
    <body>
        <!--preloader starts-->
        <div class="loader_bg">
            <div class="loader"></div>
        </div>
        <!--preloader ends-->
        
        <!--navigation area ends-->
        <div class="konten">
            <?php $this->load->view($main_content); ?>
        </div>
        <!--Footer Area Ends-->
        <!--Latest version JQuery-->
        <script src="<?=base_url()?>assets/user/js/jquery-3.2.1.min.js"></script>
        <!--Typed js-->
        <script src="<?=base_url()?>assets/user/js/typed.js"></script>
        <!--particle js-->
        <script src="<?=base_url()?>assets/user/js/particles.js"></script>
        <script src="<?=base_url()?>assets/user/js/app.js"></script>
        <!--Tab js-->
        <script src="<?=base_url()?>assets/user/js/tabsaccordion.js"></script>
        <!--Main js-->
        <script src="<?=base_url()?>assets/user/js/main.js"></script>
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