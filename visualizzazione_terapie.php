	<html>
	<title>Visite</title>
	<link rel="stylesheet" href="fogliostile.css">
	

	<body style="background-color: orange">

	<nav class="barra" style="background-color: orange">
  	  <a>Portale Medici</a>
      <a href="inserimento_visite.php">Inserimento Visite</a>
      <a href="visualizzazione_visite.php">Visualizzazione Visite</a>
      <a href="visualizzazione_terapie.php">Sezione Farmaci</a>
      <a href="logout.php">Logout</a>
	</nav>

	<div style="margin-top: 50px;">
		<table class="tabella">
		<thead>
		<tr>
			<th>Codice Fiscale</th>
			<th>Codice Farmaco</th>
			<th>Data inizio assunzione</th>
			<th>Data fine assunzione</th>
			<th>Modalita di assunzione</th>
		</tr>

	<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";

	$utente = $_POST["CF"];
	
	$conn = mysqli_connect($servername, $username, $password);
	$select_database = mysqli_select_db($conn, "ospedale");
	$sql = "SELECT * FROM assunzione WHERE CF='$utente';";
	$result = mysqli_query($conn, $sql);
	

	if($result-> num_rows > 0)
	{
		while($row = $result-> fetch_assoc())
		{
			echo "<tr><td>" . $row["CF"] . "</td><td>" . $row["codice_Farmaco"] . "</td><td>" . $row["Data_inizio_assunzione"] . "</td><td>" . $row["Data_fine_assunzione"] . "</td><td>" . $row["Modalita_di_assunzione"] . "</td></tr>";  
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