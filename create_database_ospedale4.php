<?php
$hostname = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($hostname, $username, $password);
if (! $conn)
{
  die('Errore durante la connessione: ' . mysqli_connect_error());
}
echo "Connessione a MySQL effettuata con successo <BR>";


$strSQL = "CREATE DATABASE ospedale;";
if (mysqli_query($conn, $strSQL))
{
  echo "Database utenze creato correttamente\n";
}
else
{
  echo "Errore nella creazione del database utenze: " . mysqli_error($conn);
}


$db1 = mysqli_select_db($conn, "ospedale");
if (! $db1)
{
  die('Accesso al database non riuscito: ' . mysqli_error($conn));
}
echo "Accesso al database effettuato con successo";

$strSQL = "CREATE TABLE Medico(";
$strSQL .= "codice_Medico INT NOT NULL,";
$strSQL .= "Cognome VARCHAR(30),";
$strSQL .= "Nome VARCHAR(30),";
$strSQL .= "Indirizzo VARCHAR(30),";
$strSQL .= "Citta VARCHAR(25),";
$strSQL .= "CAP VARCHAR(25),";
$strSQL .= "Data_nascita date,";
$strSQL .= "PRIMARY KEY (codice_Medico));";

if (mysqli_query($conn, $strSQL))
{
  echo "Tabella medico  creata correttamente";
}
else
{
  echo "Errore durante la creazione della tabella medico: " . mysqli_error($conn);
}

$strSQL = "CREATE TABLE Paziente(";
$strSQL .= "CF  VARCHAR(30),";
$strSQL .= "Cognome VARCHAR(30),";
$strSQL .= "Nome VARCHAR(30),";
$strSQL .= "Sesso VARCHAR(30),";
$strSQL .= "Nazionalita VARCHAR(30),";
$strSQL .= "CAP  VARCHAR(30),";
$strSQL .= "Indirizzo  VARCHAR(30),";
$strSQL .= "PRIMARY KEY (CF));";


if (mysqli_query($conn, $strSQL))
{
  echo "Tabella paziente creata correttamente";
}
else
{
  echo "Errore durante la creazione della tabella paziente: " . mysqli_error($conn);
}
$strSQL = "CREATE TABLE Farmaco(";
$strSQL .= "codice_Farmaco INT NOT NULL,";
$strSQL .= "Quantita_in_magazzino INT,";
$strSQL .= "Nome_Farmaco VARCHAR(20),";
$strSQL .= "Tipo VARCHAR(20),";
$strSQL .= "PRIMARY KEY(codice_Farmaco));";



if (mysqli_query($conn, $strSQL))
{
  echo "Tabella Farmaco creata correttamente";
}
else
{
  echo "Errore durante la creazione della tabella Farmaco: " . mysqli_error($conn);
}


$strSQL = "CREATE TABLE Assunzione(";
$strSQL .= "CF VARCHAR(20),";
$strSQL .= "codice_Farmaco INT,";
$strSQL .= "Data_inizio_assunzione DATE,";
$strSQL .= "Data_fine_assunzione DATE,";
$strSQL .= "Modalità_di_assunzione VARCHAR(40),";
$strSQL .= "PRIMARY KEY(CF, codice_Farmaco),";
$strSQL .= "FOREIGN KEY(codice_Farmaco) REFERENCES Farmaco(codice_Farmaco),";
$strSQL .= "FOREIGN KEY(CF) REFERENCES Paziente(CF));";



if (mysqli_query($conn, $strSQL))
{
  echo "Tabella Paziente creata correttamente";
}
else
{
  echo "Errore durante la creazione della tabella Paziente: " . mysqli_error($conn);
}




$strSQL = "CREATE TABLE Reparto(";
$strSQL .= "Codice_Reparto INT,";
$strSQL .= "CF VARCHAR(20),";
$strSQL .= "Tipo_Reparto VARCHAR(20),";
$strSQL .= "PRIMARY KEY(Codice_Reparto),";
$strSQL .= "FOREIGN KEY(CF) REFERENCES Paziente(CF));";





if (mysqli_query($conn, $strSQL))
{
  echo "Tabella Reparto creata correttamente";
}
else
{
  echo "Errore durante la creazione della tabella Reparto: " . mysqli_error($conn);
}



$strSQL = "CREATE TABLE visita(";
$strSQL .= "codice_visita INT NOT NULL,";
$strSQL .= "codice_Medico INT,";
$strSQL .= "CF VARCHAR(20),";
$strSQL .= "ora DATE,";
$strSQL .= "Data_visita DATE,";
$strSQL .= "Pressione_minima DOUBLE(10, 5),";
$strSQL .= "Pressione_massima DOUBLE(10, 5),";
$strSQL .= "Temperatura DOUBLE(10, 5),";
$strSQL .= "Frequenza_cardiaca  DOUBLE(10, 5),";
$strSQL .= "Periodicità VARCHAR(30),";
$strSQL .= "PRIMARY KEY(codice_visita),";
$strSQL .= "FOREIGN KEY(codice_Medico) REFERENCES Medico(codice_Medico),";
$strSQL .= "FOREIGN KEY(CF) REFERENCES Paziente(CF));";


if (mysqli_query($conn, $strSQL))
{
  echo "Tabella Visita creata correttamente";
}
else
{
  echo "Errore durante la creazione della tabella Visita: " . mysqli_error($conn);
}

$strSQL = "CREATE TABLE utente(";
$strSQL .= "id INT NOT NULL AUTO_INCREMENT,";
$strSQL .= "pass VARCHAR(255) NOT NULL,";
$strSQL .= "codice_Medico INT,";
$strSQL .= "FOREIGN KEY(codice_Medico) REFERENCES Medico(codice_Medico),";
$strSQL .= "PRIMARY KEY(id));";

if (mysqli_query($conn, $strSQL))
{
  echo "Tabella Visita creata correttamente";
}
else
{
  echo "Errore durante la creazione della tabella Visita: " . mysqli_error($conn);
}

mysqli_close($conn);
?>