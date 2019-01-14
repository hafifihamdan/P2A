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
                      <a class="nav-item nav-link active" href="#">Laman Utama</a>
                      <a class="nav-item nav-link" href="aboutus.php">Tentang Kami</a>
                      <a class="nav-item nav-link" href="#">Hubungi Kami</a>
                      <a class="nav-item nav-link" href="tempahsekarang.php">Tempah Sekarang</a>
                      <span style="width:443px;"></span>
                    
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
    
    <div class="container">
        
                <div>  
                <?php
                $connection = mysql_connect("localhost", "root", "");
                $db = mysql_select_db("psm2", $connection);
                if (isset($_GET['submit'])) 
                {
                $id = $_GET['did'];
                $name = $_GET['dname'];
                $email = $_GET['demail'];

                $query = mysql_query("update pelanggan set Nama='$name', emel='$email' where idpelanggan='$id'", $connection);
                }
                $query = mysql_query("select * from pelanggan", $connection);
                while($row = mysql_fetch_array($query))
                {
                echo "<b><a href='info.php?update={$row['idpelanggan']}'>{$row['Nama']}</a></b>";
                echo "<br />";
                }
                ?>
                </div>
        
        
                <?php
                if (isset($_GET['update'])) 
                {
                $update = $_GET['update'];
                $query1 = mysql_query("select * from pelanggan where idpelanggan=$update", $connection);
                while ($row1 = mysql_fetch_array($query1)) 
                {
                echo "<form class='form' method='get'>";
                echo "<h2>Personal Infomation</h2>";
                echo "<hr/>";
                echo"<input class='input' type='hidden' name='did' value='{$row1['idpelanggan']}' />";
                echo "<br />";
                echo "<label>" . "Name:" . "</label>" . "<br />";
                echo"<input class='input p-2 form-control' type='text' name='dname' value='{$row1['Nama']}' />";
                echo "<br />";
                echo "<label>" . "Email:" . "</label>" . "<br />";
                echo"<input class='input p-2 form-control' type='text' name='demail' value='{$row1['emel']}' />";
                echo "<br />";
                echo "</textarea>";
                echo "<br />";
                echo "<input class='submit' type='submit' name='submit' value='update' />";
                echo "</form>";
                }
                }
                if (isset($_GET['submit'])) {
                echo '<div class="form" id="form3"><br><br><br><br><br><br>
                <Span>Data Updated Successfuly......!!</span></div>';
                echo "<a href='pengguna.php'>home</a>";
                }
                ?>



                </div><?php
                mysql_close($connection);
                ?>
      
      
      
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.min.js"></script>
      
</body>
</html>