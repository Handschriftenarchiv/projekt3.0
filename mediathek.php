<?php
require_once 'analytics.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mediathek - Handschriftenarchiv Dresdner Kreuzchor</title>
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
 <link rel="stylesheet" href="css/animate.css">
 <!-- Icomoon Icon Fonts-->
 <link rel="stylesheet" href="css/icomoon.css">
 <!-- Bootstrap  -->
 <link rel="stylesheet" href="css/bootstrap.css">

 <!-- Flexslider  -->
 <link rel="stylesheet" href="css/flexslider.css">

 <link rel="stylesheet" href="css/style.css">


 <!-- Modernizr JS -->
 <script src="js/modernizr-2.6.2.min.js"></script>
 <!-- FOR IE9 below -->
 <!--[if lt IE 9]>
 <script src="js/respond.min.js"></script>
 <![endif]-->

 </head>
 <body>
	 <script type="text/javascript">
window._idl = {};
_idl.variant = "modal";
(function() {
	 var idl = document.createElement('script');
	 idl.async = true;
	 idl.src = 'https://members.internetdefenseleague.org/include/?url=' + (_idl.url || '') + '&campaign=' + (_idl.campaign || '') + '&variant=' + (_idl.variant || 'modal');
	 document.getElementsByTagName('body')[0].appendChild(idl);
})();
</script>
<!--
	 <nav id="fh5co-main-nav" role="navigation">
		 <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		 <div class="js-fullheight fh5co-table">
			 <div class="fh5co-table-cell js-fullheight">
				 <h1 class="text-center"><a class="fh5co-logo" href="index.php">Sprache</a></h1>
				 <ul>
					 <li><a href="index.php">Deutsch</a></li>
					 <li><a href="/en/index.php">Englisch</a></li>
				 </ul>
				 <p class="fh5co-social-icon">
					 <a href="https://twitter.com/NotenarchivDKC"><i class="icon-twitter2"></i></a>

					 <a href="https://issuu.com/hsa6"><i class="icon-book"></i></a>
					 <a href="https://vimeo.com/handschriftenarchiv"><i class="icon-vimeo"></i></a>
					 <a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"><i class="icon-youtube"></i></a>
				 </p>
			 </div>
		 </div>
	 </nav>
-->
 <nav id="fh5co-main-nav" role="navigation">
	 <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
	 <div class="js-fullheight fh5co-table">
		 <div class="fh5co-table-cell js-fullheight">
			 <h1 class="text-center"><a class="fh5co-logo" href="index.php">Handschriftenarchiv Dresdner Kreuzchor</a></h1>
			 <ul>
				 <li><a href="index.php">Willkommen</a></li>
				 <li><a href="archiv.php">Archiv</a></li>
				 <li><a href="blog.php">Blog</a></li>
				 <li><a href="mediathek.php">Mediathek</a></li>
				 <li><a href="/suche/">Datenbank</a></li>
				 <li><a href="impressum.php">Impressum</a></li>
				 <li><a href="kontakt.php">Kontakt</a></li>
			 </ul>
			 <p class="fh5co-social-icon">
				 <a href="https://twitter.com/NotenarchivDKC"target="_blank"><i class="icon-twitter2"></i></a>
				 <a href="https://issuu.com/hsa6"target="_blank"><i class="icon-book"></i></a>
				 <a href="https://vimeo.com/handschriftenarchiv"target="_blank"><i class="icon-vimeo"></i></a>
				 <a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"target="_blank"><i class="icon-youtube"></i></a>
				 <a href="https://plus.google.com/108785494716898198379"target="_blank"><i class="icon-google"></i></a>
				 <a href="https://github.com/handschriftenarchiv"target="_blank"><i class="icon-github2"></i></a>
				 <a href="https://be.net/handschriftenarchiv"target="_blank"><i class="icon-behance"></i></a>
			 </p>
		 </div>
	 </div>
 </nav>

 <div id="fh5co-page">
	 <header>
		 <div class="container">
			 <div class="fh5co-navbar-brand">
				 <div class="row">
					 <div class="col-xs-6">
						 <h1 class="text-left"><a class="fh5co-logo" href="index.php"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
					 </div>
					 <div class="col-xs-6">
						 <!--<p class="fh5co-social-icon text-right">
							 <a href="https://twitter.com/NotenarchivDKC"target="_blank"><i class="icon-twitter2"></i></a>
							 <a href="https://issuu.com/hsa6"target="_blank"><i class="icon-book"></i></a>
							 <a href="https://vimeo.com/handschriftenarchiv"target="_blank"><i class="icon-vimeo"></i></a>
							 <a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"target="_blank"><i class="icon-youtube"></i></a>
							 <a href="https://plus.google.com/108785494716898198379"target="_blank"><i class="icon-google"></i></a>
							 <a href="https://github.com/handschriftenarchiv"target="_blank"><i class="icon-github2"></i></a>
							 <a href="https://be.net/handschriftenarchiv"target="_blank"><i class="icon-behance"></i></a>
						 </p>-->
					 </div>
				 </div>
				 <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			 </div>
		 </div>
	 </header>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
			   	<li style="background-image: url(images/mediathek/start.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>Bewegtbild</span>
			   						<h2>Mediathek</h2>
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
			<div class="container">
				<div align="center">


							<iframe src="https://player.vimeo.com/video/225288372?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Das Projekt 3.0: Eine &raquo;Zur&uuml;ckbesinnung&laquo; auf den Kern des Archives. Mit neuer Webumgebung, durchsuchbarer Datenbank und regelm&auml;&szlig;igen Blogeintr&auml;gen. Der Imagefilm stellt das neu ver&ouml;ffentlichte Pilotprojekt des Handschriftenarchivs vor. <br> [Musik: Into the Light / Lizenzfreie Musik / www.EverMusic.de]
							</p></blockquote><br><br>
							<br>
							<iframe src="https://player.vimeo.com/video/223641172?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Das Handschriftenarchiv Dresdner Kreuzchor hat heute das Projekt 3.0 gestartet. Eine neue Philosophie eines Archives. Ab Herbst 2017&hellip;
							</p></blockquote><br><br>
							<iframe src="https://player.vimeo.com/video/223339906?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Die neue MySQL-Datenbank im Rahmen des Projekts 3.0 wird nun noch detailliertere Suchen erm&ouml;glichen. Und das alles in einem unkomplizierten Interface&hellip;
							</p></blockquote><br><br>
							<iframe src="https://player.vimeo.com/video/210479922?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Unter @NotenarchivDKC ist nun auch das Handschriftenarchiv Dresdner Kreuzchor auf Twitter zu finden. Hier das &raquo;Willkommens-Video&laquo;.
							</p></blockquote><br><br>
							<iframe src="https://player.vimeo.com/video/208001881?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Fr&uuml;hling im Handschriftenarchiv Dresdner Kreuzchor. Das Archiv stellt Noten und Handschriften im Bezug zu Fr&uuml;hling, Natur und Geschichte dar.
							</p></blockquote><br><br>
							<iframe src="https://player.vimeo.com/video/202945459?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Das Dresdner Requiem von Rudolf Mauersberger zum Gedenken an die Opfer des 13. Februar 1945.
							</p></blockquote><br><br>
							<iframe src="https://player.vimeo.com/video/191689285?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Das Handschriftenarchiv Dresdner Kreuzchor w&uuml;nscht frohe Weihnachten.
							</p></blockquote><br><br>
							<iframe src="https://player.vimeo.com/video/188418719?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								Das Handschriftenarchiv Dresdner Kreuzchor in Verbidung mit der Stadt Dresden und dem Dresdker Kreuzchor.
							</p></blockquote><br><br>
							<iframe src="https://player.vimeo.com/video/185299720?color=ffffff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							<blockquote><p>
								&Uuml;ber die Zeit hat sich das Layout - haben sich die Logos - des Handschriftenarchivs Ge&auml;ndert. Der neue Film gibt einen kleinen, aber feinen &Uuml;berblick &uuml;ber die &raquo;Kleine Geschichte&hellip;&laquo;
							</p></blockquote>
						</div>



			</div>
		</div>



		<div class="fh5co-counters" style="background-image: url(images/archiv/counter.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
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
	<footer>
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3 class="section-title">Über das HSA</h3>
						<p>Das Handschriftenarchiv Dresdner Kreuzchor sammelt, archiviert, digitalisiert und bereitet alte Drucke, Handschriften und Kopien des Dresdner Kreuzchores auf.</p>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h3 class="section-title">Links</h3>
						<ul>
							<li><a href="index.php">Willkommen</a></li>
							<li><a href="archiv.php">Archiv</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="mediathek.php">Mediathek</a></li>
							<li><a href="/suche/">Datenbank</a></li>
							<li><a href="impressum.php">Impressum</a></li>
							<li><a href="kontakt.php">Kontakt</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h3 class="section-title">Mitglied</h3>
						<p>
						<a href=https://www.deutsche-digitale-bibliothek.de/about-us/institutions/item/PXYIJUCJ654QX5KHG6E34VNE3UG3IXR2?query=Handschriftenarchiv+Dresdner+Kreuzchor target="_blank"><img src=images/ddb.png alt="Mitglied der Deutschen Digitalen Bibliothek" width=216 height=100 /></a>
					</div>
					<div class="col-md-3">
						<h3 class="section-title">Handschriftenarchiv 3.0</h3>
						<img src="images/wrapper-img.gif" width=231 height=130>
						<!--<form class="form-inline" id="fh5co-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-default"><i class="icon-paper-plane"></i></button>
									</div>
								</div>
							</div>
						</form>-->
					</div>
				</div>
				<div class="row copy-right">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="fh5co-social-icon">
							<a href="https://twitter.com/NotenarchivDKC"target="_blank"><i class="icon-twitter2"></i></a>
							<a href="https://issuu.com/hsa6"target="_blank"><i class="icon-book"></i></a>
							<a href="https://vimeo.com/handschriftenarchiv"target="_blank"><i class="icon-vimeo"></i></a>
							<a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"target="_blank"><i class="icon-youtube"></i></a>
							<a href="https://plus.google.com/108785494716898198379"target="_blank"><i class="icon-google"></i></a>
							<a href="https://github.com/handschriftenarchiv"target="_blank"><i class="icon-github2"></i></a>
							<a href="https://be.net/handschriftenarchiv"target="_blank"><i class="icon-behance"></i></a>
						</p>
						<p>Copyright 2016 Handschriftenarchiv Dresdner Kreuzchor <a href="/impressum.php">Impressum</a> All Rights Reserved. </p>
						<span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left"><a href=https://translate.googleusercontent.com/translate_c?act=url&depth=1&hl=de&ie=UTF8&prev=_t&rurl=translate.google.de&sl=en&sp=nmt4&tl=de&u=https://internetdefenseleague.org/&usg=ALkJrhjDQg4VshLY48zmtw4d205QQxxxMg target="_blank"><img src=images/internet.png alt="Mitglied in der Internet Defense League" width=115 height=115/></a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Counters -->
<script src="js/jquery.countTo.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>

<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>
</body>
</html>
