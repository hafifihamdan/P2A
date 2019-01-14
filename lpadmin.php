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
    <div class="container">
		<div class="content">
			

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$notempah= $_GET['notempah'];
				$cek = mysqli_query($db, "SELECT * FROM tempahan WHERE notempah='$notempah'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($db, "DELETE FROM tempahan WHERE notempah='$notempah'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berjaya dihapuskan.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapuskan.</div>';
					}
				}
			}
			?>
          
			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Filter Data Pelanggan</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<option value="Pembeli" <?php if($filter == 'Pembeli'){ echo 'selected'; } ?>>Pembeli</option>
						<option value="Peruncit" <?php if($filter == 'Peruncit'){ echo 'selected'; } ?>>Peruncit</option>
                        <option value="Pemborong" <?php if($filter == 'Pemborong'){ echo 'selected'; } ?>>Pemborong</option>
					</select>
                    <div class="pl-4">
                      <a href="lpadminpdf.php" title="Cetak" class="btn btn-primary btn-sm" target="_blank"><img src="image/icon/baseline_print_white_18dp.png"></a>
                        </div>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>Id</th>
					<th>gred</th>
                    <th>Kategori</th>
                    <th>Kuantiti</th>
                    <th>Tarikh tempah</th>
                    <th>jumlah</th>
                    <th>Tarikh isi tempah</th>
					<th>Emel Pelanggan</th>
                    <th>Status</th>
                    <th>Aksi</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($db, "SELECT * FROM tempahan WHERE kategori='$filter' ORDER BY notempah ASC");
				}else{
					$sql = mysqli_query($db, "SELECT * FROM tempahan ORDER BY notempah ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">Data Tidak Ada.</td></tr>';
				}else{
					$no = 1;
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$row['notempah'].'</td>
							<td>'.$row['gred'].'</td>
                            
                            <td>';
							if($row['kategori'] == 'Pembeli'){
								echo '<span class="label label-success">Pembeli</span>';
							}
                            else if ($row['kategori'] == 'Peruncit' ){
								echo '<span class="label label-info">Peruncit</span>';
							}
                            else if ($row['kategori'] == 'Pemborong' ){
								echo '<span class="label label-warning">Pemborong</span>';
							}
						      echo '
							</td>
                            

<td>'.$row['kuantiti'].'</td>
                            <td>'.$row['tarikhtempah'].'</td>
                            <td>'.$row['jumlah'].'</td>
                            <td>'.$row['tarikhisitempah'].'</td>
							<td>'.$row['emel'].'</td>
                            <td>'.$row['status'].'</td>
							<td>

								<a href="edit.php?notempah='.$row['notempah'].'" title="Edit Data" class="btn btn-primary btn-sm"><img src="image/icon/ic_mode_edit_white_18dp_1x.png"></a>
                                
								<a href="lpadmin.php?aksi=delete&notempah='.$row['notempah'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['kategori'].'?\')" class="btn btn-danger btn-sm"><img src="image/icon/ic_delete_white_18dp_1x.png"></a>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
