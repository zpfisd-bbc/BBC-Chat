<?php

// new database connection
include_once "ressources/config.php";

// query which will be used
$query = "SELECT * FROM (
		 	SELECT * FROM  chat ORDER BY chat_ID DESC LIMIT 8)
		 as chat_ID ORDER BY chat_ID";

// output of messages
$previousName = "";
$result = $mysqli->query ( $query );
if ($result->num_rows > 0) {
	while ( $row = $result->fetch_assoc () ) {
		?>
<h1>
		
		<?php
		if ($previousName != $row ['username']) {
			echo htmlspecialchars ( $row ['username'] );
		}
		?>
		</h1>
<br>

<?php
		$previousName = $row ['username'];
		?>
<p><?php echo htmlspecialchars($row['message']);?></p>
<br>
<hr>

<!-- editieren button -->
<!-- <div class="btn-group pull-right"> -->

<!-- 	<button type="button" class="btn btn-info dropdown-toggle" -->
<!-- 		data-toggle="dropdown" aria-expanded="false"> -->
<!-- 		<span class="glyphicon glyphicon-cog"></span> <span class="sr-only"></span> -->
<!-- 	</button> -->

<!-- 	<ul class="dropdown-menu" role="menu"> -->
<!-- 		<li><a href="#"><span class="fa fa-map-marker"></span>&nbsp;<span -->
<!-- 				class="glyphicon glyphicon-remove-sign"></span>L�schen</a></li> -->
				
<!-- 		<li><a href="#"><span class="fa fa-lock"></span>&nbsp;<span -->
<!-- 				class="glyphicon glyphicon-edit"></span>Bearbeiten</a></li> -->
				
<!-- 		<li class="divider"></li> -->
		
<!-- 		<li><a href="#"><span class="fa fa-circle-o-notch"></span>&nbsp;<span -->
<!-- 				class="glyphicon glyphicon-ban-circle"></span>Ban User</a></li> -->
<!-- 	</ul> -->

<!-- </div> -->

<?php
	}
}
?>