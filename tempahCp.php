<?php

include("auth2.php");
include("bookdata1p.php");
?>

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
                      <a class="nav-item nav-link" href="lpadmin.php">Laporan Tempahan</a>
                      <a class="nav-item nav-link " href="lppadmin.php">Laporan Pengguna </a>
                      <a class="nav-item nav-link" href="lpsadmin.php">Laporan Statistik </a>
					  <a class="nav-item nav-link " href="lpaduan.php">Laporan Aduan</a>
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
      
      
    <div class="jumbotron jumbotron-fluid bg-success text-white" style="margin:0">
      <div class="container">
           <h3 class="display-4">Laman Tempahan</h3>
          <div class="float-right">
        <form class="form-inline my-2 my-lg-0">
                            
       </form>
        </div>
    </div>
        
      </div>
    <br>
      
        
      <div class="container">
                
                <div class="row">
                    
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="tempahsekarang2.php">Menu</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Tempah</li>
                              </ol>
                        </nav>
                    </div>
                    <div class="col-sm-6 pt-4">
                        <img src="image/produk/gredA.jpg" style="width: 40rem;">
                    
                    </div>
                 
                <div class="col-sm-6 pt-4">
                    
                 <form action="bookdataCp.php" method="post">
                     
                       <h5 class="card-title">Gred C</h5>
                     <p class="card-text">Berat : 900gram keatas <br>Harga: RM 1.50</p>
                      
                        <div class="form-group col-md-8">
                          <label for="inputemel">emel</label>
                          <input type="email" class="form-control" id="emel" name="emel">
                        </div>
                    
					  
					  <div class="form-row col-md-8">
                         
                           <label for="inputState">Kategori</label>
                         <select id="kategori" class="form-control" name="kategori">
                            <option selected>Choose...</option>
                              <option>Pembeli</option>
                              <option>Peruncit</option>
                              <option>Pemborong</option>
                          </select>
                      </div>
                        <br>
                     
                        <div class="form-group col-md-8">
                          <label for="inputCity">Kuantiti</label>
                          <input type="number" class="form-control" id="kuantiti" name="kuantiti" onkeyup="calc(this)">
                        </div>
                    
                         <div class="form-group col-md-8">
                        <label for="inputAddress2">Pilih Tarikh Tempah</label>
                        <input type="date" class="form-control" id="tarikhtempah" name="tarikhtempah">
                        </div>
                     
                         <div class="form-group col-md-8">
                        <span class="jum">RM
                        <span id="update">0</span>
                        <input type="hidden" id="total" name="jumlah" value="0" />
                     </span>
                     </div>
                     <div class="form-group col-md-8">
                      <button type="submit" class="btn btn-success float-right">Tempah</button>
                     </div>
            </form>
                     <br><br><p class="font-weight-bold">* 5% diskaun bagi kuantiti yang tidak kurang 20 hingga 100<br>* 10% diskaun bagi kuantiti yang melebihi 100</p>
             </div>
                    </div>
            
      
      </div>
            
        <br>
      <br>
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
      
      <!-- calculate -->
       <script>
        var x = 0;
        var y = 1.50;
        var z = 0;
        var a = 0;
        var b = 0;
        function calc(obj)
        {
            var e = obj.id.toString();
            if (e == 'kuantiti') 
            {
                x = Number(obj.value);
                if(x<=20)
                    {
                        a=x*y;
                        t=a;
                    }
                 else if((x>20)&&(x<100))
                    {
                        a=x*y;
                        b=0.05*a;
                        t=a-b;
                    }
                else if(x>=100)
                    {
                        a=x*y;
                        b=0.10*a;
                        t=a-b;
                    }
            } 
            
            z = t;
            
            document.getElementById('total').value = z.toFixed(2);
            document.getElementById('update').innerHTML = z.toFixed(2);
        }
    </script>
      
  </body>
</html>