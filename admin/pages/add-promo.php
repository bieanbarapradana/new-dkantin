	
	<?php 

	$kode=base64_decode($_GET['kode']);
		$datamenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='$kode' "));
			$rumahmakan=mysql_fetch_array(mysql_query("SELECT * FROM tb_isi_sub_kategori WHERE id_isi_sub='".$datamenu['id_isi_sub']."' "))


	 ?>

			<div id="main">
				<div class="container-fluid">
					<div class="page-header">
						<div class="pull-left">
							<h1>Extended forms</h1>
						</div>
						<div class="pull-right">
							<ul class="minitiles">
								<li class='grey'>
									<a href="#"><i class="icon-cogs"></i></a>
								</li>
								<li class='lightgrey'>
									<a href="#"><i class="icon-globe"></i></a>
								</li>
							</ul>
							<ul class="stats">
								<li class='satgreen'>
									<i class="icon-money"></i>
									<div class="details">
										<span class="big">$324,12</span>
										<span>Balance</span>
									</div>
								</li>
								<li class='lightred'>
									<i class="icon-calendar"></i>
									<div class="details">
										<span class="big">February 22, 2013</span>
										<span>Wednesday, 13:56</span>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="breadcrumbs">
						<ul>
							<li>
								<a href="more-login.html">Home</a>
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="forms-basic.html">Forms</a>
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="forms-extended.html">Extended forms</a>
							</li>
						</ul>
						<div class="close-bread">
							<a href="#"><i class="icon-remove"></i></a>
						</div>
					</div>


					
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Form Tambah Promo</h3>
								</div>
								<div class="box-content nopadding">
									<form action="proses/hasil-tambah-promo.php" method="POST" class='form-horizontal form-bordered' enctype='multipart/form-data'>
										
										<input type="hidden" name="idmenu" value="<?php echo $datamenu['id_menu'] ?>">
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Menu</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="nama" disabled value="<?php echo $datamenu['nama'] ?>">
													
												</div>
												
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Harga Menu</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="nama" disabled value="<?php echo $datamenu['harga'] ?>">
													
												</div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Rumah Makan</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="nama" disabled value="<?php echo $rumahmakan['isi_sub'] ?>">
													
												</div>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Diskon</label>
											<div class="controls">
												<div class="input-append">
													<input type="number" name="diskon">
													
												</div>
											</div>
										</div>
										
										<div class="control-group">
											<label for="textfield" class="control-label"></label>
											<div class="controls">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="lampiran_menu/<?php echo $datamenu['foto'] ?>" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													
												</div>
											</div>
										</div>


										<div class="form-actions">
											<input type="submit" name="btnUpload" class="btn btn-primary" value="Save">
											<button type="button" class="btn">Cancel</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- <div class="row-fluid">
						<div class="span12">
							<div class="box">
								<div class="box-title">
									<h3><i class="icon-th"></i> WYSIWYG (CKEditor)</h3>
								</div>
								<div class="box-content nopadding">
									<form action="#" method="POST" class='form-wysiwyg'>
										<textarea name="ck" class='ckeditor span12' rows="5"></textarea>
									</form>
								</div>
							</div>
						</div>
					</div> -->
					
				</div>
			</div>