<head>
<meta charset="ISO-8859-1">
</head>

<?php
include_once "../ressources/config.php";
//Session
session_start();
$_SESSION["logedin"] = false;

//Skript
$username = mysqli_real_escape_string($mysqli,$_POST['username']);
$passwort = mysqli_real_escape_string($mysqli,$_POST['passwort']);

$query = "select * from registration";

$result = $mysqli->query($query);


while($zeile = $result->fetch_array())
{
	if(($zeile["username"]==$username) && ($zeile["passwort"]==md5($passwort)))
	{
		$_SESSION["logedin"] = true;
		
		//Auch andere Infos aus der DB kann
		//man in der Session speichern
		$_SESSION['username'] = $zeile["username"]; //Der Name z.B.
		$_SESSION['passwort'] = $zeile["passwort"]; 
		break;
	}
}
//In diesem Styl kannst du überall die Session Infos abrufen:
if($_SESSION["logedin"]){
header('Location: ../index.php');

} else {
	header ( "Refresh: 0; url=../sites/login.php" );
	echo "<script>alert('Inkorrekte Login Daten.');
		</script>";
}
?>