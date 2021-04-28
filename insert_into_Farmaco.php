<?php

	//Dichiarazione variabili.
	$codice_Farmaco = $_POST["codice_Farmaco"];
	$Quantita_in_magazzino = $_POST["Quantita_in_magazzino"];
	$Nome_Farmaco = $_POST["Nome_Farmaco"];
	$Tipo = $_POST["Tipo"];
	
	//Connessione DB.
	$hostname_db = "localhost";
	$username_db = "root";
	$passwd_db = "";
	
	$connection_to_db = mysqli_connect($hostname_db, $username_db, $passwd_db);
	if(!$connection_to_db)
	{
		die('Si è verificato un errore durante la connessione: '.mysqli_connect_error());
	}
	echo "Connessione a MySQL effettuata correttamente!";
	
	//Selezione DB.
	$database_1 = mysqli_select_db($connection_to_db, "ospedale");
	if(!$database_1)
	{
		die('Si è verificato un errore durante la selezione del database:'.mysqli_error($connection_to_db)); 
	}
	echo "Accesso al database effettuato correttamente";
	
	//Inserimento dati.
	$sql = "INSERT INTO Farmaco (codice_Farmaco, Quantita_in_magazzino, Nome_Farmaco, Tipo)";
	$sql .= "VALUES ('$codice_Farmaco', '$Quantita_in_magazzino','$Nome_Farmaco','$Tipo');";

	if(mysqli_query($connection_to_db, $sql))
	{
		echo "L'inserimento è stato effettuato correttamente.";
	}
	else
	{
		echo "Si è verificato un errore durante l'inserimento dei dati nella tabella argomento: ".mysqli_error($connection_to_db);
	}

	mysqli_close($connection_to_db);
?>