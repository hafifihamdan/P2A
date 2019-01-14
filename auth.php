<?php
session_start();
if(!isset($_SESSION["emel"]))
{
header("Location: checklogin.php");
exit(); }
?>