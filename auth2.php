<?php
session_start();
if(!isset($_SESSION["namapengurus"]))
{
header("Location: checkadmin.php");
exit(); }
?>