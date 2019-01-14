<?php
 session_start();
include("auth.php");
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
                      <a class="nav-item nav-link" href="pengguna.php">Laman Utama</a>
                      <a class="nav-item nav-link" href="tentangkami2.php">Tentang Kami</a>
                      <a class="nav-item nav-link active" href="hubungikami2.php">Hubungi Kami</a>
                      <a class="nav-item nav-link" href="tempahsekarang.php">Tempah Sekarang</a>
                      <a class="nav-item nav-link" href="testtable.php">Laporan Tempahan</a>
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
      <br>
      <br>
      <br>
      
      <?php
			
			$sql = mysqli_query($db, "SELECT * FROM pelanggan WHERE emel='$_SESSION[emel]'");
		    $row = mysqli_fetch_assoc($sql);
			
			if(isset($_POST['save']))
            {
				$nama=$_POST['nama'];
                $emel=$_POST['emel'];
                $notelad=$_POST['notelad'];
                $maduan=$_POST['maduan'];
                $tarikhaduan=date("Y-m-d");
                
				$update = mysqli_query($db, "INSERT INTO aduan(nama,emel,notelad,maduan,tarikhaduan) VALUES ('$nama','$emel','$notelad','$maduan','$tarikhaduan')") or die(mysqli_error());
				Print '<script>alert("Maklumat Aduan Berjaya Dihantar");</script>';
			}
		
			?>
      <div class="container mt-4 mb-4">
          
          
          <div class="row">
                 <div class="col-md-6 col-lg-6">
                      <h1 class="display-4">Hubungi Kami</h1>
                        <br>
                        <br>
                        <p class="mt-4">
                        <span class="font-weight-bold">P2A ENTERPRISE (RA0049158),</span><br>
                        KAMPUNG BELAT, KUBUR PANJANG<br>
                        06760 PENDANG,<br>
                        KEDAH,
                        <br>
                        <br>
                         <img src="image/icon/baseline_local_phone_black_18dp.png" width="30px">&nbsp;Tel/whatapps : +60194118619 (Hamdan)<br><br>
                          <img src="image/icon/baseline_email_black_18dp.png" width="30px">&nbsp;Email : hamdanismail@gmail.com
                        </p>
                 </div>
              
                   <div class="col-md-6 col-lg-6">
                       
                     <div id="map_div" style="width: 500px; height: 400px"></div>
                 </div>
                 
              
             
                
        </div>
            <br>
            <br>
            <br>
            <br>
            <br>
           
           <p>*Sebarang pertanyaan anda boleh isi borang aduan di bawah</p>
              <form action="hubungikami2.php" method="post">
                   <div class="row">
                        <div class="col">
                          <label for="exampleFormControlTextarea1">Nama</label>
                          <input type="text" class="form-control"  id="nama" name="nama" placeholder="Nama penuh" value="<?php echo $row ['Nama']; ?>">
                        </div>
                        <div class="col">
                          <label for="exampleFormControlTextarea1">Emel</label>
                          <input type="email" class="form-control" id=emel"" name="emel" placeholder="namapengguna@emel.com" value="<?php echo $row ['emel']; ?>">
                        </div>
                       <div class="col">
                          <label for="exampleFormControlTextarea1">No Telefon</label>
                          <input type="text" class="form-control" id="notelad" name="notelad" placeholder="telefon bimbit" value="<?php echo $row ['notel']; ?>">
                        </div>
                      </div>
                  
                  
                    <div class="form-group pt-4">
                        <label for="exampleFormControlTextarea1">Pertanyaan/Cadangan/Aduan</label>
                        <textarea class="form-control" name="maduan" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  <div class="form-group col-md-8">
                      <input type="submit" name="save" class="btn btn-sm btn-primary" value="Hantar">
                     </div>
            </form>
          
      </div>
      
            <br>
            <br>
            <br>
            <br>
            <br>
      
     <footer class="jumbotron jumbotron-fluid bg-dark text-white" style="margin:0">
         <div class="container">
             <div class="row">
                 <div class="col-4">
                     <h5>Kerjasama</h5>
                     <br>
                     <center>
                     <ul class="pt-md-4" style="list-style-type: none;">
                         <li><img src="image/mpib.png" style="width:300px;"></li>
                    </ul>
                     </center>
                 </div>
                  <div class="col-md-4">
                      <br>
                      <br>
                      <center>
                     <ul class="pt-md-4" style="list-style-type: none;">
                         
                         <li><img src="image/ssm.png" style="width:200px;"></li>
                     </ul>
                    </center>
                 </div>
                  <div class="col-md-4">
                      <br>
                      <center>
                     <ul class="pt-md-4" style="list-style-type: none;">
                         <li><img src="image/logo-FAMA-Vector-720x340.png" style="width:100px;"></li>
                     </ul>
                          
                  </center>
                      
                 </div>
             </div>
             
         </div>
         <br>
         <br>
        <p class="text-center font-weight-light">&copy;P2A Enterprise 2018- Sistem Pengurusan Tempahan Buah Nanas Dibangunkan oleh Syarikat P2A Enterprise</p>
      </footer>
   
      
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      
      
          <script type="text/javascript">
      google.charts.load("current", {
        "packages":["map"],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        "mapsApiKey": "AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY"
    });
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Lat', 'Long', 'Name'],
          [6.058143, 100.566301, 'P2A Enterprise'],
        ]);

        var map = new google.visualization.Map(document.getElementById('map_div'));
        map.draw(data, {
        mapType: 'styledMap',
        zoomLevel: 17,
        showTooltip: true,
        showInfoWindow: true,
        useMapTypeControl: true,
        });
      } 
      
    
      </script>
     
      
      
  </body>
</html>

