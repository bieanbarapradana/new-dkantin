    

    <?php 



    $kode=base64_decode($_GET['kode']);



    ?>



<!-- Center colunm-->

            <div class="center_column col-xs-12 col-sm-9" id="center_column">

                

                <div id="view-product-list" class="view-product-list">

                    <h2 class="page-heading">

                        <span class="page-heading-title">

                            <?php

                            include "include/koneksi.php";



                                $cekrm=mysql_fetch_array(mysql_query("SELECT * FROM tb_isi_sub_kategori WHERE id_isi_sub='$kode' "));

                                echo $cekrm['isi_sub']

                            ?>

                        </span>

                    </h2>

                    <ul class="display-product-option">

                        <li class="view-as-grid selected">

                            <span>grid</span>

                        </li>

                        <li class="view-as-list">

                            <span>list</span>

                        </li>

                    </ul>

                    <!-- PRODUCT LIST -->

                    <ul class="row product-list grid">





                    <?php



                    $menu=mysql_query("SELECT * FROM tb_menu WHERE id_isi_sub='$kode' ");

                        while($data=mysql_fetch_array($menu)){

                    ?>

                        <li class="col-sx-12 col-sm-6">

                            <div class="product-container">

                                <div class="left-block">

                                    <a href="#">

                                        <img class="img-responsive" alt="product" width="200px" height="100px" src="admin/lampiran_menu/<?php echo $data['foto'] ?>"  />

                                    </a>

                                    

                                    <div class="add-to-cart">

                                        <?php 



                                        if(empty($_SESSION['id_user'])){

                                            ?>

                                            <a title="Add to Cart" href="login.php">Pesan Menu</a>

                                        <?php }else{

                                         ?>



                                        <a title="Add to Cart" href="proses/tambah-keranjang.php?menu=<?php echo $data['id_menu'] ?>&&kode=<?php echo $kode ?>&&user=<?php echo base64_encode($_SESSION['id_user']) ?>">Pesan Menu</a>

                                        <?php } ?>

                                    </div>

                                </div>

                                <div class="right-block">

                                    <h5 class="product-name"><?php echo $data['nama'] ?></h5>

                                    <div class="product-star">

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star"></i>

                                        <i class="fa fa-star-half-o"></i>

                                    </div>

                                    <div class="content_price">

                                        <span class="price product-price">Rp. <?php echo number_format($data['harga'],0,',','.') ?></span>

                                    </div>

                                    <div class="info-orther">

                                        <p class="availability">Availability: <span><?php echo $data['ketersediaan'] ?></span></p>

                                        <div class="product-desc">

                                            <?php echo $data['keterangan'] ?>

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

                <!-- ./view-product-list-->

                <div class="sortPagiBar">

                    <div class="bottom-pagination">

                        <nav>

                          <ul class="pagination">

                            <li class="active"><a href="#">1</a></li>

                            <li><a href="#">2</a></li>

                            <li><a href="#">3</a></li>

                            <li><a href="#">4</a></li>

                            <li><a href="#">5</a></li>

                            <li>

                              <a href="#" aria-label="Next">

                                <span aria-hidden="true">Next &raquo;</span>

                              </a>

                            </li>

                          </ul>

                        </nav>

                    </div>

                    <div class="show-product-item">

                        <select name="">

                            <option value="">Show 18</option>

                            <option value="">Show 20</option>

                            <option value="">Show 50</option>

                            <option value="">Show 100</option>

                        </select>

                    </div>

                    <div class="sort-product">

                        <select>

                            <option value="">Product Name</option>

                            <option value="">Price</option>

                        </select>

                        <div class="sort-product-icon">

                            <i class="fa fa-sort-alpha-asc"></i>

                        </div>

                    </div>

                </div>

            </div>

            <!-- ./ Center colunm -->