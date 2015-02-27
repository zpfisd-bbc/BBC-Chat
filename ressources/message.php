<?php
//session started because of no menu.php
session_start();

//new db connection
include_once '../ressources/config.php';

//This will check if the user is logged in
$error = 0;
if ($_SESSION["logedin"] == false) {
	$error = 1;
}

//user will be redirected if not logged in
if ($error == 1) {
	header ( "Refresh: 0; url=../sites/login.php" );
	echo "<script>alert('Du musst angemeldet sein um zu chatten!');
		</script>";
}


//variables
$username = $_SESSION['username'];
$message = $_POST['message'];
if ($message == "") {
	$error = 2;
}

// user will be redirected to index if empty msg
if ($error == 2) {
	header ( "Refresh: 0; url=../index.php" );
	echo "<script>alert('Du kannst keine leeren Nachrichten senden.');
		</script>";
 	
 }


//Query will be executed
if ($error != 1) {
	$query = 'insert into chat (chat_ID, username, message)
		values(null, "'.$username.'", "'.$message.'");';
	$mysqli->query($query);
	
	header ("Location: ../index.php");
}


?>