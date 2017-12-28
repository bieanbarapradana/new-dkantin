


<div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Kategori</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                    <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">


                        <?php

                        include "include/koneksi.php";
                            $query=mysql_query("SELECT * FROM tb_kategori");
                            while($data=mysql_fetch_array($query))
							{
								
								//$datamenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_isi_sub WHERE id_isi_sub='".$data['']."' "))
							
							?>

                            <li><a class="parent" href="content.php?page=kategori-link&&kode=<?php echo base64_encode($data['id_kategori']) ?>"><img class="icon-menu" alt="Funky roots" src="assets/data/1.png"><?php echo $data['kategori']; ?></a>
                           
								<div class="vertical-dropdown-menu">
                                    <div class="vertical-groups col-sm-12">
                                     <?php 

											$sql=mysql_query("SELECT * FROM tb_sub_kategori WHERE id_kategori='".$data['id_kategori']."' ");
												while($datasub=mysql_fetch_array($sql))
												{
													?>
														<div class="mega-group col-sm-4">
															<h4 class="mega-group-header"><span><?php echo $datasub['sub_kategori'] ?></span></h4>
																<ul class="group-link-default">
																	<?php
																		$cekisi=mysql_query("SELECT * FROM tb_isi_sub_kategori WHERE id_sub='".$datasub['id_sub']."' ");
																		while($datamenu=mysql_fetch_array($cekisi))
																		{
																			?>
																				<li><a href="content.php?page=tempat&&kode=<?php echo base64_encode($datamenu['id_isi_sub']) ?>"><?php echo $datamenu['isi_sub'] ?></a></li>

																			<?php 
																		} 
																	?>
																</ul>
                                            
														</div>
													<?php 
												} 	
										?>
                                        
                                        
                                    </div>
                                </div>

                                
                          </li>

                              <?php 
							} 
							?>
                            
                            <!-- <li><a href="#"><img class="icon-menu" alt="Funky roots" src="assets/data/10.png">Tempat Nongkrong</a></li>
                             -->
                        </ul>
                        
                    </div>
                </div>
                </div>