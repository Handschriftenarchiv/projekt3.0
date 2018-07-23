<?php
require_once 'analytics.php';
require_once 'translate.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo __('medialib');?> - <?php echo __('hsa');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Die Mediathek des Handschriftenarchivs Dresdner Kreuzchor" />
		<meta name="keywords" content="Mediathek, Archiv, Handschriftenarchiv, Kreuzchor" />
		<meta name="author" content="Handschriftenarchiv Dresdner Kreuzchor" />

		<!--
		//////////////////////////////////////////////////////

		FREE HTML5 TEMPLATE
		DESIGNED & DEVELOPED by FREEHTML5.CO

		Website: 		http://freehtml5.co/
		Email: 			info@freehtml5.co
		Twitter: 		http://twitter.com/fh5co
		Facebook: 		https://www.facebook.com/fh5co

		//////////////////////////////////////////////////////
		-->

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="/favicon.ico">

		<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

		<!-- Animate.css -->
		<link rel="stylesheet" href="/css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="/css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="/css/bootstrap.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="/css/flexslider.css">

		<link rel="stylesheet" href="/css/style.css">


		<!-- Modernizr JS -->
		<script src="/js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<?php include "lang/nav.php" ?>

		<div id="fh5co-page">
			<?php include 'lang/header.php'; ?>
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
					<li style="background-image: url(/images/mediathek/start.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span>Bewegtbild</span>
										<h2><?php echo __('medialib');?></h2>
										<p class="fh5co-lead">Die Mediathek des Handschriftenarchis Dresdner Kreuzchor.</p>
									</div>
								</div>
							</div>
						</div>
					</li>
					</ul>
				</div>
			</aside>

			<div id="fh5co-about">
				<iframe src="https://handschriftenarchiv.rivyt.com" width="100%" height="980px" name="mediathek" scrolling="no" frameborder="0">
					<p>
						Ihr Browser ist nicht mehr aktuell. Um diesen Inhalt aufrufen zu können, nutzen Sie bitten diesen Link: <a href="https://handschriftenarchiv.rivyt.com/">Alternative Mediathek</a>
					</p>
				</iframe>
	</div>
				<?php include 'lang/footer.php'; ?>
			</div>

			<div class="fh5co-counters" style="background-image: url(/images/archiv/counter.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
				<div class="fh5co-narrow-content animate-box">
					<div class="row" >
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counters"><h2><font color="#ffffff">&nbsp;</font></h2></span>
							<span class="fh5co-counter-label">&nbsp;</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counters"><h2><font color="#ffffff">&nbsp;</font></h2></span>
							<span class="fh5co-counter-label">&nbsp;</span>
						</div>
						<div class="col-md-4 text-center">
							<span class="fh5co-counter js-counters"><h2><font color="#ffffff">&nbsp;</font></h2></span>
							<span class="fh5co-counter-label">&nbsp;</span>
						</div>
					</div>
				</div>
			</div>
		<?php echo __('footer');?>

		</div>

		<!-- jQuery -->
		<script src="/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="/js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="/js/jquery.waypoints.min.js"></script>
		<!-- Counters -->
		<script src="/js/jquery.countTo.js"></script>
		<!-- Flexslider -->
		<script src="/js/jquery.flexslider-min.js"></script>

		<!-- Main JS (Do not remove) -->
		<script src="/js/main.js"></script>
	</body>
</html>
