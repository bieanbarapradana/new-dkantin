
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

					<?php 

					include "../include/koneksi.php";
						$kode=base64_decode($_GET['kode']);
							$datamenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='$kode' "));

						if(isset($_POST['nama'])){
							$kode=base64_decode($_GET['kode']);

							
		$nama=$_POST['nama'];
		$harga=$_POST['harga'];
		$rm=$_POST['id_isi_sub'];
		$ketersediaan="In stock";
		$rating=0;


		if(isset($_FILES['foto']['name'])){

			$eror       = false;
			$folder     = 'lampiran_menu/';
			$file_type  = array('jpg','jpeg','png','JPG','JPEG','PNG');
			$max_size   = 2000000; // 2MB


				    $file_name  = $_FILES['foto']['name'];
				    $file_size  = $_FILES['foto']['size'];
				    
				    /*rumus untuk memecah formar tipe file yg diupload*/
				    $explode    = explode('.',$file_name);
				    $extensi    = $explode[count($explode)-1];
				 
				    move_uploaded_file($_FILES['foto']['tmp_name'], $folder.$file_name);
				            /*untuk memasukan data ke database*/
				            mysql_query("UPDATE tb_menu SET nama='$nama',harga='$harga',foto='$file_name' WHERE id_menu='$kode' ");
				            $datamenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='$kode' "));
				            /*untuk notifikasi ke admin*/
				            /*$query=mysql_query("INSERT INTO tb_notif_pembayaran VALUES (NULL,'$date','$iduser','$nominal','$status')");*/
				            //echo '<div class="label label-warning">Edit Menu Berhasil</div>';
				       
			}else{
				 mysql_query("UPDATE tb_menu SET nama='$nama',harga='$harga' WHERE id_menu='$kode' ");
				 $datamenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='$kode' "));
			}

							
						}

					 ?>
					
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-color box-bordered">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Form Tambah Menu</h3>
								</div>
								<div class="box-content nopadding">
									<form action="" method="POST" class='form-horizontal form-bordered' enctype='multipart/form-data'>
										<div class="control-group">
											<label for="textfield" class="control-label">Nama Menu</label>
											<div class="controls">
												<div class="input-append">
													<input type="text" name="nama" value="<?php echo $datamenu['nama'] ?>">
													
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
													<input type="number" name="harga" value="<?php echo $datamenu['harga'] ?>">
													
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
													<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="lampiran_menu/<?php echo $datamenu['foto'] ?>" /></div>
													<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
													<div>
														<span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name='foto' required /></span>
														<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
													</div>
												</div>
											</div>
										</div>

								<!-- 		<div class="control-group">
											<label for="textfield" class="control-label">Keterangan Menu<br><p style="color:red;">form keterangan dikosongin saja apabila tidak ada perubahan</p></label>

											<div class="controls">
												<textarea name="keterangan" value="<?php echo $datamenu['keterangan'] ?>"  class='ckeditor span12' rows="5">
													
												</textarea>
											</div>
										</div> -->
										
										
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