<?php 
	
	include "../../include/koneksi.php";

		$kode=$_GET['kode'];

			mysql_query("DELETE FROM tb_pesanan WHERE kode='$kode' ");


 ?>
 <script type="text/javascript">
 	window.location="../index.php";
 </script>