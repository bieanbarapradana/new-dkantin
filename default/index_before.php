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

                            <option value="2">All Categories</option>

                            <option value="1">Men</option>

                            <option value="2">Women</option>

                        </select>

                      </div>

                      <div class="form-group input-serach">

                        <input type="text"  placeholder="Keyword here...">

                      </div>

                      <button type="submit" class="pull-right btn-search"></button>

                </form> -->

            </div>





           

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

<!-- Home slideder-->

<div id="home-slider">

    <div class="container">

        <div class="row">

            <div class="col-sm-3 slider-left"></div>

            <div class="col-sm-9 header-top-right">

                <div class="homeslider">

                    <div class="content-slide">

                        <ul id="contenhomeslider">

                          <li><img alt="Funky roots" src="admin/slider/slide1.jpg" style="height:450px;" title="Funky roots" /></li>

                          <li><img alt="Funky roots" src="admin/slider/slide2.jpg" style="height:450px;" title="Funky roots" /></li>

                          <li><img alt="Funky roots" src="admin/slider/slide3.jpg" style="height:450px;" title="Funky roots" /></li>

                          <li><img alt="Funky roots" src="admin/slider/slide4.png" style="height:450px;" title="Funky roots" /></li>

                        </ul>

                    </div>

                </div>

                <div class="header-banner banner-opacity">

                    <a href="#"><img alt="Funky roots" src="admin/slidekiri/banner.jpg" style="height:450px;" /></a>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- END Home slideder-->




<div class="page-top">

    <div class="container">

        <div class="row">

            <div class="col-xs-12 col-sm-12 page-top-left">

                <div class="popular-tabs">

                      <ul class="nav-tab">

                        <li class="active"><a data-toggle="tab" href="#tab-1">PROMO HARI INI</a></li>

                        

                      </ul>

                      <div class="tab-container">

                            <div id="tab-1" class="tab-panel active">

                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>



                                <?php

                                $promo=mysql_query("SELECT * FROM tb_promo ORDER BY id_promo DESC");

                                    while($datapromo=mysql_fetch_array($promo))
									{

                                        $menu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='".$datapromo['id_menu']."' "));



                                        $diskon=$datapromo['diskon']/100*$menu['harga'];

                                        $harga=$menu['harga']-$diskon;

                                 ?>

                                    <li class="col-md-8">

                                        <div class="left-block" >

                                            <a href="#">

                                                <img class="img-responsive"  alt="product" src="admin/lampiran_menu/<?php echo $menu['foto'] ?>"  />

                                            </a>

                                            

                                            <div class="add-to-cart">

                                                <a title="Add to Cart" href="login.php">Pesan Menu</a>

                                            </div>

                                            <div class="group-price">

                                                <span class="product-sale">Diskon <?php echo $datapromo['diskon'] ?>%</span>

                                            </div>

                                        </div>

                                        <div class="right-block">

                                            <h5 class="product-name"><a href="#"><?php echo $menu['nama'] ?></a></h5>

                                            <div class="content_price">



                                                <span class="price product-price">Rp. <?php echo number_format($harga,0,',','.') ?></span>

                                                <span class="price old-price">Rp. <?php echo number_format($menu['harga'],0,',','.') ?></span>

                                            </div>

                                            <div class="product-star">

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star-half-o"></i>

                                            </div>

                                        </div>

                                    </li>

                                    

                                    <?php } ?>

                                    

                                </ul>

                            </div>

                           

                      </div>

                </div>

            </div>

            

        </div>

    </div>

</div>

<!---->

<div class="content-page">

    <div class="container">

        <!-- featured category fashion -->

        <div class="category-featured">

            <nav class="navbar nav-menu nav-menu-red show-brand">

              <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->

                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/fashion.png" />Menu Terlaris</a></div>

                  <span class="toggle-menu"></span>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse">           

                  <ul class="nav navbar-nav">
					<li class="active"><a data-toggle="tab" href="#tab-4">Terlaris</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Sering dilihat</a></li>
                    <li><a href="#">Sarapan</a></li>
                    <li><a href="#">Cemilan</a></li>
                    <li><a href="#">Makan Malam</a></li>
                    <li><a href="#">Jajanan</a></li>
                    

                  </ul>

                </div><!-- /.navbar-collapse -->

              </div><!-- /.container-fluid -->

              <div id="elevator-1" class="floor-elevator">

                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>

                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>

              </div>

            </nav>

            <!-- <div class="category-banner">

                <div class="col-sm-6 banner">

                    <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads2.jpg" /></a>

                </div>

                <div class="col-sm-6 banner">

                    <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads3.jpg" /></a>

                </div>

           </div> -->

           <div class="product-featured clearfix">

                <div class="banner-featured">

                    <div class="featured-text"><span>featured</span></div>

                    <div class="banner-img">

                        <a href="#"><img alt="Featurered 1" src="admin/lampiran_menu/promo.jpg" style="height:350px;" /></a>

                    </div>

                </div>

                <div class="product-featured-content">

                    <div class="product-featured-list">

                        <div class="tab-container">

                            <!-- tab product -->

                            <div class="tab-panel active" id="tab-4">

                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>



                                <?php



                                $query=mysql_query("SELECT * FROM tb_menu ORDER BY id_menu ASC LIMIT 4");

                                    while($datamenu=mysql_fetch_array($query)){

                                ?>

                                    <li>

                                        <div class="left-block">

                                            <a href="#">

                                            <img class="img-responsive" alt="product" style="height:280px;" src="admin/lampiran_menu/<?php echo $datamenu['foto'] ?>" /></a>

                                            

                                            <div class="add-to-cart">

                                                <a title="Add to Cart" href="login.php">Pesan Menu</a>

                                            </div>

                                        </div>

                                        <div class="right-block">

                                            <h5 class="product-name"><?php echo $datamenu['nama'] ?></h5>

                                            <div class="content_price">

                                                <span class="price product-price">Rp. <?php echo number_format($datamenu['harga'],0,',','.') ?></span>

                                            </div>

                                            <div class="product-star">

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star-half-o"></i>

                                            </div>

                                        </div>

                                    </li>



                                    <?php } ?>

                                    

                                </ul>

                            </div>

                            

                        </div>

                        

                    </div>

                </div>

           </div>

        </div>

        <!-- end featured category fashion -->

        <!-- featured category fashion -->

        <div class="category-featured">

            <nav class="navbar nav-menu nav-menu-red show-brand">

              <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->

                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="assets/data/fashion.png" />Menu Terbaru</a></div>

                  <span class="toggle-menu"></span>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse">           

                  <ul class="nav navbar-nav">

                    

                  </ul>

                </div><!-- /.navbar-collapse -->

              </div><!-- /.container-fluid -->

              <div id="elevator-1" class="floor-elevator">

                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>

                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>

              </div>

            </nav>

            <!-- <div class="category-banner">

                <div class="col-sm-6 banner">

                    <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads2.jpg" /></a>

                </div>

                <div class="col-sm-6 banner">

                    <a href="#"><img alt="ads2" class="img-responsive" src="assets/data/ads3.jpg" /></a>

                </div>

           </div> -->

           <div class="product-featured clearfix">

                <div class="banner-featured">

                    <div class="featured-text"><span>featured</span></div>

                    <div class="banner-img">

                        <a href="#"><img alt="Featurered 1" src="admin/lampiran_menu/promo1.jpg" style="height:350px;" /></a>

                    </div>

                </div>

                <div class="product-featured-content">

                    <div class="product-featured-list">

                        <div class="tab-container">

                            <!-- tab product -->

                            <div class="tab-panel active" id="tab-4">

                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>



                                <?php



                                $query=mysql_query("SELECT * FROM tb_menu ORDER BY id_menu DESC LIMIT 4");

                                    while($datamenu=mysql_fetch_array($query)){

                                ?>

                                    <li>

                                        <div class="left-block">

                                            <a href="#">

                                            <img class="img-responsive" alt="product" style="height:280px;" src="admin/lampiran_menu/<?php echo $datamenu['foto'] ?>" /></a>

                                            

                                            <div class="add-to-cart">

                                                <a title="Add to Cart" href="login.php">Pesan Menu</a>

                                            </div>

                                        </div>

                                        <div class="right-block">

                                            <h5 class="product-name"><?php echo $datamenu['nama'] ?></h5>

                                            <div class="content_price">

                                                <span class="price product-price">Rp. <?php echo number_format($datamenu['harga'],0,',','.') ?></span>

                                            </div>

                                            <div class="product-star">

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star"></i>

                                                <i class="fa fa-star-half-o"></i>

                                            </div>

                                        </div>

                                    </li>



                                    <?php } ?>

                                    

                                </ul>

                            </div>

                            

                        </div>

                        

                    </div>

                </div>

           </div>

        </div>

        <!-- end featured category fashion -->

        

        

        <!-- end banner bottom -->

    </div>

</div>









<div id="content-wrap">

    <div class="container">

            

            <!-- di folder dafault -->

        

    </div> <!-- /.container -->

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

<script type="text/javascript" src="assets/js/jquery.actual.min.js"></script>

<script type="text/javascript" src="assets/js/theme-script.js"></script>



</body>

</html>
<script>
!function ($) {
    
    // Le left-menu sign
    /* for older jquery version
    $('#left ul.nav li.parent > a > span.sign').click(function () {
        $(this).find('i:first').toggleClass("icon-minus");
    }); */
    
    $(document).on("click","#left ul.nav li.parent > a > span.sign", function(){          
        $(this).find('i:first').toggleClass("icon-minus");      
    }); 
    
    // Open Le current menu
    $("#left ul.nav li.parent.active > a > span.sign").find('i:first').addClass("icon-minus");
    $("#left ul.nav li.current").parents('ul.children').addClass("in");

}(window.jQuery);
</script>