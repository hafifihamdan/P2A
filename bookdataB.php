
<?php
session_start();
$emel= $_SESSION['emel'];
if($_SERVER["REQUEST_METHOD"]=="POST")
{   

$kategori=mysql_real_escape_string($_POST['kategori']);
$kuantiti=mysql_real_escape_string($_POST['kuantiti']);
$tarikhtempah=date("Y-m-d", strtotime($_POST['tarikhtempah']));
$jumlah=mysql_real_escape_string($_POST['jumlah']);
$tarikhisitempah=date("Y-m-d");

$bool=true;

mysql_connect("localhost", "root","") or die(mysql_error()); //connect to server
mysql_select_db("psm2") or die("Cannot connect to database"); //Connect to database
$query = mysql_query("SELECT * FROM tempahan"); //Query the users table

	
if(($kategori == 'pembeli')||($kategori == 'peruncit'))
{
    
   mysql_query("INSERT INTO tempahan(gred,kategori,kuantiti,tarikhtempah,jumlah,tarikhisitempah,emel) VALUES ('B','$kategori','$kuantiti','$tarikhtempah','$jumlah','$tarikhisitempah','$emel')");
    Print '<script>alert("Tempahan anda sudah BERJAYA.Sila cetak invoice di laman laporan tempahan");</script>';
    Print '<script>window.location.assign("tempahA.php");</script>';
   
}
  else 
  {
     mysql_query("INSERT INTO tempahan(gred,kategori,kuantiti,tarikhtempah,jumlah,tarikhisitempah,emel) VALUES ('B','$kategori','$kuantiti','$tarikhtempah','$jumlah','$tarikhisitempah','$emel')");
     Print '<script>alert("Tempahan anda sudah BERJAYA.Sila cetak invoice di laman laporan tempahan");</script>';
     Print '<script>window.location.assign("tempahA.php");</script>';
  }
}	
    
?>