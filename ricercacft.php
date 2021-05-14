<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ricerca visita</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
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

<form name="login" action="visualizzazione_terapie.php" method="post" style="margin-top: 50px">
  <div class="form-group">
    <label for="exampleInputEmail1">Codice fiscale del paziente</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="CF" placeholder="Immetti id">
    <small id="emailHelp" class="form-text text-muted">Inserire il codice fiscale 'esistente' del paziente</small>
  <button type="submit" class="btn btn-primary">Cerca</button>
</form>   
    
</body>
</html>

</html>