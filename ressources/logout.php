<?php
//Session will be initialized again
//because there is no menu.php
session_start();
session_destroy();

//redirect to index
header ( "location: ../index.php" );
?>