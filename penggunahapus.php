
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{   



mysql_connect("localhost", "root","") or die(mysql_error()); //connect to server
mysql_select_db("psm2") or die("Cannot connect to database"); //Connect to database
$query = mysql_query("SELECT * FROM pelanggan"); //Query the users table

    
   mysql_query("INSERT INTO pelanggan(status) VALUES ('hapus') WHERE idpelanggan="$idpelanggan" ");
    Print '<script>alert("Tempahan anda sudah BERJAYA. RESIT tempahan akan dihantar melalui emel sebagai bukti tempahan");</script>';
    Print '<script>window.location.assign("info.php");</script>';

}
?>