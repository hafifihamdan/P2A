<?php
	session_start();
	$namapengurus=mysql_real_escape_string($_POST['namapengurus']);
	$katalaluan=mysql_real_escape_string($_POST['katalaluan']);
    
	$bool=true;
	
	mysql_connect("localhost", "root", "") or die (mysql_error()); //connect to server
	mysql_select_db("psm2") or die ("Cannot connect to database"); //connect to database
    $query=mysql_query("SELECT * FROM pengurus WHERE namapengurus='$namapengurus'"); //query the users table
	$exists=mysql_num_rows($query);
	$table_users = "";
	$table_password = "";
	if($exists>0) //if there are no returning rows or no existing username
	{
		while($row=mysql_fetch_assoc($query)) //disply all rows from query
		{
			$table_users=$row['namapengurus']; //the first pswd  row is passed on to table_password
			$table_password=$row['katalaluan'];
		}
		if(($namapengurus==$table_users) && ($katalaluan==$table_password))
		{
			if($katalaluan==$table_password)
			{
				$_SESSION['namapengurus']=$namapengurus; //set the username in a sessio
				header("location:pentadbir.php");
			}
		}
		else
		{
			 header("location:logadmin.php?msg=failed"); //redirects to login.php
		}
	}
	else
	{
		 header("location:logadmin.php?msg=failed"); //redirects to login.php
	}

	
	?>