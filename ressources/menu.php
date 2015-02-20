<?php
session_start();
if ($_SESSION["logedin"] == true)
{
?>
<head>
<link rel="shortcut icon" href="../img/favicon/favicon.ico" />
</head>
<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
			<a class="navbar-brand" href="../index.php"><img
				src="../img/logo.png" height="40" width="40">BBC Chat</a>
		</div>


		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

				<li><a href="../index.php"><span class="glyphicon glyphicon-globe"></span>
						Chat</a></li>

				<li><a href="../ressources/logout.php"> <span class="glyphicon glyphicon-off"></span>
						Logout
				</a></li>

				<li><a href="#"> <span
						class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']?>
				</a></li>

			</ul>
		</div>



		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>
<?php }else{?>
<head>
<link rel="shortcut icon" href="../img/favicon/favicon.ico" />
</head>
<!-- Navigation -->
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> <span
					class="icon-bar"></span> <span class="icon-bar"></span> <span
					class="icon-bar"></span>
			</button>
			<!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
			<a class="navbar-brand" href="../index.php"><img
				src="../img/logo.png" height="40" width="40">BBC Chat</a>
		</div>


		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse"
			id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">

				<li><a href="../index.php"><span class="glyphicon glyphicon-globe"></span>
						Chat</a></li>
				
				<li><a href="../sites/login.php"> <span class="glyphicon glyphicon-log-in"></span>
						Login
				</a></li>

				<li><a href="../sites/register.php"> <span class="glyphicon glyphicon-pencil"></span>
						Registrieren
				</a></li>

			</ul>
		</div>



		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>	
<?php }?>
