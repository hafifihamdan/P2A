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
                      <a class="nav-item nav-link active" href="lppadmin.php">Laporan Pengguna </a>
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
      <br>
      <br>
      <br>
	<div class="container">
		<div class="content">
			<h3>Data Pelanggan &raquo; Kemaskini Data Pelanggan</h3>
			<hr />
			
			<?php
			$idpelanggan = $_GET['idpelanggan'];
			$sql = mysqli_query($db, "SELECT * FROM pelanggan WHERE idpelanggan='$idpelanggan'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: lppadmin.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
                
                
				$idpelanggan     = $_POST['idpelanggan'];
				$Nama	 = $_POST['Nama'];
				$emel	 = $_POST['emel'];
                $alamat	 = $_POST['alamat'];
                $bandar	 = $_POST['bandar'];
                $negeri	 = $_POST['negeri'];
                $poskod	 = $_POST['poskod'];
                $tarikhlahir = $_POST['tarikhlahir'];
                $notel	 = $_POST['notel'];
                
				$update = mysqli_query($db, "UPDATE pelanggan SET Nama='$Nama', emel='$emel', alamat='$alamat' , bandar='$bandar', negeri='$negeri', poskod='$poskod', tarikhlahir='$tarikhlahir' , notel='$notel' WHERE idpelanggan='$idpelanggan'") or die(mysqli_error());
				if($update){
					header("Location: editpelanggan.php?idpelanggan=".$idpelanggan."&pesan=sukses");
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
					<label class="col-sm-3 control-label">id</label>
					<div class="col-sm-4">
						<input type="text" name="idpelanggan" value="<?php echo $row ['idpelanggan']; ?>" class="form-control" placeholder="idpelanggan" required>
					</div>
				</div>
                
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="Nama" value="<?php echo $row ['Nama']; ?>" class="form-control" required>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">Emel</label>
					<div class="col-sm-4">
						<input type="email" name="emel" value="<?php echo $row ['emel']; ?>" class="form-control" required>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">Alamat</label>
					<div class="col-sm-4">
						<input type="text" name="alamat" value="<?php echo $row ['alamat']; ?>" class="form-control" required>
					</div>
				</div>
                
                  <div class="form-group">
					<label class="col-sm-3 control-label">Bandar</label>
					<div class="col-sm-4">
						<input type="text" name="bandar" value="<?php echo $row ['bandar']; ?>" class="form-control" required>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">Negeri</label>
					<div class="col-sm-2">
						<select name="negeri" class="form-control">
							<option value="">- Status Terbaru -</option>
                              <option value="Perlis">Perlis</option>
                              <option value="Kedah">Kedah</option>
                              <option value="Penang">Penang</option>
                              <option value="Perak">Perak</option>
                              <option value="Kuala Lumpur">Kuala Lumpur</option>
                              <option value="Selangor">Selangor</option>
                              <option value="Negeri Sembilan">Negeri Sembilan</option>
                              <option value="Melaka">Melaka</option>
                              <option value="Johor">Johor</option>
                              <option value="Kelantan">Kelantan</option>
                              <option value="Terengganu">Terengganu</option>
                              <option value="Pahang">Pahang</option>
						</select> 
					</div>
                    <div class="col-sm-3">
                    <b>Status Sekarang :</b> <span class="label label-info"><?php echo $row['negeri']; ?></span>
				    </div>
                </div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">Poskod</label>
					<div class="col-sm-4">
						<input type="poskod" id="kuantiti" name="poskod" value="<?php echo $row ['poskod']; ?>" class="form-control" required>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">Tarikh Lahir</label>
					<div class="col-sm-4">
						<input type="date" name="tarikhlahir" value="<?php echo $row ['tarikhlahir']; ?>" class="form-control" required>
					</div>
				</div>
            
                 <div class="form-group">
					<label class="col-sm-3 control-label">No Telefon</label>
					<div class="col-sm-4">
						<input type="text" id="notel" name="notel" value="<?php echo $row ['notel']; ?>" class="form-control" required>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-8">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
						<a href="lppadmin.php" class="btn btn-sm btn-danger">Batal</a>
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