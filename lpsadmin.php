<?php 
 include("auth2.php"); 
 $connect = mysqli_connect("localhost", "root", "", "psm2");  
 $query = "SELECT gred, count(*) as number FROM tempahan GROUP BY gred";  
 $query2 = "SELECT kategori, count(*) as number FROM tempahan GROUP BY kategori";  
 $result = mysqli_query($connect, $query);  
 $result2 = mysqli_query($connect, $query2);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
	  
	  
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<!-- Bootstrap CSS -->
			<link rel="stylesheet" href="asset/css/bootstrap.min.css">

			<title>P2A Enterprise</title>

           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           
		   
		   
		   <script type="text/javascript"> 
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['gred', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gred"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistik Jualan Gred Buah Nanas',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
          
            <script type="text/javascript"> 
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['gred', 'number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gred"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Statistik Jualan Gred Buah Nanas',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script>
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
                      <a class="nav-item nav-link" href="tempahsekarang2.php">Tempah Sekarang</a>
                      <a class="nav-item nav-link" href="lpadmin.php">Laporan Tempahan</a>
                      <a class="nav-item nav-link " href="lppadmin.php">Laporan Pengguna </a>
                      <a class="nav-item nav-link active" href="lpsadmin.php">Laporan Statistik </a>
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
	  
      
      <div class="container">
	<div class="content">
          
           <br /><br />  
           <div style="width:900px;">
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
		   
		  </div>
		  </div>
   
        <center>
    <p>&copy;2018 Hak Cipta P2A Enterprise -Bahagian Pengurusan Maklumat</p>
		</center>
      </body>  
     
 </html>  