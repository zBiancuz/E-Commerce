<?php
session_start();
	if(!isset($_SESSION["id"])){
		header('location:login.php?msg=non hai fatto la login');
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>BianchiMotors-Carrello</title>
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
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +39 3475245865</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> BianchiMotors@E-mail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Via Matteotti 33 (MI) </a></li>
					</ul>
					<?php
					if(!isset($_SESSION["id"])){
						echo	"<ul class='header-links pull-right'>
									<li><a href='login.php'><i class='fa fa-user-o'></i> Accedi</a></li>
								</ul>";
					}
				
					if(isset($_SESSION["id"])){
						echo	"<ul class='header-links pull-right'>
									<li><a href='logout.php'><i class='fa fa-user-o'></i> Esci</a></li>
								</ul>";
					}
					?>
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
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/Logo1.png" alt="" height="100" width="150">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- ACCOUNT -->
						<div class="col-md-9 clearfix">
							<div class="header-ctn">

								<!-- Cart -->
								<div >
									<a   href="Carrello.php">
										<button class ="primary-btn2" class="fa fa-shopping-cart">
										<i class="fa fa-shopping-cart"></i>
										<span>CARRELLO</span>
										</button>
									</a>
									 	
								</div>
								<!-- /Cart -->
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
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="prodotti.php?cat=1">Cerchi motard</a></li>
						<li><a href="prodotti.php?cat=2">Scarichi</a></li>
						<li><a href="prodotti.php?cat=3">Plastiche</a></li>
						<li><a href="prodotti.php?cat=4">Carbonio</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-7">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">INDIRIZZO DI SPEDIZIONE</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="first-name" placeholder="Nome">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" placeholder="Cognome">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" placeholder="Indirizzo">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" placeholder="Città">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" placeholder="Stato">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" placeholder="Codice Postale">
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" placeholder="Telefono">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="card-number" placeholder="Numero di carta">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="CVVCODE" placeholder="CVV">
							</div>
							
						</div>
						<!-- /Billing Details -->

						

						<!-- Order notes -->
						<div class="order-notes">
							<textarea class="input" placeholder="Note Ordine"></textarea>
						</div>
						<!-- /Order notes -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Ordine</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODOTTI</strong></div>
								<div><strong>TOTALE</strong></div>
							</div>
										<?php
											include("connection.php");
											$sql="SELECT * FROM (carrello join contienecarrello on carrello.ID = contienecarrello.IDcarrello)
											 join prodotti on contienecarrello.IDprodotto = prodotti.ID WHERE carrello.IDutente=".$_SESSION["id"]."" ;
											$result=$conn->query($sql);
											$totale=0;
											if($result){
												if($result->num_rows>0){
													while($row=$result->fetch_assoc()){
														echo "
														<div class='order-products'>

															<div class='order-col'>

																<a   href='EliminaDalCarrello.php?id=".$row["IDContenuto"] ."'>
																<button class='primary-btn3'>X</button> 
																</a> 

																<div> ". $row['nomeProdotto'] ." </div>
																
																<div>".$row["prezzo"] . "€" ."</div>";
																$totale=$totale+$row["prezzo"];
															echo "</div>
																	
														</div>";
														}
													} else {
														echo "<div class='section-title text-center'><strong>NESSUN ARTICOLO INSERITO</strong></div>";
													}
														$conn->close();
													} else{
														echo "ERROR IN " . $sql . " " . $conn->error;
													}

												echo"
												<div class='order-col'>
													<div><strong>TOTALE</strong></div>
													<div><strong class='order-total'>".$totale ."€" . "</strong></div>
												</div>";
										?>

						<a href="eliminaCarrello.php" class="primary-btn order-submit">ORDINA</a>



					</div>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

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