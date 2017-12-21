<?php 
$host="localhost"; // Hostname 
$username="izanetti"; // Mysql username 
$password="iwuoDuo7eiqu5ya"; // Mysql password 
$db_name="izanetti"; //Nome del Database 
$tbl_name="Login"; // Nome della Tabella 
$db = mysql_connect($localhost,$username,$password); 
mysql_select_db($db_name,$db); 

$username = $_POST['username']; 
$email = $_POST['email']; 
$password = $_POST['password']; 

mysql_query("INSERT INTO ".$tbl_name." (username,email,password) VALUES ('$username','$email','$password')",$db) || die(mysql_error()); 

/* quindi i dati sono stati salvati nel database e l'utente è registrato */ 
mysql_close($db); 
?>