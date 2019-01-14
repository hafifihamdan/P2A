<?php session_start(); include 'db.php'; include("auth.php");?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
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
                      <a class="nav-item nav-link" href="pengguna.php">Laman Utama</a>
                      <a class="nav-item nav-link" href="tentangkami2.php">Tentang Kami</a>
                      <a class="nav-item nav-link" href="hubungikami2.php">Hubungi Kami</a>
                      <a class="nav-item nav-link" href="tempahsekarang.php">Tempah Sekarang</a>
                      <a class="nav-item nav-link active" href="testtable.php">Laporan Tempahan</a>
                      <span style="width:250px;"></span>
                    
                      <a class="nav-item nav-link" href="info.php"><?php echo $_SESSION['emel']; ?></a>
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
     
		
      
       <input type="hidden" name="idpelanggan" value="<?php echo $idpelanggan; ?>" />
    <div class="jumbotron jumbotron-fluid bg-success text-white" style="margin:0">
      <div class="container">
           <h3 class="display-4">Laporan Tempahan</h3>
          <div class="float-right">
      
        </div>
    </div>
        
      </div>
      <br>
     
      
      <div class="container">
	 <?php
			if(isset($_GET['aksi']) == 'delete'){
				$notempah= $_GET['notempah'];
				$cek = mysqli_query($db, "SELECT * FROM tempahan WHERE notempah='$notempah'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($db, "DELETE FROM tempahan WHERE notempah='$notempah'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}
			?>
	 <table class="table table-striped">
	 
	 <tr>
					<th>Id</th>
					<th>gred</th>
                    <th>Kategori</th>
                    <th>Kuantiti</th>
                    <th>Tarikh tempah</th>
                    <th>jumlah</th>
                    <th>Tarikh isi tempah</th>
                    <th>Tindakan</th>
		</tr>
		
   <?php
        $connection = mysql_connect("localhost", "root", "");
		$db = mysql_select_db("psm2", $connection);
         $query = mysql_query("select * from tempahan where emel='$_SESSION[emel]'", $connection);
      
         while($rows=mysql_fetch_array($query))
         {
        ?>

		
		
		<tr>
					<td><?php echo $rows['notempah'];?> </td>
					<td><?php echo $rows['gred'];?> </td>
                    <td><?php echo $rows['kategori'];?> </td>
                    <td><?php echo $rows['kuantiti'];?> </td>
                    <td><?php echo $rows['tarikhtempah'];?> </td>
                    <td><?php echo $rows['jumlah'];?> </td>
                    <td><?php echo $rows['tarikhisitempah'];?> </td>
                    <?php
                    echo'
					<td><a href="invoicedb.php?notempah='.$rows['notempah'].' title="Cetak" class="btn btn-primary btn-sm" target="_blank"><img src="image/icon/baseline_print_white_18dp.png"></a>
                  <a href="testtable.php?aksi=delete&notempah='.$rows['notempah'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$rows['emel'].'?\')" class="btn btn-danger btn-sm"><img src="image/icon/ic_delete_white_18dp_1x.png"></a></td>
                    
                    '?>
		</tr> 

<?php } ?>
</table>
      </div>
</body>
</html>