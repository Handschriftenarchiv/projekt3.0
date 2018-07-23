<?php
require_once 'analytics.php';
require_once 'translate.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<!--<link href='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet' />-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo __('contact').' - '.__('hsa');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Bleiben Sie in Kontakt mit dem Handschriftenarchiv" />
		<meta name="keywords" content="Kontakt, Handschriftenarchiv, Archiv, Dresden, Kreuzchor, Handschriftenarchiv, Dresdner Kreuzchor" />
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

		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />

		<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="favicon.ico">

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
		<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<?php include "lang/nav.php"; ?>

	<div id="fh5co-page">
		<?php include 'lang/header.php'; ?>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(/images/kontakt/start.svg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span><?php echo __('contact-top'); ?></span>
										<h2><?php echo __('contact'); ?></h2>
										<p class="fh5co-lead"><?php echo __('contact-lead'); ?></p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="fh5co-contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-push-1 animate-box">
						<h3><?php echo __('contact-top'); ?></h3>
						<ul class="contact-info">
							<li><i class="icon-location-pin"></i>Dornblüthstraße 4, 01277 Dresden, Deutschland</li>
							<li><i class="icon-phone2"></i><span>0351</span><span>3153572</span></li>
							<li><i class="icon-mail"></i>handschriftenarchiv<br>[ät]protonmail.com</li>
							<li><i class="icon-globe2"></i><a href="http://hsa.bplaced.de/">hsa.bplaced.com</a></li>
						</ul>
					</div>
					<div class="col-md-7 col-md-push-1 animate-box">
						<?php
						$process=isset($_POST['name']);
						$valid=!empty($_POST['email'])&&filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
						if($process&&$valid){
							$header="From: \"".str_replace('"',"",$_POST[name])."\" <$_POST[email]>\nContent-Type: text/plain\n";
							if(mail('handschriftenarchiv@protonmail.com','Anfrage Kontakt - Handschriftenarchiv Dresdner Kreuzchor',$_POST['text'],$header)){
								echo "<p>".__('mail-success')."</p>";
								$mail=true;
							}else{
								echo "<p>".__('mail-fail')."</p>";
							}
						}elseif($process){
							echo "<p>".__('mail-enter-addr')."</p>";
						}
						if(!isset($mail)){
						?>
						<form method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo __('name'); ?>" name="name"<?php if(isset($_POST['name'])){echo " value=\"$_POST[name]\"";}?>>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="<?php echo __('mail-addr'); ?>" name="email"<?php if(isset($_POST['email'])){echo " value=\"$_POST[email]\"";}?>>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="text" class="form-control" id="" cols="30" rows="7" placeholder="<?php echo __('msg'); ?>"><?php if(isset($_POST['text'])){echo $_POST['text'];}?></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="<?php echo __('mail-send'); ?>" class="btn btn-primary">
									</div>
								</div>
							</div>
						</form>
						<?php } ?>
						<div>
							<a href="https://protonmail.com/" target="_blank"><img src="/images/kontakt/protonmail.svg" width="174px" alt="<?php echo __('mail-secured'); ?>"></a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php include 'lang/footer.php'; ?>

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
