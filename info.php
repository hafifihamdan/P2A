<?php
include("auth.php");
 $connection = mysql_connect("localhost", "root", "");
 $db = mysql_select_db("psm2", $connection);
 $query = mysql_query("select * from pelanggan WHERE emel='$_SESSION[emel]'", $connection);
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
                     <a class="nav-item nav-link" href="pengguna.php">Laman Utama</a>
                      <a class="nav-item nav-link" href="tentangkami2.php">Tentang Kami</a>
                      <a class="nav-item nav-link" href="hubungikami2.php">Hubungi Kami</a>
                      <a class="nav-item nav-link" href="tempahsekarang.php">Tempah Sekarang</a>
                      <a class="nav-item nav-link" href="testtable.php">Laporan Tempahan</a>
                      <span style="width:250px;"></span>
                    
                      <a class="nav-item nav-link active" href="info.php"><?php echo $_SESSION['emel']; ?></a>
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
        <div>
			<h3>Biodata Pelanggan</h3>
		</div>
		<br>
                <div>  
                  <?php
						  
						while ($row = mysql_fetch_array($query)) {
				 
				?>
				
			
			<div class="row">
					<div class="col-sm-2">
						Nama

					</div>
					<div class="col-sm-4">
						<?php echo $row ['Nama']; ?>
					</div>
			</div>
			<br/>
			<div class="row">
					<div class="col-sm-2">
						Emel
					</div>
					<div class="col-sm-4">
						<?php echo $row ['emel']; ?>
					</div>
			</div>
			<br/>
			<div class="row">
					<div class="col-sm-2">
						Tarikh Lahir
					</div>
					<div class="col-sm-4">
						<?php echo $row ['tarikhlahir']; ?>
					</div>
			</div>
			
			<br/>
			<div class="row">
					<div class="col-sm-2">
						Alamat
					</div>
					<div class="col-sm-4">
						<?php echo $row ['alamat']; ?>
						<?php echo $row ['poskod']; ?>
						<?php echo $row ['bandar']; ?>
						<?php echo $row ['negeri']; ?>
					</div>
			</div>
			
			<br/>
			<div class="row">
					<div class="col-sm-2">
						No. Telefon
					</div>
					<div class="col-sm-4">
						<?php echo $row ['notel']; ?>
					</div>
			</div>
			
			<br>
			<div class="row">
					<div class="col-sm-2">
						
					</div>
					<div class="col-sm-4">
				<?php
				    
                        
				 	
                    echo '	<a href="tkrkatalaluan.php?='.$row['idpelanggan'].'" title="Tukar Katalaluan" class="btn btn-success btn-sm float-right mr-2">Tukar Katalaluan</a>';
                    
                    echo '	<a href="editbiodata.php?='.$row['idpelanggan'].'" title="Hapus Data" class="btn btn-primary btn-sm float-right mr-2">Kemaskini</a>';
				 }
				 ?>
					</div>
			</div>
			
			
				 
				 </div>
      <br>
	  <br>
	  <br>
	  <br>
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js"></script>
      
</body>
</html>