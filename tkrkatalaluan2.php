<?php

include("auth2.php");
include("db.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <title>P2A Enterprise</title>
      
  </head>
  <body>
    <div class="fixed-top bg-white p-2">
        <div class="container">
            
            <nav class="navbar navbar-light bg-white">
              <a class="navbar-brand" href="#">
                <h1>P2A<img src="image/nanas.png" width="40" height="50" class="d-inline-block align-bottom" alt="">Enterprise</h1>
              </a>
            </nav>
            
        </div>
      <nav class="navbar navbar-expand-lg bg-white navbar-light font-weight-bold" style="font-family:Bariol Regular">
          <div class="container">
              <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
              </button>
             <div class="collapse navbar-collapse " id="mainNav">
                <div class="navbar-nav">
                      <a class="nav-item nav-link active" href="#">Laman Utama</a>
                      <a class="nav-item nav-link" href="tempahsekarang2.php">Tempah Sekarang</a>
                      <a class="nav-item nav-link" href="lpadmin.php">Laporan Tempahan</a>
                      <a class="nav-item nav-link" href="lppadmin.php">Laporan Pengguna </a>
                      <a class="nav-item nav-link" href="lpsadmin.php">Laporan Statistik </a>
                    <a class="nav-item nav-link" href="lpaduan.php">Laporan Aduan</a>
                      <span style="width:200px;"></span>
                    
                      <a class="nav-item nav-link" href="#"><?php echo $_SESSION['namapengurus']; ?></a>
                      <a class="nav-item nav-link" href="logkeluar.php">Log Keluar</a>
                
              </div>
            </div>
             
          </div>
      </nav>
      </div>
      <br>    
      <br>
      <br>
      <br>
      <br>
      <br>
    
	<div class="container">
		<div class="content">
            
            
			<h2><a href="info.php">Biodata Pelanggan</a> &raquo; Ganti katalaluan</h2>
			<hr />
            <p>Ganti password pelanggan dengan id pelanggan <?php echo '<b>'.$_GET['idpelanggan'].'</b>'; ?></p>
            
			<?php
			if(isset($_POST['ganti'])){
                $idpelanggan		= $_GET['idpelanggan'];
				$katalaluan 	= md5($_POST['katalaluan']);
				$katalaluan1 	= $_POST['katalaluan1'];
				$katalaluan2 	= $_POST['katalaluan2'];

				$cek = mysqli_query($db, "SELECT * FROM pelanggan WHERE  idpelanggan='$idpelanggan' AND katalaluan='$katalaluan'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Katalaluan salah masukan katalaluan yang benar</div>';
				}else{
					if($katalaluan1 == $katalaluan2){
						if(strlen($katalaluan1) >= 6){
							$katal = md5($katalaluan1);
							$update = mysqli_query($db, "UPDATE pelanggan SET katalaluan='$katal' WHERE idpelanggan='$idpelanggan'");
							if($update){
								echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>katalaluan berhasil dirubah.</div>';
							}else{
								echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>katalaluan gagal dirubah.</div>';
							}
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Panjang karakter katalaluan minimal 6 karakter.</div>';
						}
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pasword tidak sama</div>';
					}
				}
			}
                        
			?>  

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">katalaluan Lama</label>
					<div class="col-sm-4">
						<input type="password" name="katalaluan" class="form-control" placeholder="katalaluan Lama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">katalaluan Baru</label>
					<div class="col-sm-4">
						<input type="password" name="katalaluan1" class="form-control" placeholder="katalaluan Baru" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Ulangi katalaluan Baru</label>
					<div class="col-sm-4">
						<input type="password" name="katalaluan2" class="form-control" placeholder="Ulangi katalaluan baru" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="ganti" class="btn btn-sm btn-info" value="Simpan">
						<a href="lppadmin.php" class="btn btn-sm btn-danger"><b>Batal</b></a>
					</div>
				</div>
			</form>
		</div>
	</div>
        
      

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
