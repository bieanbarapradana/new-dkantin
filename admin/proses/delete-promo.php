<?php 
	
	include "../../include/koneksi.php";

		$kode=base64_decode($_GET['kode']);


			$cekpromo=mysql_fetch_array(mysql_query("SELECT * FROM tb_promo WHERE id_menu='$kode' "));
			$cekmenu=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='".$cekpromo['id_menu']."' "));
			
			$diskon=100-$cekpromo['diskon'];
			$harganormal=100/$diskon*$cekmenu['harga'];

			mysql_query("DELETE FROM tb_promo WHERE id_menu='$kode' ");

			mysql_query("UPDATE tb_menu SET harga='$harganormal' WHERE id_menu='$kode' ");

			header("location: ../content.php?page=data-promo");

 ?>