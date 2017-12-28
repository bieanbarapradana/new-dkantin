	

	<?php 

		include "../../include/koneksi.php";

		$tb=$_GET['tabel'];
		$id=$_GET['id'];
		$kode=$_GET['kode'];
			mysql_query("DELETE FROM $tb WHERE $kode='$id' ");

			if($tb=="tb_kategori"){
		header("location: ../content.php?page=data-kategori");
			}elseif($tb=="tb_isi_sub_kategori"){
		header("location: ../content.php?page=data-warung-makan");	
			}elseif($tb=="tb_sub_kategori"){
		header("location: ../content.php?page=data-jenis-warung");	
			}elseif($tb=="tb_menu"){
		header("location: ../content.php?page=data-menu");	
			}

	 ?>