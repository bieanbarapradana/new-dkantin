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
    <title>Dkantin</title>
</head>
<body class="category-page">
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="assets/images/phone.png" />082225373657</a>
                <a href="content.php?page=kontak"><img alt="email" src="assets/images/email.png" />Hubungi Kami Segera!</a>
            </div>
                                    </div>
            
            
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="index.php"><img alt="" src="assets/images/logo.png" /></a>
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
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
                <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Masuk / Daftar Baru</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3><i class="fa fa-lock"></i> Login</h3>
                        <form action="proses/hasil-login.php" method="POST">
                        <label for="emmail_register">Username</label>
                        <input name="username" type="text" class="form-control">
                        <label for="emmail_register">Password</label>
                        <input name="password" type="password" class="form-control">
                        <input type="submit" value="login" class="button">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Registrasi Baru</h3>
                        <form action="proses/hasil-register.php" method="POST">
                        <label for="emmail_login">Nama</label>
                        <input name="nama" type="text" class="form-control">
                        <label for="password_login">Username</label>
                        <input name="username"  type="text" class="form-control">
                        <label for="emmail_login">Pasword</label>
                        <input name="password" type="password" class="form-control">
                        <label for="password_login">Email</label>
                        <input name="email" type="email" class="form-control">
                        <label for="emmail_login">No HP</label>
                        <input name="no_hp" type="text" class="form-control">
                        <label for="password_login">Kelamin</label>
                        <select class="form-control" style="width:50%;"  name="kelamin">
                            <option>Laki-Laki</option>
                            <option>Wanita</option>
                        </select>
                        <label for="emmail_login">Alamat</label>
                        <textarea name="alamat" class="form-control" style="width:100%; height:200px;">
                            
                        </textarea>
                        
                        <input type="submit" class="button" value="Register">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ./page wapper-->
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

                            <a href="#"><i class="fa fa-facebook"></i></a>

                          
                            <a href="#"><i class="fa fa-twitter"></i></a>

                            
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