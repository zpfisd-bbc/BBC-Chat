<?php
session_start();
include_once '../ressources/config.php';

$username = $_SESSION['username'];
$message = $_POST['message'];

$query = 'insert into chat (chat_ID, username, message)
	values(null, "'.$username.'", "'.$message.'");';
$mysqli->query($query);

header ("Location: ../index.php");
?>