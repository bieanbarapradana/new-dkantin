<?php 
	include "../include/koneksi.php";

		$iduser=$_POST['iduser'];
		$kode=$_POST['kode'];
		$status="menunggu";

			$eror       = false;
			$folder     = '../admin/lampiran-bukti/';
			$file_type  = array('jpg','jpeg','png','JPG','JPEG','PNG');
			$max_size   = 2000000; // 2MB


				if(isset($_POST['btnUpload'])){

					$cekdata=mysql_fetch_array(mysql_query("SELECT COUNT(*) AS total FROM tb_pesanan WHERE kode='$kode' "));

					if($cekdata['total'] == 0){
						?>
						<script type="text/javascript">
							alert("Kode Pesanan Salah");
							window.location="../content.php?page=upload-bukti";
						</script>
						<?php
					}else{

				    $file_name  = $_FILES['foto']['name'];
				    $file_size  = $_FILES['foto']['size'];
				    
				    /*rumus untuk memecah formar tipe file yg diupload*/
				    $explode    = explode('.',$file_name);
				    $extensi    = $explode[count($explode)-1];
				 
				    if(!in_array($extensi,$file_type)){
				        $eror   = true;
				        $pesan .= '- Type file yang anda upload tidak sesuai<br />';
				    }
				    if($file_size > $max_size){
				        $eror   = true;
				        $pesan .= '- Ukuran file melebihi batas maximum<br />';
				    }
				    
				    if($eror == true){
				        echo '<div id="eror">'.$pesan.'</div>';
				    }
				    else{
				        /*sintaks untuk memasukan data yang sudah diinputkan*/
				        if(move_uploaded_file($_FILES['foto']['tmp_name'], $folder.$file_name)){
				            /*untuk memasukan data ke database*/
				            mysql_query("INSERT INTO tb_upload_bukti VALUES (NULL,'$kode','$file_name','$iduser','$status') ");
				            
				            /*untuk notifikasi ke admin*/
				            /*$query=mysql_query("INSERT INTO tb_notif_pembayaran VALUES (NULL,'$date','$iduser','$nominal','$status')");*/
				            //echo '<div id="msg">Upload Bukti Berhasil</div>';
				        } else{
				            //echo "Proses upload Gagal";
				        }
				    }
				}
			}

		

 ?>
<script type="text/javascript">
	alert("Upload Bukti Berhasil");
	window.location="../content.php?page=upload-bukti";
</script>
 