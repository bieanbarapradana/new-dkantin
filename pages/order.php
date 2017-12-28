    
    <?php 

    $kode=base64_decode($_GET['kode']);
    $kodeurl=$_GET['kode'];
    ?>

<!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">
                           Checkout                         </span>
                    </h2>
                    
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                        <form action="proses/hasil-pesanan.php" method="POST">

                    <?php
                    include "include/koneksi.php";
                    $user=mysql_query("SELECT * FROM tb_keranjang WHERE id_user='$kode' ");
                        while($data=mysql_fetch_array($user)){
                            $menu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='".$data['id_menu']."' "));

                    ?> 
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="#">
                                        <img class="img-responsive" alt="product" width="100%" src="admin/lampiran_menu/<?php echo $menu['foto'] ?>"  />
                                    </a>
                                    
                                    <input type="hidden" name="kodeurl" value="<?php echo $kodeurl ?>">
                                  <input type="hidden" name="id_produk[]" value="<?php echo $data['id_menu'] ?>"> 
                                  <input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'] ?>">  
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><?php echo $menu['nama'] ?></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                    <div class="content_price">
                                        <span class="price product-price">Rp. <?php echo number_format($menu['harga'],0,',','.') ?></span>
                                    </div>
                                    <div class="content_price">
                                    <label><b>Jumlah Pesanan</b></label>
                                    <input type="number" required class="form-control" name="jumlah[]">
                                    </div>
                                    <div class="info-orther">
                                        <p class="availability">Availability: <span><?php echo $menu['ketersediaan'] ?></span></p>
                                        <div class="product-desc">
                                            <?php echo $menu['keterangan'] ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                       
                       <?php
                   }
                       ?>

                        
                    </ul>
                    <!-- ./PRODUCT LIST -->


                </div>
                <br>
                <hr>
                
                <br>
                <div class="col-md-12">
                <div class="col-md-6">
                    <h2>Jenis Pembayaran</h2>
                    <select class="form-control" name="pembayaran">
                        <option>Saldo Dompet</option>
                        <option>T-Cash</option>
                        <option>Transfer</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <h2>Masukan Alamat</h2>
                    <textarea name="alamat" required class="form-control" style="height:20vh;">
                    </textarea>
                </div>
                <br><br><br>
                </div>
                <div class="clearfix">
                <div class="col-md-12">
                <input type="submit" class="btn btn-primary" value="Selesai">
                </div>
                <!-- ./view-product-list-->
                </form>
            </div>
            <!-- ./ Center colunm -->