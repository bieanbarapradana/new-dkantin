

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
						<div class="box box-color box-bordered blue">
							<div class="box-title">
								<h3>
									<i class="icon-table"></i>
									Detail Pesanan
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-reorder">
									<thead>
										<tr>
											<th width="5%">No</th>
											<th>Nama Pemesan</th>
											<th>Tgl Pemesanan</th>
											<th>Menu</th>
											<th>Nama RM</th>
											<th>Foto</th>
											<th>Jumlah</th>
											<th>Harga Total</th>
											<th>Alamat</th>
											<th>Kode Pesanan</th>
											<th>Pembayaran</th>
											<th>Status</th>
											
											
										</tr>
									</thead>
									<tbody>
									<?php
									include "../include/koneksi.php";
									$kode=$_GET['kode'];


										$query=mysql_query("SELECT * FROM tb_pesanan WHERE kode='$kode' ");

										$no=0;
											while($data=mysql_fetch_array($query)){

												$deleletenotif=mysql_query("DELETE FROM tb_notifikasi WHERE id_user='".$data['id_user']."' ");

												$cekuser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='".$data['id_user']."' "));
												
												$cekmenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='".$data['id_menu']."' "));
												
												$cekrm=mysql_fetch_array(mysql_query("SELECT * FROM tb_isi_sub_kategori WHERE id_isi_sub='".$cekmenu['id_isi_sub']."' "));
												$no++;
									?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $cekuser['nama'] ?></td>
											<td><?php echo $data['tgl'] ?></td>
											<td><?php echo $cekmenu['nama'] ?></td>
											<td><?php echo $cekrm['isi_sub'] ?></td>
											<td><img src="lampiran_menu/<?php echo $cekmenu['foto'] ?>"></td>
											<td><?php echo $data['total'] ?></td>
											<td>Rp. <?php echo number_format($data['harga'],0,',','.') ?></td>
											<td><?php echo $data['alamat'] ?></td>
											<td><?php echo $data['kode'] ?></td>
											<td><?php echo $data['pembayaran'] ?></td>
											<td><?php echo $data['status'] ?></td>
											<?php if($data['pembayaran']=="Saldo Dompet"){ ?>
											<td>
												<a href="content.php?page=kurang-saldo&&kode=<?php echo base64_encode($data['id_pesanan']) ?>">
												<button class="btn btn-danger">Kurangi Saldo</button>	
												</a>
											</td>
											<?php }else{} ?>
											
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