	
	<?php 

	include "../../include/koneksi.php";

		$kategori=$_POST['kategori'];

			mysql_query("INSERT INTO tb_kategori VALUES (NULL,'$kategori') ");

			header("location: ../content.php?page=data-kategori");
	 ?>