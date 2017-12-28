<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />

    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    
    <title>D-Kantin - Jajan Enak</title>
</head>
<body class="home">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <?php

        include "pages/menu-header.php";
        ?>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="index.php"><img alt="Kute shop - themelot.net" src="assets/images/logo.png" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <!-- <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                        <?php 
                        include "include/koneksi.php";

                            $kategori=mysql_query("SELECT * FROM tb_kategori");
                                while($datakategori=mysql_fetch_array($kategori)){
                         ?>
                        
                        <option value="<?php echo $datakategori['id_kategori'] ?>"><?php echo $datakategori['kategori'] ?></option>

                        <?php } ?>
                         </select>
                      </div>
                      <div class="form-group form-category">
                        <select class="select-category">
                        <?php 
                        include "include/koneksi.php";

                            $subkate=mysql_query("SELECT * FROM tb_sub_kategori");
                                while($datasubkate=mysql_fetch_array($subkate)){
                         ?>
                        
                        <option value="<?php echo $datakategori['id_sub'] ?>"><?php echo $datasubkate['sub_kategori'] ?></option>

                        <?php } ?>
                         </select>
                      </div>
                      <div class="form-group form-category">
                        <select class="select-category">
                        <?php 
                        include "include/koneksi.php";

                            $isisub=mysql_query("SELECT * FROM tb_isi_sub_kategori");
                                while($dataisisub=mysql_fetch_array($isisub)){
                         ?>
                        
                        <option value="<?php echo $datakategori['id_isi_sub'] ?>"><?php echo $dataisisub['isi_sub'] ?></option>

                        <?php } ?>
                         </select>
                      </div>

                      
                      <button type="submit" class="pull-right btn-search"></button>
                </form> -->
            </div>
           <?php 
           include "pages/keranjang.php";
           ?>
        </div>
        
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <?php

                include "pages/kategori.php";
                ?>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>

                            <?php
                           include "pages/menu.php";
                           ?>

                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
       
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
               
                <!-- ./block category  -->
           
            </div>
            <!-- ./left colunm -->
            

                <?php 

        
                    $current_page = $_GET['page'];

                    switch ($current_page) {


                        case ('tempat'):
                            include 'pages/tempat.php';
                            break;
                        case ('order'):
                            include 'pages/order.php';
                            break;
                        case ('finish'):
                            include 'pages/finish.php';
                            break;
                        case ('reservasi'):
                            include 'pages/reservasi.php';
                            break;
                        case ('pesan-tempat'):
                            include 'pages/pesan-tempat.php';
                            break;
                        case ('resto-rapat'):
                            include 'pages/resto-rapat.php';
                            break;
						 case ('kategori-link'):
                            include 'pages/kategori-link.php';
                            break;
						 case ('detail-warung'):
                            include 'pages/detail-warung.php';
                            break;
                        case ('detail-menu'):
                            include 'pages/detail-menu.php';
                            break;
                        case ('upload-bukti'):
                            include 'pages/upload-bukti.php';
                            break;
                        case ('beli-saldo'):
                            include 'pages/beli-saldo.php';
                            break;
			case ('kontak'):
                            include 'pages/kontak.php';
                            break;
			case ('about'):
                            include 'pages/about.php';
                            break;
			case ('faq'):
                            include 'pages/faq.php';
                            break;

                   
                    }

                     ?>
        </div>
        <!-- ./row-->
    </div>
</div>

<!-- Footer -->

<footer id="footer">

     <div class="container">

            <!-- introduce-box -->

            <div id="introduce-box" class="row">

                <div class="col-md-3">

                    <div id="address-box">

                        <a href="#"><img src="assets/data/introduce-logo.png" alt="" /></a>

                        <div id="address-list">

                            <div class="tit-name">Address:</div>

                            <div class="tit-contain">Gd C Lt.1 Bandung Techno Park (BTP), Jl. Telekomunikasi No 1 Terusan BuahBatu, Bandung, 40257</div>

                            <div class="tit-name">Phone:</div>

                            <div class="tit-contain">+62 82225373657</div>

                            <div class="tit-name">Email:</div>

                            <div class="tit-contain">cs@dkantin.com</div>

                        </div>

                    </div> 

                </div>

                <div class="col-md-6">

                    <div class="row">

                        <div class="col-sm-4">

                            <div class="introduce-title">Company</div>

                            <ul id="introduce-company"  class="introduce-list">

                                <li><a href="content.php?page=about">Tentang Kami</a></li>
                                <li><a href="content.php?page=kontak">Hubungi Kami</a></li>
				<li><a href="content.php?page=faq">FAQ</a></li>

                            </ul>

                        </div>

                        <div class="col-sm-4">

                            
                        </div>

                        <div class="col-sm-4">

                           
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div id="contact-box">

                        

                        <div class="introduce-title">Temukan Kami di:</div>

                        <div class="social-link">

                            <a href="https://www.facebook.com/DKantin-1693875594273808/"><i class="fa fa-facebook"></i></a>

                          
                            <a href="https://twitter.com/Delivery_Kantin"><i class="fa fa-twitter"></i></a>
				
			<a href="https://www.instagram.com/dkantin/"><i style="background:grey" class="fa fa-instagram"></i></a>
			<a href="https://line.me/R/ti/p/%40jkv2646n"><img src='assets/images/Line_app_logo.png' width='30px' height='30px'></a>
                            
                        </div>

                    </div>

                    

                </div>

            </div><!-- /#introduce-box -->

        

            

        </div> 



</footer>



<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/lib/jquery.countdown/jquery.countdown.min.js"></script>

<script type="text/javascript" src="assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.actual.min.js"></script>

<script type="text/javascript" src="assets/js/theme-script.js"></script>

</body>
</html>