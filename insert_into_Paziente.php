<?php

	//Dichiarazione variabili.
	$CF = $_POST["CF"];
	$Cognome = $_POST["Cognome"];
	$Nome  = $_POST["Nome"];
	$Sesso   = $_POST["Sesso"];
	$Nazionalita  = $_POST["Nazionalita"];
	$CAP = $_POST["CAP"];
	$Indirizzo = $_POST["Indirizzo"];
	
	
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
	$sql = "INSERT INTO Paziente (CF, Cognome, Nome, Sesso, Nazionalita, CAP, Indirizzo)";
	$sql .= "VALUES ('$CF', '$Cognome','$Nome','$Sesso','$Nazionalita','$CAP','$Indirizzo');";

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