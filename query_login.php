<?php
session_start();
$_session["Active"]=false;
$hostname="localhost";
$username="Giovanni";
$password="Storti";
$db="ospedale";

$connection_to_db=mysqli_connect($hostname, $username, $password, $db);

if(!$connection_to_db)
{
    die("La connessione al database e' fallita!".mysqli_connect_error());
}
echo"La connessione non ha riscontrato nessun problema.";

$user=$_POST["user"];
$pass=$_POST["pass"];

$sql="select * from accesso where codice_Medico = '$user' and Passw='$pass'";
$results=mysqli_query($connection_to_db, $sql);
if(mysqli_num_rows($results) > 0)
{
    $_SESSION["Active"] = true;
    $_SESSION["Username"] = $user;
    header("location: index.php");
}
else
{
    header("location: login.html");
}
mysqli_close($connection_to_db);
?>