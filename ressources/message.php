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


//variables
$username = $_SESSION['username'];
$message = $_POST['message'];



//Query will be executed
if ($error != 1) {
	$query = 'insert into chat (chat_ID, username, message)
		values(null, "'.$username.'", "'.$message.'");';
	$mysqli->query($query);
	
	header ("Location: ../index.php");
}

//user will be redirected if not logged in
else {
	header ( "Refresh: 0; url=../index.php" );
	echo "<script>alert('Du musst angemeldet sein um zu chatten!');
                    </script>";
}
?>