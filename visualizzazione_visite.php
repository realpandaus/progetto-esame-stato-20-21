	<html>
	<title>Visite</title>
	<link rel="stylesheet" href="fogliostile.css">


	<body style="background-color: orange">

	<nav class="barra" style="background-color: orange">
  	  <a>Portale Medici</a>
      <a href="inserimento_visite.php">Inserimento Visite</a>
      <a href="visualizzazione_visite.php">Visualizzazione Visite</a>
      <a href="visualizzazione_visite.php">Sezione Farmaci</a>
      <a href="logout.php">Logout</a>
	</nav>

	<div style="margin-top: 50px; ">
		<table class="tabella">
		<thead>
		<tr>
			<th>Codice Fiscale</th>
			<th>Identificativo Medico</th>
			<th>Ora visita</th>
			<th>Data Visita</th>
			<th>Pressione Minima</th>
			<th>Pressione Massima</th>
			<th>Temperatura</th>
			<th>Frequenza Cardiaca</th>
		</tr>

	<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";

	$utente = $_POST["CF"];
	
	$conn = mysqli_connect($servername, $username, $password);
	$select_database = mysqli_select_db($conn, "ospedale");
	$sql = "SELECT * FROM visita WHERE CF='$utente';";
	$result = mysqli_query($conn, $sql);
	

	if($result-> num_rows > 0)
	{
		while($row = $result-> fetch_assoc())
		{
			echo "<tr><td>" . $row["CF"] . "</td><td>" . $row["codice_Medico"] . "</td><td>" . $row["ora"] . "</td><td>" . $row["Data_visita"] . "</td><td>" . $row["Pressione_minima"] . "</td><td>" . $row["Pressione_massima"] . "</td><td>" . $row["Temperatura"] . "</td><td>" . $row["Frequenza_cardiaca"] . "</td></tr>";  
		}
		echo "</table>";
	}
	else
	{
		echo "Nessuna visita trovata.";
	}

	
	
	mysqli_free_result($result);
	
	?>
		</table>
	</div>

	</body>
	</html>