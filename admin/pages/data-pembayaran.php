<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Data Kategori</h1>
					</div>
					<div class="pull-right">
						<ul class="minitiles">
							<li class='grey'>
								<a href="#">
									<i class="icon-cogs"></i>
								</a>
							</li>
							<li class='lightgrey'>
								<a href="#">
									<i class="icon-globe"></i>
								</a>
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
							<a href="tables-basic.html">Tables</a>
							<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="tables-dynamic.html">Dynamic tables</a>
						</li>
					</ul>
					<div class="close-bread">
						<a href="#">
							<i class="icon-remove"></i>
						</a>
					</div>
				</div>

				<div class="row-fluid">
					<div class="span12">
						<div class="box box-color box-bordered green">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Detail Kategori
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-reorder">
									<thead>
										<tr>
											<th width="5%">No</th>
											<th>Nama User</th>
											<th>Kode Transaksi</th>
											<th width="20%">Foto</th>
											<th width="20%">Action</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
									include "../include/koneksi.php";
										$query=mysql_query("SELECT * FROM tb_upload_bukti ORDER BY id_bukti DESC");

										$no=0;
											while($data=mysql_fetch_array($query)){

												$cekuser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='".$data['id_user']."' "));
												$no++;
									?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $cekuser['nama'] ?></td>
											<td><?php echo $data['kode'] ?></td>
											<td><center><img src="lampiran-bukti/<?php echo $data['foto'] ?>" style="width:50%;"/></center> </td>
											
											<td class='hidden-480'>
												<?php 
												if($data['status']=="menunggu"){
													?>
													<a href="proses/hasil-update-pembayaran.php?id=<?php echo $data['id_bukti'] ?>&&status=terima"><button class="btn btn-success">Approve</button></a> 
													<a href="proses/hasil-update-pembayaran.php?id=<?php echo $data['id_bukti'] ?>&&status=tolak"><button class="btn btn-danger">Tolak</button></a> 
													<?php
												}elseif($data['status']=="terima"){
													?>
													<button class="btn btn-primary">Success</button>
													<?php
												}else{
													?>
													<button class="btn btn-warning">Ditolak</button>
													<?php
												}
												 ?>		
											</td>
											
										</tr>

										<?php } ?>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>