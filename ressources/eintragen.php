<?php
include_once 'config.php';

$error = 0;

//Variables from register.php form
$username = $_POST['username'];
if ($username == null) {
	$error = 1;
}

$vorname = $_POST['vorname'];
if ($vorname == null) {
	$error = 1;
}

$nachname = $_POST['nachname'];
if ($nachname == null) {
	$error = 1;
}

$mail = $_POST['email'];
if ($mail == null) {
	$error = 1;
}

$passwort = $_POST['passwort'];
if ($passwort == null) {
	$error = 1;
}


//sql query
$query = "select username from registration";
$result = $mysqli->query($query);
$zeile = $result->fetch_array();


//Checks if username already exists
$check = mysqli_query ( $mysqli, "SELECT username FROM registration WHERE Username='$username'" );
$count = mysqli_num_rows ( $check );

//What will be printed if username exists
if ($count == 1) {
	   header ( "Refresh: 0; url=../sites/register.php" );
       echo "<script>alert('Der Benutzername ist leider schon vergeben.');
                    </script>";
}

//This will happen if one field doesnt have any data
elseif ($error == 1) {
		header ( "Refresh: 0; url=../index.php" );
		echo "<script>alert('Ein Fehler ist aufgetreten.');
                    </script>";
}

//If everything is OK user will be added to db
else {
	$query = 'insert into registration (registration_ID, username, nachname, vorname, mail, passwort)
		values (null,"'.$username.'","'.$nachname.'","'.$vorname.'","'.$mail.'",md5("'.$passwort.'"));';
			
	$mysqli->query($query);
	header ( "Location: ../index.php" );
}


?>