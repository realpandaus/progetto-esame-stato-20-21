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
  <a>Portale Farmacia</a>
  <a href="logout.php">Logout</a>
</nav>

<form class="allform" action="insert_into_visita.php" method="post">
<div class="form-group">
    <label>Codice Farmaco</label>
    <input type="text" class="form-input" name="Codice_Farmaco">
  </div>
  <div class="form-group">
    <label>Nome del Farmaco</label>
    <input type="text" class="form-input" name="Nome_Farmaco">
  </div>
  <div class="form-group">
    <label>Data della Visita</label>
    <input type="text" class="form-input" name="Quantità_Farmaco">
  </div>
  <div class="form-group">
    <label>Ora della Visita</label>
    <input type="text" class="form-input" name="Codice_Reparto">
  </div>
  <div class="form-group">
    <label>Pressione minima paziente</label>
    <input type="text" class="form-input" name="Pressione_minima">
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <button type="submit">Aggiungi Visita</button>
    </div>
  </div>
</form>


</body>
</html>