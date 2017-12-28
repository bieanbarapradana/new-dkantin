<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<?php 
	include "../include/koneksi.php";
	$total=mysql_query("SELECT COUNT(*) AS total FROM tb_notifikasi WHERE status='close' ");
	$jumlah=mysql_fetch_assoc($total);
 ?>

<ul class="icon-nav">
					<li class='dropdown'>
						<a href="#" class='dropdown-toggle' data-toggle="dropdown">
							<i class="icon-envelope"></i>
							<span class="label label-lightred"><?php echo $jumlah['total'] ?></span></a>
						<ul class="dropdown-menu pull-right message-ul">

							<?php 

							$query=mysql_query("SELECT * FROM tb_notifikasi ORDER by id_notif DESC LIMIT 10");
							while($data=mysql_fetch_array($query)){
								$cekuser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='".$data['id_user']."' "));
								$cekpesanan=mysql_fetch_array(mysql_query("SELECT * FROM tb_pesanan WHERE id_user='".$data['id_user']."' "));
							 ?>
							<li>
								<a href="content.php?page=detail-pesanan&&kode=<?php echo $cekpesanan['kode'] ?>">
									
									<div class="details">
										<div class="name"><i class="fa fa-user"></i> <?php echo $cekuser['nama'] ?></div>
										<p><i class="fa fa-calendar"></i> <?php echo $data['tgl'] ?></p>
										
									</div>
								</a>
							</li>
								<?php 

							}
								 ?>
							<li>
								<a href="components-messages.html" class='more-messages'>Go to Message center <i class="icon-arrow-right"></i></a>
							</li>
						</ul>
					</li>
					
					
				</ul>