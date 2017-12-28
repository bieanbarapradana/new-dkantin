<?php 

	include "../include/koneksi.php";

		$iduser=$_POST['iduser'];
		$tgl=$_POST['tgl'];
		$idtempat=base64_decode($_POST['kode']);
		$jumlah=$_POST['jumlah'];
		$cp=$_POST['cp'];
		$status="pesan";

		$cekdata=mysql_fetch_array(mysql_query("SELECT id_tempat FROM tb_reservasi_tempat WHERE id_user='$iduser' AND id_tempat='$idtempat' "));


				$kode=$_POST['kode'];
				$user=base64_encode($iduser);

			if(count($cekdata['id_tempat'])==0){
				
			
				mysql_query("INSERT INTO tb_reservasi_tempat VALUES (NULL,'$iduser','$idtempat','$tgl','$jumlah','$cp','$status') ");
				
				header("location: ../content.php?page=pesan-tempat&&kode=$kode&&user=$user");
			}else{
				?>
				<script type="text/javascript">
				alert("tempat sudah anda pesan");
				window.location="../content.php?page=pesan-tempat&&kode=<?php echo $kode ?>&&user=<?php echo $user ?>";
				</script>
				<?php
			}

			



		
 ?>