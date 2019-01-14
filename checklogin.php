<?php
	session_start();
    $error='';
	$emel=mysql_real_escape_string($_POST['emel']);
	$katalaluan=md5($_POST['katalaluan']);
    
	$bool=true;
	
	mysql_connect("localhost", "root", "") or die (mysql_error()); 
	mysql_select_db("psm2") or die ("Cannot connect to database"); 
    $query=mysql_query("SELECT * FROM pelanggan WHERE emel='$emel'"); 
	$exists=mysql_num_rows($query);
	$table_users = "";
	$table_password = "";
	if($exists>0) 
	{
		while($row=mysql_fetch_assoc($query)) 
		{
			$table_users=$row['emel']; 
			$table_password=$row['katalaluan'];
		}
		if(($emel==$table_users) && ($katalaluan==$table_password))
		{
			if($katalaluan==$table_password)
			{
				$_SESSION['emel']=$emel;
				header("location:pengguna.php");
			}
		}
		else
		{
           header("location:logmasuk.php?msg=failed");
		}
	}
	else
	{
		header("location:logmasuk.php?msg=failed");
	}
?>