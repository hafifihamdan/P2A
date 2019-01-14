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
      
      <div class="container">
	<div class="content">
			<h2>Data Pelanggan &raquo; Biodata</h2>
			<hr />
			
			<?php
			$idpelanggan = $_GET['idpelanggan'];
			
			$sql = mysqli_query($db, "SELECT * FROM pelanggan WHERE idpelanggan='$idpelanggan'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: lppadmin.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($db, "DELETE FROM pelanggan WHERE idpelanggan='$idpelanggan'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
				}
			}
			?>
			
			<table class="table table-striped table-condensed">
				<tr>
					<th width="20%">Id Pelanggan</th>
					<td><?php echo $row['idpelanggan']; ?></td>
				</tr>
				<tr>
					<th>Nama Pelanggan</th>
					<td><?php echo $row['Nama']; ?></td>
				</tr>
                
                <tr>
					<th>Emel</th>
					<td><?php echo $row['emel']; ?></td>
				</tr>
                
                <tr>
					<th>Alamat</th>
					<td><?php echo $row['alamat']; ?></td>
				</tr>
			
                <tr>
					<th>Bandar</th>
					<td><?php echo $row['bandar']; ?></td>
				</tr>
                
                <tr>
					<th>Negeri</th>
					<td><?php echo $row['negeri']; ?></td>
				</tr>
                
                <tr>
					<th>Poskod</th>
					<td><?php echo $row['poskod']; ?></td>
				</tr>
                
                 <tr>
					<th>No Telefon</th>
					<td><?php echo $row['notel']; ?></td>
				</tr>
                
			</table>
			
			<a href="lppadmin.php" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Kembali</a>
			<a href="editpelanggan.php?idpelanggan=<?php echo $row['idpelanggan']; ?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data</a>
			<a href="profilep.php?aksi=delete&idpelanggan=<?php echo $row['idpelanggan']; ?>" class="btn btn-sm btn-danger" <?php echo 'onclick="return confirm(\'Anda yakin akan menghapus data '.$row['Nama'].'?\')"'?>><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Hapus Data</a>
		</div>
	</div>
  
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
  <center>
    <p>&copy; Hak Cipta P2A Enterprise</p>
		</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>