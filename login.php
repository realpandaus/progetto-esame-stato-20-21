<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$_SESSION["Active"]=false;
$user =  $_POST["codice_Medico"];
$passw = $_POST["passw"];

$servername = "localhost";
$username = "root";
$password = "";
$db="ospedale";


$conn = mysqli_connect($servername, $username, $password, $db);


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT codice_Medico,passw FROM utente WHERE codice_Medico = '$user' AND passw ='$passw';";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
    $_SESSION["Active"] = true;
    $_SESSION["Username"] = $user;
    header("location: inserimento_visite.php");
}
else
{
  header("location: form.php");
}
?>

<head>
    <title>Document</title>
</head>
<body>
    
</body>
</html>