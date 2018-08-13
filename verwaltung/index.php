<?php
require_once '../analytics.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Verwaltungsportal - Handschriftenarchiv Dresdner Kreuzchor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Verwaltungsportal des Handschriftenarchivs Dresdner Kreuzchor." />
	<meta name="keywords" content="" />
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
		<?php include "../lang/nav.php"; ?>

	<div id="fh5co-page">
		<?php include '../lang/header.php'; ?>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(/images/verwaltung/start.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span>Interne Informationen</span>
										<h2>Verwaltungsportal</h2>
										<p class="fh5co-lead">Auswertung von Traffic und weitere Informationen</p>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
		<div id="fh5co-intro-section">
				<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box text-center">
						<center>
						<div class="form-group" style="position: center">
							<input type="submit" value="Beta Version 5.2.1" class="btn-lable">
						</div>
					</center>
						<h2 class="intro-heading">Verwaltung</h2>
						<p><span>Interne und weiterführende Kommunikation des Handschriftenarchivs Dresdner Kreuzchor.</span></p>
						<blockquote>
							<p>Diese Seite bietet die Möglichkeit Mitarbeitern des Archivs sowie Aussenstehenden die Möglichkeit sich tiefgehender über das Handschriftenarchiv zu informieren. So kann man die internen Website-Analytics einsehen aber auch den Presse- und Mediakit runterladen. Auch werden hier wichtige Informationen die interen Arbeit des Archivs betreffend publiziert, wie Daten oder Kontaktmöglichkeiten sowie weiterführende Links.</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
			<div class="col-md-8 col-md-offset-2 text-center fh5co-heading" id="presse">
				<h2>Presse- und Mediakit</h2>
				<p>Um die Möglichkeit zu geben, das Projekt 3.0 und deren Inhalt weiterzuverbreiten, darüber zu berichten bzw. sich tiefgründiger mit diesem auseinanderzusetzten, gibt es an dieser Stelle die Möglichkeit sich den Presse- und Mediakit herunterzuladen.</p>
				<br>
				<p>Inhalt: Logo Handschriftenarchiv, Logo Projekt 3.0, Wallpaper Handschriftenarchiv, Screenshot Datenbank, Beispieldigitalisierung</p><br>
				<a href="dokumente/presse.zip"target="_blank"><i class="icon-file-zip"></i> Presse.zip [3,4 MB]</a>
				<br>
				<a href="dokumente/imagefilm.mp4"target="_blank"><i class="icon-file-play"></i> Imagefilm.mp4 [3,4 MB]</a>
			</div>
	</div>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Analytics und Webtraffic</h2>
					<p>Interne Auswerung des Webtraffics des Online-Protals.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="graphs"><img class="img-responsive" src="/images/verwaltung/1.svg" alt=""></a>
						<div class="blog-text">
							<h3><a href="graphs">Zugriffe auf die Website</a></h3>
							<p>Auswertung der verschiedensten Zugriffe auf die Website.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="graphs?archivalien"><img class="img-responsive" src="/images/verwaltung/2.svg" alt=""></a>
						<div class="blog-text">
							<h3><a href="graphs?archivalien">Zugriffe auf den Katalog</a></h3>
							<p>Auswertung der verschiedensten Zugriffe und Suchanfragen im Online-Katalog.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="graphs?notfound"><img class="img-responsive" src="/images/verwaltung/3.svg" alt=""></a>
						<div class="blog-text">
							<h3><a href="graphs?notfound">Nicht gefundene Dokumente</a></h3>
							<p>Übersicht über angeforderte, aber nicht existierende Seiten.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include '../lang/footer.php';?>

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
