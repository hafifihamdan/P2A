<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "psm2";

$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>




