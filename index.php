<?php
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBC Chat</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">BBC Chat</div>
    <div class="address-bar"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">BBC Chat</a>
            </div>
            
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                
                    <li>
                        <a href="index.php">Chat</a>
                    </li>
					
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-log-in"></span>
							Login
						</a>
					</li>
					
					<li>
						<a href="#">
							<span class="glyphicon glyphicon-pencil"></span>
							Registrieren
						</a>
					</li>
					
                </ul>
            </div>
            
            
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

                <div class="col-lg-12 text-center">



		<!-- Title of chatbox -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
					<h1>LiveChat</h1>
				

                </div>
            </div>
        </div>
        <!-- End of title -->


		<!-- Chatbox content -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    
                    <div class="chat-box-div">
                    <div class="chat-box-head">
                        CHAT HISTORY
                        
                        <!-- settings -->
                            <div class="btn-group pull-right">
                                
                                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="glyphicon glyphicon-cog"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#"><span class="fa fa-map-marker"></span>&nbsp;Invisible</a></li>
                                    <li><a href="#"><span class="fa fa-comments-o"></span>&nbsp;Online</a></li>
                                    <li><a href="#"><span class="fa fa-lock"></span>&nbsp;Busy</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><span class="fa fa-circle-o-notch"></span>&nbsp;Logout</a></li>
                                </ul>
                                
                            </div>
                    </div>
					<!-- end of settings -->
					
					
                    <!-- chatbox body -->
                    <div class="panel-body chat-box-main">
						<p>Test Nachricht</p>
						<p>Test Nachricht 2</p>
                    </div>
                    <!-- end of chatbox body -->
                    
                    <div class="chat-box-footer">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Text eingeben...">
                            
                            <span class="input-group-btn">
                                <button class="btn btn-info" type="button">SENDEN</button>
                            </span>
                        </div>
                    </div>

                </div>
                
                    <hr>
                    
				</div>
            </div>
        </div>
        <!-- end of chatbox -->

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <div class="footer">
                    <p>Copyright &copy; BBC Chat 2015</p>
                </div>
            </div>
        </div>
    	</div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</div>

</body>

</html>