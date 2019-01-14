<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Nama=mysql_real_escape_string($_POST['Nama']);   
$emel=mysql_real_escape_string($_POST['emel']);
$katalaluan=mysql_real_escape_string($_POST['katalaluan']);
$alamat=mysql_real_escape_string($_POST['alamat']);
$bandar=mysql_real_escape_string($_POST['bandar']);
$negeri=mysql_real_escape_string($_POST['negeri']);
$poskod=mysql_real_escape_string($_POST['poskod']);
$tarikhlahir=mysql_real_escape_string($_POST['tarikhlahir']);
$notel=mysql_real_escape_string($_POST['notel']);
$date=date("Y-m-d H-i-s");
$bool=true;

mysql_connect("localhost", "root","") or die(mysql_error()); //connect to server
mysql_select_db("psm2") or die("Cannot connect to database"); //Connect to database
$query = mysql_query("SELECT * FROM pelanggan"); //Query the users table
while($row=mysql_fetch_array($query)) //display all rows from query
{
	$table_users=$row['emel']; 
	if($emel==$table_users) //checks if there any matching fields
	{
		$bool=false;  //sets bool to false //prompts the user
		Print '<script>alert("emel telah digunakan");</script>';
        Print '<script>window.location.assign("daftar.php");</script>';
	}
}
if($bool) //checks if bool is true
{
	$encrypted_katalaluan=md5($katalaluan);
	mysql_query("INSERT INTO pelanggan(Nama,emel,katalaluan,alamat,bandar,negeri,poskod,tarikhlahir,notel) VALUES
    ('$Nama','$emel','$encrypted_katalaluan','$alamat','$bandar','$negeri','$poskod','$tarikhlahir','$notel')");  
	Print '<script>alert("Pendaftaran Berjaya");</script>';
	Print '<script>window.location.assign("logmasuk.php");</script>';

    
}}?>

