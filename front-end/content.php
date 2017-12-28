<?php 
    session_start();

    if(empty($_SESSION['username'])){
        include "default/content_before.php";
    }else{
        include "default/content_after.php";
        
    }

 ?>