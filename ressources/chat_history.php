<?php

// new database connection
include_once "ressources/config.php";

// query which will be used
$query = "SELECT * FROM chat";

// output of messages
$result = $mysqli->query ($query);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
	?>
		<h1><?php echo $row['username'];?></h1><br>
		<p><?php echo $row['message'];?></p><br><hr>
	<?php
	}
}
?>