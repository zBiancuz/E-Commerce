<?php
    include("connection.php");
    if (isset($_POST["reg"])) {
            $sql = "INSERT INTO user (nome,cognome,pswd,email,dataN) 
                    VALUES ('" . $_POST["nome"] . "', '" . $_POST["cognome"] . "', '"  . $_POST["psw"] . "', '" . $_POST["mail"] . "', '" . $_POST["data"]. "')";
            $result = $conn->query($sql);

			$user=0;
			$sql="SELECT ID FROM user WHERE nome='".$_POST["nome"] . "'";
			$result = $conn->query($sql);
			$row=$result->fetch_assoc();

			$user=$row["ID"];

			$sql="INSERT INTO carrello (IDutente) 
			VALUES (". $user . ")";
			$result = $conn->query($sql);

            $conn->close();
            header("location:login.php?msg=registrato con successo, ora accedi");
            //registra e inserisce utente nel database
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>BianchiMotors-Registrati</title>
		<link rel="Icon" type=" image/x-icon" href="img/logo1.png">
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
<body>
        <!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					
					
				</div>
			</div>
			<!-- /TOP HEADER -->
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div  >
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/Logo1.png" alt="" height="100" width="150">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">

								
								
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
        
        <div class='section'>
							
			<div class='container'>
								
				<div class='row'>


							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<h3 class="title">REGISTRATI</h3>
								</div>
							</div>
							<!-- /section title -->


							<form action="" method="POST">
        <h4>Nome: <input required type="text" name="nome"><h4> <br>

        <h4>Cognome: <input required type="text" name="cognome"><h4> <br>


        
        <h4>Password: <input required type="password" name="psw"><h4> <br>

        <h4>Email: <input required type="text" name="mail"><h4> <br>

        <h4>Data di Nascita: <input required type="date" name="data"><h4> <br>

        <button class='primary-btn' type="submit" name="reg"> Registrati </button>
    </form>

				</div>
			</div>
		</div>



<!-- FOOTER -->
<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Via Matteotti 33 (MI)</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+39 3475245865</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>BianchiMotors@E-mail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="prodotti.php?cat=1">Cerchi motard</a></li>
									<li><a href="prodotti.php?cat=2">Scarichi</a></li>
									<li><a href="prodotti.php?cat=3">Plastiche</a></li>
									<li><a href="prodotti.php?cat=4">Carbonio</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>