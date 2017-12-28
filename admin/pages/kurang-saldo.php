<?php 
	
	include "include/koneksi.php";
	$kode=base64_decode($_GET['kode']);

		$data=mysql_fetch_array(mysql_query("SELECT * FROM tb_pesanan WHERE kode='$kode' "));
		//$kodepesanan=mysql_fetch_array(mysql_query("SELECT * FROM tb_pesanan WHERE id_pesanan='$kode' "));
		$datauser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='".$data['id_user']."' "));
		$dataadmin=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='3' "));

			$saldo=$datauser['saldo']-$data['harga'];
			$saldoadmin=$dataadmin['saldo']+$data['harga'];

		mysql_query("UPDATE tb_akun SET saldo='$saldo' WHERE id_user='".$data['id_user']."' ");
		mysql_query("UPDATE tb_akun SET saldo='$saldoadmin' WHERE id_user='3' ");
		mysql_query("UPDATE tb_pesanan SET status='dikirim' WHERE kode='".$data['kode']."' ");

		echo $data['kode'];

 ?>
 ?>

 <script type="text/javascript">
 window.location="index.php";
 </script>