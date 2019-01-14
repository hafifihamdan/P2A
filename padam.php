	
<?php
session_start();
$emel= $_SESSION['emel'];
?>




		
   <?php

    $connection = mysql_connect("localhost", "root", "");
         $db = mysql_select_db("psm2", $connection);
		 $query = mysql_query("select * from pelanggan where emel='$_SESSION[emel]'", $connection);
      
         while($rows=mysql_fetch_array($query))
         {
                $notempah= $_GET['notempah'];
				$cek = mysqli_query($db, "SELECT * FROM tempahan WHERE notempah='$notempah'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($db, "DELETE FROM tempahan WHERE notempah='$notempah'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
}?>


