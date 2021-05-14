<html>
<?php
if(!isset($_SESSION['Active'])) 
{
session_start();
}
else
{
  session_destroy();
  header("location: form.php");
}
?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

<form action="insert_into_visita.php" method="post">
<div class="form-group">
    <label for="formGroupExampleInput">Codice Fiscale</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="CF">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Identificativo Medico</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" name="codice_Medico">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Data della Visita</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="Data_visita">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Ora della Visita</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="ora">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Pressione minima paziente</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="Pressione_minima">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Pressione massima paziente</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="Pressione_massima">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Temperatura Corporea</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="Temperatura">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Frequenza Cardiaca</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="Frequenza_cardiaca">
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Aggiungi Visita</button>
    </div>
  </div>
</form>


</body>
</html>
