<?php 
	
	include "../../include/koneksi.php";

		$idtransaksi=$_GET['id'];
		$status=$_GET['status'];

			mysql_query("UPDATE tb_upload_bukti SET status='$status' WHERE id_bukti='$idtransaksi' ");

			header("location: ../ontent.php?page=data-pembayaran");
 ?>