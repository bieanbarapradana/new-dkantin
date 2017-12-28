<?php 
	
	include "../../include/koneksi.php";

		$idmenu=$_POST['idmenu'];
		$kodeurl=base64_encode($_POST['idmenu']);
		$diskon=$_POST['diskon'];

			/*update harga menu*/
				$harga=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='$idmenu' " ));
				$hargaawal=$harga['harga'];

				$promo=($diskon/100)*$hargaawal;
				$hargapromo=$hargaawal-$promo;
				mysql_query("UPDATE tb_menu SET harga='$hargapromo' WHERE id_menu='$idmenu' ");

				/*insert tabel promo*/
				mysql_query("INSERT INTO tb_promo VALUES (NULL,'$idmenu','$diskon') ");

				//header("location: ../content.php?page=add-promo&&kode=$kodeurl");
				header("location: ../content.php?page=tambah-promo");
				

 ?>