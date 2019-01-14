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
                      <a class="nav-item nav-link" href="index.php">Laman Utama</a>
                      <a class="nav-item nav-link" href="tentangkami.php">Tentang Kami</a>
                      <a class="nav-item nav-link" href="hubungikami.php">Hubungi Kami</a>
                      <a class="nav-item nav-link" href="#">Tempah Sekarang</a>
                      <span style="width:500px;"></span>
                    
                      <a class="nav-item nav-link" href="logmasuk.php">Log Masuk</a>
                      <a class="nav-item nav-link active" href="daftar.php">Daftar</a>
                
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
         <div class="row">
             <div class="col-sm-5 text-center">
                <img src="image/daftar.png" width="300">
             </div>
             
             <div class="col-sm-7">
                 <form action="register.php" method="post">
                      <div class="form-row">
                          
                         <div class="form-group col-md-6">
                          <label for="inputEmail4">Nama</label>
                          <input type="text" pattern="^[A-Z\s]{1,100}$" class="form-control" placeholder="Nama" name="Nama" required>
                        </div>
                          
                          <div class="form-group col-md-6">
                          
                        </div>
                          
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Emel</label>
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Emel" name="emel" required>
                        </div>
                          
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Kata Laluan</label>
                          <input type="password" pattern=".{8,12}" class="form-control" id="inputPassword4" placeholder="Kata Laluan" name="katalaluan" required>
                              <small id="passwordHelpInline" class="text-muted">
                                  Panjang mesti 8-12 aksara.
                                </small>
                        </div>
                      </div>
                  
                      <div class="form-group">
                        <label for="inputAddress">Alamat</label>
                        <input type="text" class="form-control" id="inputAddress" name="alamat" required>
                      </div>
                     
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputCity">Bandar</label>
                          <input type="text" class="form-control" pattern="^[A-Z\s]{1,20}$" id="inputCity" name="bandar" required>
                        </div>
                          
                        <div class="form-group col-md-4">
                          <label for="inputState">Negeri</label>
                          <select id="inputState" class="form-control" name="negeri" required>
                            <option selected>Choose...</option>
                              <option>Perlis</option>
                              <option>Kedah</option>
                              <option>Pulau Pinang</option>
                              <option>Perak</option>
                              <option>Kuala Lumpur</option>
                              <option>Selangor</option>
                              <option>Negeri Sembilan</option>
                              <option>Melaka</option>
                              <option>Johor</option>
                              <option>Kelantan</option>
                              <option>Terengganu</option>
                              <option>Pahang</option>
                          </select>
                        </div>
                          
                        <div class="form-group col-md-2">
                          <label for="inputZip">Poskod</label>
                          <input type="text" class="form-control" pattern="[0-9]{5}" id="inputZip"  minlength="5" maxlength="5" name="poskod"  required>
                        </div>
                      </div>
                  
                      <div class="form-group">
                        <label for="inputAddress2">tarikh lahir</label>
                        <input type="date" class="form-control" id="inputAddress2" name="tarikhlahir" required>
                      </div>
                  
                   <div class="form-group">
                        <label for="no">No. Telefon</label>
                        <input type="text" class="form-control" pattern="[0-9]{10}" id="text" name="notel" required>
                    </div>
                    
                    
                     <div class="float-right">
                      <button type="submit" class="btn btn-success ">Daftar</button>
                     
                     <button type="reset" class="btn btn-primary ">Tetapan Semula</button>
                     </div>
            </form>
             </div>
             
         </div>
      
      
     </div>
      <br>
      <br>
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