
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
									<h3><i class="icon-th-list"></i> Form Tambah Menu</h3>
								</div>
								<div class="box-content nopadding">
									<form action="proses/hasil-upload-menu.php" method="POST" class='form-horizontal form-bordered' enctype='multipart/form-data'>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Menu</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="nama" placeholder="nama menu">
													
												</div>
												<span class="help-block">
													Masukan Nama Menu
												</span>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Harga Menu</label>
											<div class="controls">
												<div class="input-append">
													<input type="number" name="harga">
													
												</div>
												<span class="help-block">
													Masukan Harga
												</span>
											</div>
										</div>
										<div class="control-group">
											<label for="textfield" class="control-label">Rumah Makan</label>
											<div class="controls">
												<div class="input-xlarge"><select name="id_isi_sub" class='chosen-select'>

												<?php 
												include "../include/koneksi.php";
													$query=mysql_query("SELECT * FROM tb_isi_sub_kategori");
														while($data=mysql_fetch_array($query)){
												?>
													<option value="<?php echo $data['id_isi_sub'] ?>"><?php echo $data['isi_sub'] ?></option>

													<?php
												}
													?>

												</select></div>
											</div>
										</div>
										
										<div class="control-group">
											<label for="textfield" class="control-label"></label>
											<div class="controls">
												<div class="fileupload fileupload-new" data-provides="fileupload">
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="lampiran_menu/foto.JPG" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name='foto' /></span>
														<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div>
										</div>

										<div class="control-group">
											<label for="textfield" class="control-label">Keterangan Menu</label>
											<div class="controls">
												<textarea name="keterangan" class='ckeditor span12' rows="5"></textarea>
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