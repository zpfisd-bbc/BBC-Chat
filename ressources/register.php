<?php

// Variablen definieren
$username = $_POST['Username'];
$vorname = $_POST['Vorname'];
$nachname = $_POST['Name'];
$mail = $_POST['Email'];
$passwort = $_POST['pass1'];
$geburtsdatum = $_POST['Geburtsdatum'];

//Neue Datenbankverbindung
$mysqli = new mysqli("localhost", "root", "", "zkilltsql1");

$query ="select * from ?";

?>