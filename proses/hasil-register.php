<?php 

	
	include "../include/koneksi.php";

		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$passoword=md5($_POST['password']);
		$email=$_POST['email'];
		$nohp=$_POST['no_hp'];
		$kelamin=$_POST['kelamin'];
		$alamat=$_POST['alamat'];

			mysql_query("INSERT INTO tb_akun VALUES (NULL,'$nama','$username','$passoword','$email','$kelamin','$nohp','$alamat','2')");

 ?>

 <script type="text/javascript">
 	alert("registrasi telah berhasil");
 	window.location="../login.php";
 </script>