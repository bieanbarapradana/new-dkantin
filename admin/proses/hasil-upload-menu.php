<?php 
	include "../../include/koneksi.php";

		$nama=$_POST['nama'];
		$harga=$_POST['harga'];
		$rm=$_POST['id_isi_sub'];
		$keterangan=$_POST['keterangan'];
		$ketersediaan="In stock";
		$rating=0;

			$eror       = false;
			$folder     = '../lampiran_menu/';
			$file_type  = array('jpg','jpeg','png','JPG','JPEG','PNG');
			$max_size   = 2000000; // 2MB


				if(isset($_POST['btnUpload'])){
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
				            mysql_query("INSERT INTO tb_menu VALUES (NULL,'$rm','$file_name','$nama','$harga','$ketersediaan','$keterangan','$rating') ");
				            
				            /*untuk notifikasi ke admin*/
				            /*$query=mysql_query("INSERT INTO tb_notif_pembayaran VALUES (NULL,'$date','$iduser','$nominal','$status')");*/
				            echo '<div id="msg">Upload Menu Berhasil</div>';
				        } else{
				            echo "Proses upload Gagal";
				        }
				    }
				}

		

 ?>

 <script type="text/javascript">
 	alert("Upload Menu Berhasil");
 	window.location='../content.php?page=tambah-menu';
 </script>