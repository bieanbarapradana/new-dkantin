
			<div id="main">
				<div class="container-fluid">
					<div class="page-header">
						<div class="pull-left">
							<h1>Tambah Warung Makan</h1>
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

					<?php 

					include "../include/koneksi.php";
					$kode=base64_decode($_GET['kode']);
						$data=mysql_fetch_array(mysql_query("SELECT * FROM tb_isi_sub_kategori WHERE id_isi_sub='$kode' "));
					 	
					 	if(isset($_POST['warung'])){

					 		$kode=base64_decode($_GET['kode']);
					 		mysql_query("UPDATE tb_isi_sub_kategori SET isi_sub='".$_POST['warung']."',id_sub='".$_POST['jenis']."' WHERE id_isi_sub='$kode' ");
						$data=mysql_fetch_array(mysql_query("SELECT * FROM tb_isi_sub_kategori WHERE id_isi_sub='$kode' "));
					 	}
					 ?>

					
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Form Tambah Warung Makan</h3>
								</div>
								<div class="box-content nopadding">
									<form action="" method="POST" class='form-horizontal form-bordered' enctype='multipart/form-data'>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Warung Makan</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="warung" value="<?php echo $data['isi_sub'] ?>" required>
													
												</div>
												<span class="help-block">
													Masukan Nama Warung Makan
												</span>
											</div>
										</div>
									
										<div class="control-group">
											<label for="textfield" class="control-label">Jenis Warung Makan</label>
											<div class="controls">
												<div class="input-xlarge"><select name="jenis" required class='chosen-select'>

												<?php 
												include "../include/koneksi.php";
													$query=mysql_query("SELECT * FROM tb_sub_kategori");
														while($data=mysql_fetch_array($query)){
												?>
													<option value="<?php echo $data['id_sub'] ?>"><?php echo $data['sub_kategori'] ?></option>

													<?php
												}
													?>

												</select></div>
											</div>
										</div>
										
										
										
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Save changes</button>
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