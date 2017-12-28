<?php
	
	include "../include/koneksi.php";

	$idkeranjang=base64_decode($_GET['menu']);
	$kode=$_GET['kode'];


		mysql_query("DELETE FROM tb_keranjang WHERE id_keranjang='$idkeranjang' ");

		header("location: ../content.php?page=tempat&&kode=$kode");

?>
