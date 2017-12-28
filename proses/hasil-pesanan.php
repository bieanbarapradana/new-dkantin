<?php 


	function randomPassword() {
		    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
		    $pass = array(); //remember to declare $pass as an array
		    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
		    for ($i = 0; $i < 6; $i++) {
		        $n = rand(0, $alphaLength);
		        $pass[] = $alphabet[$n];
		    }
		    return implode($pass); //turn the array into a string
		}

		
		include "../include/koneksi.php";
	$jumlah=$_POST['jumlah'];
	$idmenu=$_POST['id_produk'];
	$tgl=date('d-M-Y');
	$user=$_POST['iduser'];
	$kodeurl=$_POST['kodeurl'];
	$pembayaran=$_POST['pembayaran'];
	$alamat=$_POST['alamat'];

	$kode=strtoupper(randomPassword());

	foreach (array_combine($jumlah, $idmenu) as $total => $menu) {

		$hargasatuan=mysql_fetch_array(mysql_query("SELECT * FROM tb_menu WHERE id_menu='$menu' "));

		$harga=$total*$hargasatuan['harga']+500;

		if($pembayaran=="Saldo Dompet"){
		$datauser=mysql_fetch_array(mysql_query("SELECT * FROM tb_akun WHERE id_user='$user' "));
			$saldo=$datauser['saldo'];

				if($saldo<$harga){
					?>
					<script type="text/javascript">
						alert("saldo anda tidak mencukupi");
						window.location="../index.php";
					</script>
					<?php
				}else{
					mysql_query("DELETE FROM tb_keranjang WHERE id_user='$user' ");
					mysql_query("INSERT INTO tb_notifikasi VALUES (NULL,'$user','$tgl','close') ");

					mysql_query("INSERT INTO tb_pesanan VALUES (NULL,'$user','$menu','$tgl','$total','$harga','$kode','$pembayaran','$alamat','pesan') ");
				}
		}else{

		mysql_query("INSERT INTO tb_pesanan VALUES (NULL,'$user','$menu','$tgl','$total','$harga','$kode','$pembayaran','$alamat','pesan') ");
		mysql_query("DELETE FROM tb_keranjang WHERE id_user='$user' ");
		mysql_query("INSERT INTO tb_notifikasi VALUES (NULL,'$user','$tgl','close') ");
		}
	}

	header("location: ../content.php?page=finish&&kode=$kode");
 ?>