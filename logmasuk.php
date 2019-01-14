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
  <body style="background-image: url('image/DSC_0013.jpg');">
    <div class="fixed-top bg-white p-2">
        <div class="container">
            
            <nav class="navbar navbar-light bg-white">
              <a class="navbar-brand" href="index.php">
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
                      <a class="nav-item nav-link" href="index.php">Laman Utama</a>
                      <a class="nav-item nav-link" href="tentangkami.php">Tentang Kami</a>
                      <a class="nav-item nav-link" href="hubungikami.php">Hubungi Kami</a>
                      <a class="nav-item nav-link" href="#">Tempah Sekarang</a>
                      <span style="width:500px;"></span>
                    
                      <a class="nav-item nav-link active" href="logmasuk.php">Log Masuk</a>
                      <a class="nav-item nav-link" href="daftar.php">Daftar</a>
                
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
      
    <div class="container mb-5">

            <div class="row " >
                
                      <div class="col-sm-8" >
                        <h1 class=" py-5 display-2 text-white">Log Masuk Pengguna</h1>
                        <a href="logmasuk.php" class="btn btn-success">Pengguna</a>
                        <a href="logadmin.php" class="btn btn-success">Pengurus</a>
                        </div>
                        <br>
            
                <div class="col-sm-4 float-right  bg-white text-dark">
                <form action="checklogin.php" method="post" class="pt-5">
                  <div class="container form-group">
                    <label for="inputPassword6">Emel Pengguna</label>
                    <input type="email" id="emel"  name="emel" class="form-control mx-sm-3 mb-2" placeholder="emel" required>
                      <br>
                      
                    <label for="inputPassword6">Kata Laluan</label>
                    <input type="password" id="katalaluan" name="katalaluan" class="form-control mx-sm-3 mb-2" aria-describedby="passwordHelpInline" placeholder="kata laluan" required>
                      
                      
                        <?php 
                      if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') {
                            ?><span class="text-danger mx-sm-3 mb-2 ">salah emel dan katalaluan</span><?php
                            }?>
                      <br>
                    <button type="submit" class="btn btn-success mr-sm-1 float-right">Log masuk</button>
                      <br>
                  </div>
                </form>
             </div>
               
        </div>
                          
        <br>
    </div>
      
      <br>
      
   <br>
      <br><br>
     
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
  </body>
</html>