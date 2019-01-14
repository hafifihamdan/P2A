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
                      <a class="nav-item nav-link active" href="lpadmin.php">Laporan Tempahan</a>
                      <a class="nav-item nav-link " href="lppadmin.php">Laporan Pengguna </a>
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
			<h3>Data Tempahan &raquo; Kemaskini Data Tempahan</h3>
			<hr />
			
			<?php
			$notempah = $_GET['notempah'];
			$sql = mysqli_query($db, "SELECT * FROM tempahan WHERE notempah='$notempah'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: lpadmin.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
                
				$notempah		  = $_POST['notempah'];
				$gred		     = $_POST['gred'];
				$kategori	     = $_POST['kategori'];
                $kuantiti	     = $_POST['kuantiti'];
                $tarikhtempah	 = $_POST['tarikhtempah'];
                $jumlah	 = $_POST['jumlah'];
                $status	 = $_POST['status'];
                $tarikhisitempah=date("Y-m-d");
                
				$update = mysqli_query($db, "UPDATE tempahan SET gred='$gred', kategori='$kategori', kuantiti='$kuantiti', tarikhtempah='$tarikhtempah', jumlah='$jumlah', tarikhisitempah='$tarikhisitempah',status='$status' WHERE notempah='$notempah'") or die(mysqli_error());
				if($update){
					header("Location: edit.php?notempah=".$notempah."&pesan=sukses");
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
						<input type="text" name="notempah" value="<?php echo $row ['notempah']; ?>" class="form-control" placeholder="notempah" required>
					</div>
				</div>
                
				<div class="form-group">
					<label class="col-sm-3 control-label">gred</label>
					<div class="col-sm-4">
						<input type="text" name="gred" value="<?php echo $row ['gred']; ?>" class="form-control" required>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">kategori</label>
					<div class="col-sm-2">
						<select name="kategori" class="form-control">
							<option value="">- Status Terbaru -</option>
                            <option value="Pembeli">Pembeli</option>
							<option value="Peruncit">Peruncit</option>
							<option value="Pemborong">Pemborong</option>
						</select> 
					</div>
                    <div class="col-sm-3">
                    <b>Kategori Sekarang :</b> <span class="label label-info"><?php echo $row['kategori']; ?></span>
				    </div>
                </div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">kuantiti</label>
					<div class="col-sm-4">
						<input type="number" id="kuantiti" name="kuantiti" onkeyup="calc(this)" value="<?php echo $row ['kuantiti']; ?>" class="form-control" required>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">Tarikh tempah</label>
					<div class="col-sm-4">
						<input type="date" name="tarikhtempah" value="<?php echo $row ['tarikhtempah']; ?>" class="form-control" required>
					</div>
				</div>
                
                <div class="form-group">
					<label class="col-sm-3 control-label">Jumlah</label>
					<div class="col-sm-4">
						 <span class="jum">RM
                        <span id="update2"><?php echo $row ['jumlah']; ?></span>
                        <input type="hidden" id="total" name="jumlah"  />
                     </span>
					</div>
				</div>
                
				 <div class="form-group">
					<label class="col-sm-3 control-label">status</label>
					<div class="col-sm-2">
						<select name="status" class="form-control">
							<option value="">- Status -</option>
                            <option value="Belum">Belum Selesai</option>
							<option value="Selesai">Selesai</option>
						</select> 
					</div>
                    <div class="col-sm-3">
                    <b>Status Sekarang :</b> <span class="label label-info"><?php echo $row['status']; ?></span>
				    </div>
                </div>
                
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-8">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan">
						<a href="lpadmin.php" class="btn btn-sm btn-danger">Batal</a>
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
    
    
      <script>
        var x = 0;
        var y = 3.00;
        var z = 0;
        var a = 0;
        function calc(obj) {
            var e = obj.id.toString();
            if (e == 'kuantiti') 
            {
                x = Number(obj.value);
            } 
            
            z = x * y;
            
            document.getElementById('total').value = z;
            document.getElementById('update2').innerHTML = z;
        }
    </script>
</body>
</html>