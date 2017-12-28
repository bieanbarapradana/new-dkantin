<?php 
	session_start();
	include "../include/koneksi.php";

		$user=$_POST['username'];
		$pass=md5($_POST['password']);

			$query=mysql_query("SELECT * FROM tb_akun WHERE username='$user' AND password='$pass' ");
			$data=mysql_fetch_array($query);
			$jumlah=mysql_num_rows($query);

				if($jumlah > 0){
					$_SESSION['id_user']=$data['id_user'];
					$_SESSION['nama']=$_data['nama'];
					$_SESSION['username']=$data['username'];
					$_SESSION['password']=$data['password'];
					$_SESSION['email']=$data['email'];
					$_SESSION['kelamin']=$data['kelamin'];
					$_SESSION['no_hp']=$data['no_hp'];
					$_SESSION['alamat']=$data['alamat'];
					$_SESSION['saldo']=$data['saldo'];
					$_SESSION['level']=$data['level'];

						if($data['level']==2){
							header("location: ../index.php");
						}
				}else{
					?>

					<script>
						alert("username atau password anda salah");
						window.location="../login.php";
					</script>
					<?php
				}


 ?>