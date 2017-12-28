<div id="main">
			<div class="container-fluid">
				<div class="page-header">
					<div class="pull-left">
						<h1>Data Warung Makan</h1>
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
									Detail Warung Makan
								</h3>
							</div>
							<div class="box-content nopadding">
								<table class="table table-bordered table-hover table-nomargin table-striped dataTable dataTable-reorder">
									<thead>
										<tr>
											<th width="5%">No</th>
											<th>Kategori</th>
											<th>Jenis RM</th>
											<th>Rumah Makan</th>
											<th width="20%">Action</th>
											
										</tr>
									</thead>
									<tbody>
									<?php
									include "../include/koneksi.php";
										$query=mysql_query("SELECT * FROM tb_isi_sub_kategori ORDER BY id_isi_sub DESC");

										$no=0;
											while($data=mysql_fetch_array($query)){
												$ceksubkategori=mysql_fetch_array(mysql_query("SELECT * FROM tb_sub_kategori WHERE id_sub='".$data['id_sub']."' "));
												$cekkategori=mysql_fetch_array(mysql_query("SELECT * FROM tb_kategori WHERE id_kategori='".$ceksubkategori['id_kategori']."' "));
												$no++;
									?>
										<tr>
											<td><?php echo $no ?></td>
											<td><?php echo $cekkategori['kategori'] ?></td>
											<td><?php echo $ceksubkategori['sub_kategori'] ?></td>
											<td><?php echo $data['isi_sub'] ?></td>
											<td><center><img src="lampiran_kategori-resto/<?php echo $data['foto'] ?>" style="width:50%;"/></center> </td>
											<td class='hidden-480'>
												<a href="content.php?page=edit-warung-makan&&kode=<?php echo base64_encode($data['id_isi_sub']) ?>" class="btn" rel="tooltip" title="Edit"><i class="icon-edit"></i></a>
												<a href="proses/delete.php?tabel=tb_isi_sub_kategori&&kode=id_isi_sub&&id=<?php echo $data['id_isi_sub'] ?>" class="btn" rel="tooltip" title="Delete"><i class="icon-remove"></i></a>
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