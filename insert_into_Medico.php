<?php

	//Dichiarazione variabili.
	$codice_Medico = $_POST["codice_Medico"];
	$cognome = $_POST["cognome"];
	$nome = $_POST["nome"];
	$indirizzo = $_POST["indirizzo"];
	$citta = $_POST["citta"];
	$cap = $_POST["cap"];
	$Data_nascita = $_POST["Data_nascita"];
	
	
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
	
	
	$sql = "INSERT INTO Medico (codice_Medico, Cognome, Nome, Indirizzo, Citta, CAP, Data_nascita)";
	$sql .= "VALUES ('$codice_Medico', '$cognome', '$nome', '$indirizzo', '$citta', '$cap','$Data_nascita');";

	if(mysqli_query($connection_to_db, $sql))
	{
		echo "L'inserimento è stato effettuato correttamente.";
	}
	else
	{
		echo "Si è verificato un errore durante l'inserimento dei dati nella tabella abbonato: ".mysqli_error($connection_to_db);
	}

	mysqli_close($connection_to_db);
?>