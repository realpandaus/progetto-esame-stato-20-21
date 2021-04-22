<?php

	//Dichiarazione variabili.
	$Data_inizio_assunzione= $_POST["Data_inizio_assunzione"];
	$Data_fine_assunzione = $_POST["Data_fine_assunzione"];
	$Modalità_di_assunzione = $_POST["Modalità_di_assunzione"];
	$codice_Farmaco = $_POST["codice_Farmaco"];
	$CF = $_POST["CF"];

	
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
	$sql = "INSERT INTO Assunzione (Data_inizio_assunzione, Data_fine_assunzione, Modalità_di_assunzione, codice_Farmaco, CF)";
	$sql .= "VALUES ('$Data_inizio_assunzione', '$Data_fine_assunzione','$Modalità_di_assunzione', '$codice_Farmaco', '$CF');";

	if(mysqli_query($connection_to_db, $sql))
	{
		echo "L'inserimento è stato effettuato correttamente.";
	}
	else
	{
		echo "Si è verificato un errore durante l'inserimento dei dati nella tabella Assunzione: ".mysqli_error($connection_to_db);
	}

	mysqli_close($connection_to_db);
?>