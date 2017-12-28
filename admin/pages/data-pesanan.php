<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Data Pemesanan</h1>
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
									Data Pemesanan
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-reorder">
									<thead>
										<tr>
											<th width="5%">No</th>
											<th>Nama Pemesan</th>
											<th>No HP</th>
											<th>Tgl Pesanan</th>
											<th>Alamat</th>
											<th>Kode Pesanan</th>
											<th>Pembayaran</th>
											<th>Status</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
									include "../include/koneksi.php";
										$query=mysql_query("SELECT DISTINCT kode,id_user,tgl,alamat,pembayaran,status FROM tb_pesanan ORDER BY id_pesanan DESC");

										$no=0;
											while($data=mysql_fetch_array($query)){

												$cekuser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='".$data['id_user']."' "));
													
												$no++;
									?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $cekuser['nama'] ?></td>
											<td><?php echo $cekuser['no_hp'] ?></td>
											<td><?php echo $data['tgl'] ?></td>
											<td><?php echo $data['alamat'] ?></td>
											<td><?php echo $data['kode'] ?></td>
											<td><?php echo $data['pembayaran'] ?></td>
											<td><?php echo $data['status'] ?></td>
											<td>
												<a href="content.php?page=detail-pesanan&&kode=<?php echo $data['kode'] ?>">
												<button class="btn btn-primary">Cek Pesanan</button>	
												</a>
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