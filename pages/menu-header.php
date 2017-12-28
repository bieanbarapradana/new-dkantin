<div class="container">

            <div class="nav-top-links">

                <a class="first-item" href="#"><img alt="phone" src="assets/images/phone.png" />082225373657</a>

                <a href="content.php?page=kontak"><img alt="email" src="assets/images/email.png" />Hubungi Kami Segera!</a>

            </div>

                        
            

            <div class="support-link">



            </div>



            <div id="user-info-top" class="user-info pull-right">

                <div class="dropdown">

                  <?php

                if(empty($_SESSION['username'])){

                 

                 }else{

                    echo $_SESSION['username'];



                    ?>

                      || Saldo Anda Rp. <?php echo number_format($_SESSION['saldo'],0,',','.') ?>

                    <?php

                       }

                   ?>

                

                    
                </div>

            </div>

        </div>