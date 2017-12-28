<?php 

	$user=base64_decode($_GET['user']);
	$kode=base64_decode($_GET['kode']);
		$datauser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='$user' "));
 		$datatempat=mysql_fetch_array(mysql_query("SELECT * FROM tb_reservasi WHERE id_tempat='$kode' "));

 ?>

    
 
<!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">
                          Data Reservasi
                        </span>
                    </h2>
                    <br>
                    <div class="col-md-12">
                    	<div class="col-md-4">
                    		<img src="admin/lampiran-tempat-reservasi/<?php echo $datatempat['foto'] ?>" class="img-responsive">
                    	</div>
                    	<div class="col-md-8">
                    		<h2><b><?php echo $datatempat['nama'] ?></b></h2><br>
                    		<h3>Diskripsi Tempat</h3>
                    		<p><?php echo $datatempat['diskripsi'] ?></p>
                    	</div>
                    </div>


                    <form action="proses/reservasi-tempat.php" method="POST">

                    	<input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'] ?>">
                    	<input type="hidden" name="kode" value="<?php echo base64_encode($kode) ?>">
                    	
                    <div class="col-md-12">
                    	<div class="col-md-4">
                    		<label>Nama Pemesan</label>
                    		<input type="text" disabled required class="form-control" value="<?php echo $datauser['nama'] ?>">
                    	</div>
                    	<div class="col-md-3">
                    		<label>Tgl Reservasi</label>
                    		<input type="date" name="tgl"  required class="form-control" >
                    	</div>
                    	<div class="col-md-2">
                    		<label>Jumlah Orang</label>
                    		<input type="number" name="jumlah" required class="form-control" >
                    	</div>
                    	<div class="col-md-3">
                    		<label>Cotact Person</label>
                    		<input type="number" name="cp" required class="form-control" >
                    	</div>
                    </div>
                    
                    <div class="col-md-12">
                    	<div style="padding-top:1vh;">
                    </div>
                    <div class="col-md-4">
                    		<input type="submit" class="btn btn-primary">
                    	</div>
                    </div>

                    </form>
                    
                    <!-- ./PRODUCT LIST -->
                </div>


            </div>
            <!-- ./ Center colunm -->