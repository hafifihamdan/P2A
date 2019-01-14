<?php

include("auth2.php");

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
                      <a class="nav-item nav-link active" href="tempahsekarang2.php">Tempah Sekarang</a>
                      <a class="nav-item nav-link " href="lpadmin.php">Laporan Tempahan</a>
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
     
      
        
      <div class="container" >
                    
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Semua</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tempahA" role="tab" aria-controls="profile" aria-selected="false">Gred A</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tempahB" role="tab" aria-controls="contact" aria-selected="false">Gred B</a>
                      </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tempahC" role="tab" aria-controls="contact" aria-selected="false">Gred C</a>
                      </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tempahD" role="tab" aria-controls="contact" aria-selected="false">Gred D</a>
                      </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#anakpokok" role="tab" aria-controls="contact" aria-selected="false">Anak Pokok</a>
                      </li>
                    
                    </ul>
                
                
                
                    <div class="tab-content p-3" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <div class="row">
                                     <div class="col-sm-4 p-4">
                                      <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/gredA.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred A</h5>
                                                <p class="card-text">Berat : 1.8kg keatas <br>Harga: RM 3.00</p>
                                                <a href="tempahAp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                      </div>
                              
                              
                            
                                        <div class="col-sm-4 p-4">
                                       <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/gredB.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred B</h5>
                                                <p class="card-text">Berat : 1.5kg-1.8kg<br>Harga : RM 2.00</p>
                                                <a href="tempahBp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                          </div>
                              
                              

                                       <div class="col-sm-4 p-4">
                                       <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/gredC.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred C</h5>
                                                <p class="card-text">Berat : 900gram-1.5kg<br>Harga : RM 1.50</p>
                                                <a href="tempahCp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                      </div>
                          </div>
                          
                          <div class="row">
                                     <div class="col-sm-4 p-4">
                                      <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/gredD.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred D</h5>
                                                <p class="card-text">Berat : 900gram kebawah<br>Harga : RM 1.00</p>
                                                <a href="tempahDp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                      </div>
                              
                              
                            
                                        <div class="col-sm-4 p-4">
                                       <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/anakpokok.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Anak Pokok</h5>
                                                <p class="card-text"><br>Sepokok Harga : RM 0.50</p>
                                                <a href="tempahAnkp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                          </div>
                              
                          </div>
                          
                        </div>
                      <div class="tab-pane fade" id="tempahA" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="row">
                                     <div class="col-sm-4 p-4">
                                      <div class="card" style="width: 18rem;">
                                               <img class="card-img-top" src="image/produk/gredA.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred A</h5>
                                                <p class="card-text">Berat : 1.8kg keatas <br>Harga: RM 3.00</p>
                                                <a href="tempahAp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                      </div>
                              
                            
                          </div>
                      </div>
                      <div class="tab-pane fade" id="tempahB" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="row">
                                     <div class="col-sm-4 p-4">
                                       <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/gredB.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred B</h5>
                                                <p class="card-text">Berat : 1.5kg-1.8kg<br>Harga : RM 2.00</p>
                                                <a href="tempahBp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                      </div>
                              
                            
                          </div>
                      </div>
					   <div class="tab-pane fade" id="tempahC" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="row">
                                      <div class="col-sm-4 p-4">
                                       <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/gredC.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred C</h5>
                                                <p class="card-text">Berat : 900gram-1.5kg<br>Harga : RM 1.50</p>
                                                <a href="tempahCp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                      </div>
                              
                            
                          </div>
                      </div>
                        
                    <div class="tab-pane fade" id="tempahD" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="row">
                                     <div class="col-sm-4 p-4">
                                      <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/gredD.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Gred D</h5>
                                                <p class="card-text">Berat : 900gram kebawah<br>Harga : RM 1.00</p>
                                                <a href="tempahDp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                      </div>
                              
                            
                          </div>
                      </div>
                        
                        
                        <div class="tab-pane fade" id="anakpokok" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="row">
                                    <div class="col-sm-4 p-4">
                                       <div class="card" style="width: 18rem;">
                                              <img class="card-img-top" src="image/produk/anakpokok.jpg" alt="Card image cap">
                                              <div class="card-body">
                                                <h5 class="card-title">Anak Pokok</h5>
                                                <p class="card-text"><br>Sepokok Harga : RM 0.50</p>
                                                <a href="tempahAnkp.php" class="btn btn-success float-right">Tempah</a>
                                              </div>
                                        </div>
                                    </div>
                            
                          </div>
                      </div>
            </div>
            
        <br>
      <br>
      <br>
      <br>
      <br>
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