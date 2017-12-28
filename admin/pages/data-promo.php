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
						<div class="box box-color box-bordered blue">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Detail Promo
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-reorder">
									<thead>
										<tr>
											<th width="5%">No</th>
											<th>Rumah Makan</th>
											<th>Menu</th>
											<th width="20%">Foto</th>
											<th>Harga</th>
											<th width="20%">Action</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
									include "../include/koneksi.php";
										$query=mysql_query("SELECT * FROM tb_promo ORDER BY id_promo DESC");

										$no=0;
											while($data=mysql_fetch_array($query)){

												$cekmenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='".$data['id_menu']."' "));
												$cekresto=mysql_fetch_array(mysql_query("SELECT * FROM tb_isi_sub_kategori WHERE id_isi_sub='".$cekmenu['id_isi_sub']."' "));

												$no++;
									?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $cekresto['isi_sub'] ?></td>
											<td><?php echo $cekmenu['nama'] ?></td>
											<td><center><img src="lampiran_menu/<?php echo $cekmenu['foto'] ?>" style="width:100%;"/></center> </td>
											<td><?php echo $cekmenu['harga'] ?></td>
											<td class='hidden-480'>
												<a href="proses/delete-promo.php?kode=<?php echo base64_encode($data['id_menu']) ?>"><button class="btn btn-danger">Hapus Promo</button></a>
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