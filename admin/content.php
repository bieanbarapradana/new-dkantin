	<?php
	error_reporting(0);
	session_start();

		if(!empty($_SESSION['username'])){
	?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Admin | Dkantin</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="css/themes.css">

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Nice Scroll -->
	<script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<script src="js/plugins/jquery-ui/jquery.ui.datepicker.min.js"></script>
	<!-- slimScroll -->
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- dataTables -->
	<script src="js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="js/plugins/datatable/TableTools.min.js"></script>
	<script src="js/plugins/datatable/ColReorderWithResize.js"></script>
	<script src="js/plugins/datatable/ColVis.min.js"></script>
	<script src="js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
	<script src="js/plugins/datatable/jquery.dataTables.grouping.js"></script>
	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.min.js"></script>
	<!-- select2 -->
	<script src="js/plugins/select2/select2.min.js"></script>
	<!-- Theme framework -->
	<script src="js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="js/application.min.js"></script>
	<!-- Just for demonstration -->
	<script src="js/demonstration.min.js"></script>

		<!-- CKEditor -->
	<script src="js/plugins/ckeditor/ckeditor.js"></script>
	<!-- PLUpload -->
	<script src="js/plugins/plupload/plupload.full.js"></script>
	<script src="js/plugins/plupload/jquery.plupload.queue.js"></script>
	<!-- Custom file upload -->
	<script src="js/plugins/fileupload/bootstrap-fileupload.min.js"></script>
	<script src="js/plugins/mockjax/jquery.mockjax.js"></script>
	<!-- complexify -->
	<script src="js/plugins/complexify/jquery.complexify-banlist.min.js"></script>
	<script src="js/plugins/complexify/jquery.complexify.min.js"></script>
	<!-- Mockjax -->
	<script src="js/plugins/mockjax/jquery.mockjax.js"></script>

	<!--[if lte IE 9]>
		<script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
		<script>
			$(document).ready(function() {
				$('input, textarea').placeholder();
			});
		</script>
	<![endif]-->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">FLAT</a>
			<a href="#" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation"> <i class="icon-reorder"></i>
			</a>
			<?php 

			include "pages/menu-mobile.php";
			 ?>
			<div class="user">
				
				<?php 
				include "pages/notifikasi.php";
				 ?>

				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">
						<?php echo $_SESSION['nama'] ?>
						<img src="img/demo/user-avatar.jpg" alt=""></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="more-userprofile.html">Edit profile</a>
						</li>
						<li>
							<a href="#">Account settings</a>
						</li>
						<li>
							<a href="logout.php">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="content">
	
	<?php

	include "pages/sidebar.php";
	?>



		 <?php 

        
                    $current_page = $_GET['page'];

                    switch ($current_page) {


                        case ('data-kategori'):
                            include 'pages/data-kategori.php';
                            break;
                        case ('data-pesanan'):
                            include 'pages/data-pesanan.php';
                            break;
                        case ('data-menu'):
                            include 'pages/data-menu.php';
                            break;
                        case ('data-jenis-warung'):
                            include 'pages/data-jenis-warung.php';
                            break;
                        case ('data-warung-makan'):
                            include 'pages/data-warung-makan.php';
                            break;

                        case ('tambah-menu'):
                            include 'pages/tambah-menu.php';
                            break;
                         case ('tambah-promo'):
                            include 'pages/tambah-promo.php';
                            break;
                          case ('add-promo'):
                            include 'pages/add-promo.php';
                            break;
                         case ('data-promo'):
                            include 'pages/data-promo.php';
                            break;
                        case ('tambah-kategori'):
                            include 'pages/tambah-kategori.php';
                            break;
                        case ('tambah-warung-makan'):
                            include 'pages/tambah-warung-makan.php';
                            break;
                        case ('tambah-jenis-warung'):
                            include 'pages/tambah-jenis-warung.php';
                            break;

                        case ('detail-pesanan'):
                            include 'pages/detail-pesanan.php';
                            break;

                        case ('edit-kategori'):
                            include 'pages/edit-kategori.php';
                            break;
                        case ('edit-jenis-warung'):
                            include 'pages/edit-jenis-warung.php';
                            break;
                         case ('edit-warung-makan'):
                            include 'pages/edit-warung-makan.php';
                            break;
                         case ('edit-menu'):
                            include 'pages/edit-menu.php';
                            break;

                         case ('kurang-saldo'):
                            include 'pages/kurang-saldo.php';
                            break;
                         case ('data-pembelian-saldo'):
                            include 'pages/data-pembelian-saldo.php';
                            break;
                        case ('data-pembayaran'):
                            include 'pages/data-pembayaran.php';
                            break;
                        
                   
                    }

                     ?>


	</div>
	
</body>

</html>

<?php

		}else{
			header("location: login.php");
		}
	?>