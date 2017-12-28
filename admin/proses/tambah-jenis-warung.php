<?php 
	
	include "../../include/koneksi.php";

		$jenis=$_POST['jenis'];
		$kategori=$_POST['kategori'];

		mysql_query("INSERT INTO tb_sub_kategori VALUES (NULL,'$kategori','$jenis') ");

		header("location: ../content.php?page=data-jenis-warung");

 ?>