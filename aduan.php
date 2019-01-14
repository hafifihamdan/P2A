<?php
    

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
$nama=mysql_real_escape_string($_POST['nama']);
$emel=mysql_real_escape_string($_POST['emel']);
$notelad=mysql_real_escape_string($_POST['notelad']);
$maduan=mysql_real_escape_string($_POST['maduan']);
$tarikhlahir=mysql_real_escape_string($_POST['tarikhlahir']);
$notel=mysql_real_escape_string($_POST['notel']);
$tarikhaduan=date("Y-m-d H-i-s");
$bool=true;

mysql_connect("localhost", "root","") or die(mysql_error()); //connect to server
mysql_select_db("psm2") or die("Cannot connect to database"); //Connect to database
$query = mysql_query("SELECT * FROM aduan"); //Query the users table

if($bool) //checks if bool is true
{
	
	mysql_query("INSERT INTO aduan(nama,emel,notelad,maduan) VALUES ('$nama','$emel','$notelad','$maduan',$tarikhaduan')");  //inserts the value to table users
	Print '<script>alert("aduan Berjaya");</script>';
	Print '<script>window.location.assign("hubungikami.php");</script>';

    
}}?>