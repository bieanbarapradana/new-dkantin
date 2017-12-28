<?php 
	
	include "../../include/koneksi.php";

		$idtransaksi=$_GET['id'];
		$status=$_GET['status'];

				if($status=="terima"){
				$data=mysql_fetch_array(mysql_query("SELECT * FROM tb_beli_saldo WHERE id_transaksi='$idtransaksi' "));

				$cekuser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='".$data['id_user']."' "));
			        $saldo=$cekuser['saldo']+$data['nominal'];
				$data['id_user'];
				mysql_query("UPDATE tb_akun SET saldo='$saldo' WHERE id_user='".$data['id_user']."' ");
				}else{

				}
			mysql_query("UPDATE tb_beli_saldo SET status='$status' WHERE id_transaksi='$idtransaksi' ");

 		//header("location: ../content.php?page=data-pembelian-saldo");
 ?>

 <script type="text/javascript">
            window.location="../content.php?page=data-pembelian-saldo";
            </script>