<?php
include_once 'config.php';

//Variables from register.php form
$username = $_POST['username'];
$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$mail = $_POST['email'];
$passwort = $_POST['passwort'];


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
       echo "<script>alert('Der Username ist leider schon vergeben');
                    </script>";
}

else {
	$query = 'insert into registration (registration_ID, username, nachname, vorname, mail, passwort)
		values (null,"'.$username.'","'.$nachname.'","'.$vorname.'","'.$mail.'",md5("'.$passwort.'"));';
			
	$mysqli->query($query);
    header ( "Refresh: 0; url=../index.php" );
}


?>