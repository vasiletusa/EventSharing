<?
//la stringa mysql_connect deve essere compilata con i dati relativi al proprio database
// HOST = IP server Mysql
// USER = Nome utente databse
// PASSWORD = Password utente databse
mysql_connect("localhost","izanetti","eiwuoDuo7eiqu5ya");//database connection
// Qui sotto al posto di NOME_DATABASE, inserite il nome del vostro DB
mysql_select_db("izanetti");

// recupero i valori si NOME e INDIRIZZO e li assegno alle variabili $name e $address
$name = $_POST['name'];
$event = $_POST['event'];
$price = $_POST['price'];
$city = $_POST['city'];

//inserting data order
$toinsert = "INSERT INTO Offers
			(user, event, price, city)
			VALUES
			('$name',
			'$event','$price','$city')";

//declare in the order variable
$result = mysql_query($toinsert);	//order executes
if($result){
	echo("<br>Inserimento avvenuto correttamente");
} else{
	echo("<br>Inserimento non eseguito");
}
?>