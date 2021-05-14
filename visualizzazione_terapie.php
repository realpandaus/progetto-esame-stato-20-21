	<html>
	<title>Visite</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<body class="p-3 mb-2 bg-dark text-white">

	<nav class="navbar navbar-dark bg-primary" style="background-color: #e3f2fd;">
  		<a class="navbar-brand">Portale Medici</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  		</button>
  	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    	<div class="navbar-nav">
      <a class="nav-item nav-link active" href="inserimento_visite.php">Inserimento Visite</a>
      <a class="nav-item nav-link" href="ricercacf.php">Visualizzazione Visite</a>
      <a class="nav-item nav-link" href="ricercacft.php">Sezione Farmaci</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    	</div>
 	 </div>
	</nav>

	<div class="mx-auto" style="margin-top: 50px; ">
		<table class="table table-hover table">
		<thead class="thead-dark bg-primary">
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