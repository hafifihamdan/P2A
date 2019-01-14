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
			
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$idpelanggan= $_GET['idpelanggan'];
				$cek = mysqli_query($db, "SELECT * FROM pelanggan WHERE idpelanggan='$idpelanggan'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($db, "DELETE FROM pelanggan WHERE idpelanggan='$idpelanggan'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}
			?>

			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Filter Data pelanggan</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<option value="YA" <?php if($filter == 'YA'){ echo 'selected'; } ?>>YA</option>
						<option value="TIDAK" <?php if($filter == 'TIDAK'){ echo 'selected'; } ?>>TIDAK</option>
                        
					</select>
                    <div class="pl-4">
                      <a href="lppadmin1pdf.php" title="Cetak" class="btn btn-primary btn-sm" target="_blank"><img src="image/icon/baseline_print_white_18dp.png"></a><span> Cetak Senarai Nama Pelanggan</span>
                        </div>
                    <div class="pl-4">
                      <a href="lppadmin2pdf.php" title="Cetak" class="btn btn-primary btn-sm" target="_blank"><img src="image/icon/baseline_print_white_18dp.png"></a><span> Cetak Alamat Pelanggan</span>
                        </div>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>Id</th>
					<th>Nama</th>
                    <th>Emel</th>
                    <th>Alamat</th>
                    <th>Bandar</th>
                    <th>Negeri</th>
                    <th>Poskod</th>
                    <th>Tarikh Lahir</th>
                    <th>No. Telefon</th>
                    <th>Status Padam</th>
                    <th>Aksi</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($db, "SELECT * FROM pelanggan WHERE status='$filter' ORDER BY idpelanggan ASC");
				}else{
					$sql = mysqli_query($db, "SELECT * FROM pelanggan ORDER BY idpelanggan ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Data Tidak Ada.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$row['idpelanggan'].'</td>
							<td><a href="profilep.php?idpelanggan='.$row['idpelanggan'].'"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> '.$row['Nama'].'</a></td>
                            <td>'.$row['emel'].'</td>
                            <td>'.$row['alamat'].'</td>
                            <td>'.$row['bandar'].'</td>
                            <td>'.$row['negeri'].'</td>
                            <td>'.$row['poskod'].'</td>
                            <td>'.$row['tarikhlahir'].'</td>
						    <td>'.$row['notel'].'</td>
                            
                            <td>';
							if($row['status'] == 'YA'){
								echo '<span class="label label-danger">YA</span>';
							}
                            else if ($row['status'] == 'TIDAK' ){
								echo '<span class="label label-success">TIDAK</span>';
							}
                         
                        
						echo '
							</td>
                    
                            
							<td>

								<a href="editpelanggan.php?idpelanggan='.$row['idpelanggan'].'" title="Edit Data" class="btn btn-primary btn-sm"><img src="image/icon/ic_mode_edit_white_18dp_1x.png"></a>
								<a href="tkrkatalaluan2.php?idpelanggan='.$row['idpelanggan'].'" title="Ganti Password" data-placement="bottom" data-toggle="tooltip" class="btn btn-warning btn-sm"><img src="image/icon/ic_autorenew_white_18dp_1x.png"></a>
								<a href="lppadmin.php?aksi=delete&idpelanggan='.$row['idpelanggan'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['Nama'].'?\')" class="btn btn-danger btn-sm"><img src="image/icon/ic_delete_white_18dp_1x.png"></a>
							</td>
						</tr>
						';
						$no++;
					}
				}
				?>
			</table>
			</div>
		</div>
   </div>

      <br/>
      <br/>
      <br/>
        <center>
    <p>&copy;2018 Hak Cipta P2A Enterprise -Bahagian Pengurusan Maklumat</p>
		</center>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>