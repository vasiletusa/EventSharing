<?php 
$host="localhost"; // Hostname 
$username="izanetti"; // Mysql username 
$password="iwuoDuo7eiqu5ya"; // Mysql password 
$db_name="izanetti"; //Nome del Database 
$tbl_name="Login"; // Nome della Tabella 
// Procedimento per connettersi al Database 
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");  
// Nome utente e password inviate attraverso il form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'"; 
$result=mysql_query($sql); 
// Mysql_num_row is counting table row 
$count=mysql_num_rows($result); 
// If result matched $myusername and $mypassword, table row must be 1 row 
if($count==1){ 
// Register $myusername, $mypassword and redirect to file "login_success.php" 
session_register("myusername"); 
session_register("mypassword"); 
header("location:login_success.php"); 
} 
else { 
echo "Attenzione username o password errati"; 
} 
?>