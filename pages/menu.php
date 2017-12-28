 <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    
                                    <li class=""><a href="#">Tentang Kami</a></li>
                                    <li><a href="content.php?page=beli-saldo">isi E-Dompet</a></li>
                                    <li><a href="#">Hubungi Kami</a></li>
                                    <li><a href="content.php?page=upload-bukti">Upload BUkti Pembayaran</a></li>
                                	<?php 
                                	if(!empty($_SESSION['username'])){
                                	 ?>
                                	<li><a href="logout.php">Logout</a></li>
                                	<?php }else{
                                		?>
                                	<li><a href="login.php">Login</a></li>
                                		<?php
                                	} ?>
                                </ul>
                            </div><!--/.nav-collapse -->