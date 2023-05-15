<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>BianchiMotors</title>
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

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="#" method="get" role="search">
									<input name="filtro" class="input" placeholder="Search here">
									<button class="search-btn" type="submit">Cerca</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a  href="prodotti.php?cat=1">Cerchi Motard</a></li>
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
		
        
        <div class='section'>
							
			<div class='container'>
								
				<div class='row'>


							<!-- section title -->
							<div class="col-md-12">
								<div class="section-title">
									<h3 class="title">Prodotti</h3>
								</div>

								<?php
								if (isset($_SESSION["admin"])){
									echo "
									<!-- Aggiungi prodotto al db -->
									<div class='col-md-9'>
										<a   href='AggiungiProdottoAlDB.php'>
											<button class ='primary-btn2' >
											<i ></i>
											<span>Aggiungi nuovo articolo</span>
											</button>
										</a>
											
									</div>
									<!-- /Aggiungi prodotto al db -->";
									
								}
								?>
							</div>
							<!-- /section title -->



					<div class='col-md-12 text-center'>
						<div class='row'>
							
							<div class='products-tabs'>
								<!-- tab -->
								<div id='tab1' class='tab-pane active'>
									<div class='products-slick' data-nav=''>
		
										<?php
											include("connection.php");

											if(isset($_GET["filtro"])){
												if($_GET["filtro"]==""){
													$sql="SELECT * FROM prodotti";
												}
												else{
													$sql="SELECT * FROM prodotti WHERE nomeProdotto LIKE '" . $_GET['filtro'] . "%'";
												}
											}else{
												$sql="SELECT * FROM prodotti";
											}
											$result=$conn->query($sql);
											if($result){
												if($result->num_rows>0){
													while($row=$result->fetch_assoc()){
														echo "
														<div class='product' >

														<div class='product-img'>
															<img src='". $row["IMG"]."'>

															<div class='product-label'>
																<span class='new'>NEW</span>
															</div>
															
														</div>
														<div class='product-body'>
															<p class='product-category'>".$row["marca"] ."</p>
															<h4 href='dettagliProd.php?id=" . $row['ID'] . "' >". $row['nomeProdotto'] .  "</h4>
															<h4 class='product-price'>".$row["prezzo"] . "€" ."</h4>
															<button class='primary-btn'><i class='fa fa-eye'></i><a  href='dettagliProd.php?id=" . $row['ID'] . "' >"." dettagli".  "</a></button>
															
															
														</div>
														
													</div>";
														}
													} else {
														echo "0 results";
													}
														$conn->close();
													} else{
														echo "ERROR IN " . $sql . " " . $conn->error;
													}
											?>
									</div>
								</div>
							</div>
						</div>
					</div>
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
									<li class="active"><a href="index.php">Home</a></li>
									<li><a href="prodotti.php?cat=1">Cerchi Motard</a></li>
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