<?php 
    session_start();

    if(empty($_SESSION['username'])){ // cek apakah session berisi data : username atau kosong
        include "default/index_before.php"; //jika kosong jalankan file index_before
    }else{
        include "default/index_after.php"; // kondisi lain jalankan index after
        
    }

 ?>