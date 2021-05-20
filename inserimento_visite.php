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
    <link rel="stylesheet" href="fogliostile.css">
</head>
<body style="background-color: orange">
<nav class="barra" style="background-color: orange;">
      <a>Portale Medici</a>
      <a href="inserimento_visite.php">Inserimento Visite</a>
      <a href="visualizzazione_visite.php">Visualizzazione Visite</a>
      <a href="visualizzazione_terapie.php">Sezione Farmaci</a>
      <a href="logout.php">Logout</a>
</nav>

<form class="allform" action="insert_into_visita.php" method="post">
<div class="form-group">
    <label>Codice Fiscale</label>
    <input type="text" class="form-input"  name="CF">
  </div>
  <div class="form-group">
    <label>Identificativo Medico</label>
    <input type="text" class="form-input" name="codice_Medico">
  </div>
  <div class="form-group">
    <label>Data della Visita</label>
    <input type="text" class="form-input"  name="Data_visita">
  </div>
  <div class="form-group">
    <label>Ora della Visita</label>
    <input type="text" class="form-input" name="ora">
  </div>
  <div class="form-group">
    <label>Pressione minima paziente</label>
    <input type="text" class="form-input"  name="Pressione_minima">
  </div>
  <div class="form-group">
    <label>Pressione massima paziente</label>
    <input type="text" class="form-input"  name="Pressione_massima">
  </div>
  <div class="form-group">
    <label>Temperatura Corporea</label>
    <input type="text" class="form-input"  name="Temperatura">
  </div>
  <div class="form-group">
    <label>Frequenza Cardiaca</label>
    <input type="text" class="form-input"  name="Frequenza_cardiaca">
  </div>
  <div>
    <div>
      <button type="submit">Aggiungi Visita</button>
    </div>
  </div>
</form>


</body>
</html>