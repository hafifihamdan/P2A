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
                <h1>P2A<img src="image/nanas.png" width="40" height="50" class="d-inline-block align-bottom" alt="">Enterprise</h1><h5>Bahagian Pengurusan</h5>
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
                      <a class="nav-item nav-link" href="pentadbir.php">Laman Utama</a>
                      <a class="nav-item nav-link" href="tempahsekarang2.php">Tempah Sekarang</a>
                      <a class="nav-item nav-link" href="lpadmin.php">Laporan Tempahan</a>
                      <a class="nav-item nav-link " href="lppadmin.php">Laporan Pengguna </a>
                      <a class="nav-item nav-link" href="lpsadmin.php">Laporan Statistik </a>
					  <a class="nav-item nav-link active" href="lpaduan.php">Laporan Aduan</a>
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
      <br>
      <br>
      <br>
	<div class="container">
		<div class="content">
			<h3>Data Aduan &raquo; Kemaskini Status</h3>
			<hr />
			
			<?php
			$idaduan = $_GET['idaduan'];
			$sql = mysqli_query($db, "SELECT * FROM aduan WHERE idaduan='$idaduan'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
                

                $status     = $_POST['status'];
                $tarikhisitempah=date("Y-m-d");
                
				$update = mysqli_query($db, "UPDATE aduan SET status='$status' WHERE idaduan='$idaduan'") or die(mysqli_error());
				if($update){
					header("Location: editaduan.php?idaduan=".$idaduan."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<div class="col-sm-4">
						ID aduan <span class="font-weight-bold"><?php echo $row ['idaduan']; ?></span>
					</div>
				</div>
               
                
                <div class="form-group">
					<div class="form-group">
					<div class="col-sm-4">
                        <span class="pr-4">Nama</span> <span class="font-weight-bold"><?php echo $row ['nama']; ?></span>
					</div>
				</div>
				</div>
                
                <div class="form-group">
					<div class="form-group">
					<div class="col-sm-4">
                        <span class="pr-4">Emel</span>&nbsp;&nbsp;&nbsp;<span class="font-weight-bold"><?php echo $row ['emel']; ?></span>
					</div>
				</div>
				</div>
                <br>
                <br>
                <div class="form-group">
					<label class="col-sm-3 control-label">Maklumat aduan</label>
					<div class="col-sm-4">
						<span class="font-weight-bold"> <?php echo $row ['maduan']; ?></span>
					</div>
				</div>
                <br>
                <br>
                 <div class="form-group">
					<label class="col-sm-3 control-label">Status</label>
					<div class="col-sm-4">
                 <select id="status" class="form-control" name="status">
                            <option selected>Choose...</option>
                              <option value="BelumSelesai">Belum Selesai</option>
                              <option value="DalamProses">Dalam Proses</option>
                              <option value="Selesai">Selesai</option>
                 </select>
                  </div>
                </div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-8">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
						<a href="index.php" class="btn btn-sm btn-danger">Batal</a>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
    <script>
	$('.date').datepicker({
		format: 'dd-mm-yyyy',
	})
    </script>
    
      
</body>
</html>