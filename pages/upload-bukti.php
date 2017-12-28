 <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3> Upload Bukti Transfer</h3>
                        <form action="proses/hasil-upload-bukti.php" method="POST" enctype='multipart/form-data'>
                         <input type="hidden" name="iduser" value="<?php echo $_SESSION['id_user'] ?>">
                        <label for="emmail_register">Kode Transaksi</label>
                        <input name="kode" type="text" class="form-control">
                        <label for="emmail_register">Scan Bukti</label>
                        <input name="foto" type="file" class="form-control">
                        <input type="submit" value="Submit" class="button" name="btnUpload">
                        </form>
                    </div>
                </div>
               
            </div>