 <div class="row">

                <div class="col-sm-6">

                    <div class="box-authentication">

                        
			<h2 class="page-heading">
            <span class="page-heading-title2">Beli Saldo</span>
        </h2>
		<br>
		<br>
		<h2 style="color:#f4425f">Ketentuan</h2>
		<br>
		<p style="color:#f4429b">Login dengan akun yang terdaftar, atau jika belum mempunyai akun anda diharap melakukan pendaftaran atau registrasi untuk dapat melakukan konfirmasi pembelian saldo.</P>
		<p style="color:#f4429b">BNI 0461158360.</P>
		<p style="color:#f4429b">BRI 168001000345536.</P>
		<p style="color:#f4429b">MANDIRI 1390010778227.</P>
		<p style="color:#f4429b">.</P>
        <br>

                        <form action="proses/hasil-upload-beli-saldo.php" method="POST" enctype='multipart/form-data'>

                         <input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'] ?>">

                        <label for="emmail_register">Nominal</label>

                        <input name="nominal" type="text" class="form-control">

                        <label for="emmail_register">Scan Bukti Transfer</label>

                        <input name="foto" type="file" class="form-control">

                        <input type="submit" value="Submit" class="button" name="btnUpload">

                        </form>

                    </div>

                </div>

               

            </div>