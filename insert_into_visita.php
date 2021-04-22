<?php

	//Dichiarazione variabili.
	$codice_Medico = $_POST["codice_Medico"];
	$CF = $_POST["CF"];
	$codice_visita = $_POST["codice_visita"];
	$ora = $_POST["ora"];
	$Data_visita = $_POST["Data_visita"];
	$Pressione_minima = $_POST["Pressione_minima"];
	$Pressione_massima = $_POST["Pressione_massima"];
	$Temperatura = $_POST["Temperatura"];
	$Frequenza_cardiaca = $_POST["Frequenza_cardiaca"];
	$Periodicità = $_POST["Periodicità"];
	
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
	$sql = "INSERT INTO visita (codice_Medico, CF, codice_visita, ora,Data_visita, Pressione_minima, Pressione_massima, Temperatura, Frequenza_cardiaca)";
	$sql .= "VALUES ('$codice_Medico', '$CF', '$codice_visita', '$ora','$Data_visita','$Pressione_minima','$Pressione_massima','$Temperatura','$Frequenza_cardiaca');";

	if(mysqli_query($connection_to_db, $sql))
	{
		echo "L'inserimento è stato effettuato correttamente.";
	}
	else
	{
		echo "Si è verificato un errore durante l'inserimento dei dati nella tabella visita: ".mysqli_error($connection_to_db);
	}

	mysqli_close($connection_to_db);
?>