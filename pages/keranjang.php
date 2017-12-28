 <?php

 include "include/koneksi.php";

    $jumlah=mysql_fetch_assoc(mysql_query("SELECT COUNT(*) AS total FROM tb_keranjang WHERE id_user='".$_SESSION['id_user']."' "));

 ?>



 <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">

                <a class="cart-link" href="content.php?page=order&&kode=<?php echo base64_encode($_SESSION['id_user']) ?>">

                    <span class="title">Shopping cart</span>

                    <span class="total"><?php echo $jumlah['total'] ?> items</span>

                    <span class="notify notify-left"><?php echo $jumlah['total'] ?></span>

                </a>

                <div class="cart-block">

                    <div class="cart-block-content">

                        <h5 class="cart-title"><?php echo $jumlah['total'] ?> Items in my cart</h5>

                        <div class="cart-block-list">

                            <ul>



                                <?php

                                $query=mysql_query("SELECT * FROM tb_keranjang WHERE id_user='".$_SESSION['id_user']."'");

                                    while($data=mysql_fetch_array($query)){

                                        $cekmenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='".$data['id_menu']."' "));

                                    

                                ?>

                                <li class="product-info">

                                    <div class="p-left">

                                        

                                        <img class="img-responsive" src="admin/lampiran_menu/<?php echo $cekmenu['foto']?>" alt="p10">

                                        </a>

                                    </div>

                                    <div class="p-right">

                                        <p class="p-name"><?php echo $cekmenu['nama'] ?></p>

                                        <p class="p-rice">Rp. <?php echo number_format($cekmenu['harga'],0,',','.') ?></p>

                                        <a href="proses/hapus-keranjang.php?menu=<?php echo base64_encode($data['id_keranjang']) ?>&&kode=<?php echo base64_encode($cekmenu['id_isi_sub']) ?>"><p style="color:red;"><i class="fa fa-times"> hapus menu</i></p></a>

                                    </div>

                                </li>

                                <?php  } ?>

                            </ul>

                        </div>

                        <!-- <div class="toal-cart">

                            <span>Total</span>

                            <span class="toal-price pull-right">122.38 €</span>

                        </div> -->

                        <div class="cart-buttons">

                            <a href="content.php?page=order&&kode=<?php echo base64_encode($_SESSION['id_user']) ?>" class="btn-check-out">Checkout</a>

                        </div>

                    </div>

                </div>

            </div>