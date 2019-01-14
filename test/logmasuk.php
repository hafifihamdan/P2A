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
                      <a class="nav-item nav-link active" href="index.php">Laman Utama</a>
                      <a class="nav-item nav-link" href="aboutus.php">Tentang Kami</a>
                      <a class="nav-item nav-link" href="#">Hubungi Kami</a>
                      <a class="nav-item nav-link" href="#">Tempah Sekarang</a>
                      <span style="width:500px;"></span>
                      <a class="nav-item nav-link" href="login.php">Log Masuk</a>
                      <a class="nav-item nav-link" href="login.php">Daftar</a>
                
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
      
          <div class="container mb-5">
            
            
            <div class="row ">
                
                      <div class="col-sm-8">
                          <h1 class=" py-5 mt-4 display-4">Log Masuk Pengguna</h1>
                        </div>


                        <div class="col-sm-4 float-right">
                <form action="checklogin.php" method="post">
                  <div class="container form-group">
                    <label for="inputPassword6">Nama Pengguna</label>
                    <input type="text" id="username"  name="username" class="form-control mx-sm-3 mb-2" placeholder="nama pengguna">
                      <br>
                      
                    <label for="inputPassword6">Kata Laluan</label>
                    <input type="password" id="password" name="password" class="form-control mx-sm-3 mb-2" aria-describedby="passwordHelpInline" placeholder="kata laluan">
                      
                    <small id="passwordHelpInline" class="text-muted mx-sm-3 mb-2">
                      Must be 8-20 characters long.
                    </small>
                      <br>
                    <button type="submit" class="btn btn-primary mx-sm-3">Submit</button>
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
                 <div class="col-md-6 col-lg-2">
                     <h5>Refrence</h5>
                     <ul class="pt-4" style="list-style-type: none;">
                         <li>youtube</li>
                         <li>bootstrap</li>
                     </ul>
                 </div>
                  <div class="col-md-6 col-lg-2">
                 </div>
                  <div class="col-md-6 col-lg-2">
                 </div>
             </div>
             
         </div>
      
      </footer>
   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>