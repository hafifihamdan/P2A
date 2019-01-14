<?php

include("auth.php");

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
                      <a class="nav-item nav-link active" href="tentangkami2.php">Tentang Kami</a>
                      <a class="nav-item nav-link" href="hubungikami2.php">Hubungi Kami</a>
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
      
      
      <div class="container mt-4 mb-4">
          
          
          <div class="row">
                 <div class="col-md-6 col-lg-6">
                      <h1 class="display-4"> Tentang Kami</h1>
                        <p class="mt-4"> P2A Enterprise merupakan sebuah syarikat pengeluaran produk nanas yang dikendalikan ole Encik Hamdan Bin Ismail. Lokasi P2A Enterprise bertempat di Kampung Ga, Kubur Panjang, Pendang, Kedah.</p>
                 </div>
                  <div class="col-md-6 col-lg-6">
                        <img src="image/buahnanasmerah2.jpg" width="500px" height="400px">
                 </div>
                 
        </div>
          
          
         
          
         
          
          
      </div>
      
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
  </body>
</html>