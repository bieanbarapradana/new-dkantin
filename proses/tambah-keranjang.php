<?php
	
	include "../include/koneksi.php";

	$menu=$_GET['menu'];
	$kode=base64_encode($_GET['kode']);
	$user=base64_decode($_GET['user']);
	$url=$_GET['url'];

		mysql_query("INSERT INTO tb_keranjang VALUES (NULL,'$menu','$user')");

		if($url=="index"){
			header("location: ../index.php");
		}else{
		header("location: ../content.php?page=tempat&&kode=$kode");
		}
?>