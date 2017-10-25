<?php
require_once "analytics.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Willkommen - Handschriftenarchiv Dresdner Kreuzchor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Das Handschriftenarchiv Dresdner Kreuzchor sammelt, archiviert, digitalisiert und bereitet alte Drucke, Handschriften und Kopien des Dresdner Kreuzchores auf." />
	<meta name="keywords" content="Handschrift, Kreuzchor, Geschichte, Archiv, Dresden" />
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
					<li><a href=".">Willkommen</a></li>
					<li><a href="/archiv">Archiv</a></li>
					<li><a href="/blog/">Blog</a></li>
					<li><a href="/mediathek">Mediathek</a></li>
					<li><a href="/suche/">Datenbank</a></li>
					<li><a href="/impressum">Impressum</a></li>
					<li><a href="/kontakt">Kontakt</a></li>
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
						<!--	<p class="fh5co-social-icon text-right">

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
			   	<li style="background-image: url(images/index/slider/5.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>10. Okt. 2017</span>
			   						<h2>Beta-Version des Projekts 3.0</h2>
			   						<p>Die Gesamt-Einrichtung Handschriftenarchiv Dresdner Kreuzchor wurde in den letzten 4 Monaten komplett modernisiert. Mit einer neuen Philosophie widmen wir uns unseren Aufgaben neu.</p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
					<li style="background-image: url(images/index/slider/6.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>10. Okt. 2017</span>
				   					<h2>Handschriften Digital erleben</h2>
				   					<p>Entdecken und Erleben Sie unsere Handschriften mit einem neuen Online-Katalog.</p>
				   				</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/index/slider/2.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>10. Jun. 2017</span>
				   					<h2>@NotenarchivDKC bei Twitter</h2>
				   					<p>Das Handschriftenarchiv Dresdner Kreuzchor ist seit mehreren Monaten auch im Social Web unterwegs. Bleiben Sie immer informiert une folgen Sie uns.</p>
				   				</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/index/slider/4.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>10 Sept. 2017</span>
				   					<h2>Neuer Imagefilm für das Projekt 3.0 im Jahr 2017</h2>
				   					<p>Im Rahmen des Projekts 3.0 wurde ein neuer Imagefilm auf der Grundlage unsere neuen Archiv-Philosophie produziert.</p>
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
							<input type="submit" value="Beta Version" class="btn-lable">
						</div>
					</center>
						<h2 class="intro-heading">Handschriftenarchiv Dresdner Kreuzchor</h2>
						<p><span>Noten, Drucke und Handschriften des Dresdner Kreuzchors</span></p>
						<blockquote>
							<p>Das Handschriftenarchiv Dresdner Kreuzchor sammelt, erfasst, digitalisiert und veröffentlicht Handschriften, Noten, Drucke und Kopien aus der traditionsreichen, musikalischen Geschichte des weltberühmten Dresdner Kreuzchors. <br> <br> Haben Sie Teil an über hundert Jahren alten Noten und Handschriften. Erleben Sie Digitalisierung und entdecken Sie mitteldeutsche Tradition und deutsche Geschichte.</p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</div>

		<div id="fh5co-featured">
			<div class="container-fluid">
				<!--
				<a class="twitter-timeline" data-lang="de" data-link-color="#929292" data-tweet-limit="3" data-width= "800"
  data-height="300"href="https://twitter.com/NotenarchivDKC">Tweets by NotenarchivDKC</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
-->
				<div class="row">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Twitter</h2>
							<p>Unsere aktuelle Twitter-TimeLine. Verfolgen Sie uns im Social Web.</p>
						</div>
					</div>
					<div class="post-entry">
						<center>
						<a class="twitter-timeline" data-lang="de" data-width="800" data-height="700" data-link-color="#929292" href="https://twitter.com/NotenarchivDKC"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</center>
			</div>
		</div>
<br>

			<div class="container">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Imagefilm 3.0</h2>
						<p>Das Projekt 3.0: Eine »Zurückbesinnung« auf den Kern des Archives. Mit neuer Webumgebung, durchsuchbarer Datenbank und regelmäßigen Blogeinträgen. Der Imagefilm stellt das neu veröffentlichte Pilotprojekt des Handschriftenarchivs vor.</p>
						<br>
						<iframe src="https://player.vimeo.com/video/225288372?color=fff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
			</div>



		<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Blog</h2>
						<p>Die neuesten und beliebtesten Blogeinträge. Hier schreibt das Handschriftenarchiv über Noten, Komponisten und Geschichte.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="/blog/ratser-liste"><img class="img-responsive" src="images/blog/liste/1.svg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">01. Okt. 2017</span>
								<span class="comment"><i class="icon-pencil"></i> Archivar, Wissenschaftliche Mitarbeiter</span>
								<h3><a href="/blog/ratser-liste">Ratsdiskandisten von 1935 bis 2017</a></h3>
								<p>Hall of Fame der Notenbibliotheksgeschichte: Eine Übersicht über alle Notenschreiber und Notenbiblothekare, sogenannte Ratsdiskandisten von 1935 bis 2017.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="/blog/gunter-gross"><img class="img-responsive" src="images/blog/gross/1.jpg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">29. Jul 2017</span>
								<span class="comment"><i class="icon-pencil"></i> Gunter Gross</span>
								<h3><a href="/blog/gunter-gross">Gunter Groß erinnert sich</a></h3>
								<p>Gunter Groß: ein ehemaligen Kruzianer, Notenschreiber und Ratsdiskandist unter Rudolf Mauersberger.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="/blog/tools-1"><img class="img-responsive" src="images/blog/tools/1/1.svg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">28. Sep 2017</span>
								<span class="comment"><i class="icon-pencil"></i> Archivar</span>
								<h3><a href="/blog/tools-1">Protonmail</a></h3>
								<p>Teil I der Serie "Die Tools des Handschriftenarchivs Dresdner Kreuzchor"</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-work-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Werke</h2>
						<p>Das Handschriftenarchiv Dresdner Kreuzchor digitalisiert. Unsere besondersten Werke...</p>
					</div>
				</div>
				<div id="werk">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="work" style="background-image: url(images/index/werke/1.jpg);">
							<a href="#werk" class="view">
								<span>Der Faulbeerbaum - Alexander Tichonowitsch Gretschaninow</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url(images/index/werke/2.jpg);">
							<a href="#werk" class="view">
								<span>Gott der Herr ist Sonn und Schild - Johann Sebastian Bach</span>
							</a>
						</div>
					</div>
					<div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url(images/index/werke/3.jpg);">
							<a href="#werk" class="view">
								<span>Magnificat - Franz Schubert</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url(images/index/werke/4.jpg);">
							<a href="#werk" class="view">
								<span>Verstohlen geht der Mond auf - Johannes Brahms</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

		<div class="fh5co-counters" style="background-image: url(images/index/counter.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
			<div class="fh5co-narrow-content animate-box">
				<div class="row" >
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="90" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label">Handschriften</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="289" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label">Kopien von Handschriften</span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label">Drucke</span>
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
								<li><a href="/archiv">Archiv</a></li>
								<li><a href="/blog/">Blog</a></li>
								<li><a href="/mediathek">Mediathek</a></li>
								<li><a href="/suche/">Datenbank</a></li>
								<li><a href="/verwaltung#presse">Mediakit</a></li>
								<li><a href="/impressum">Impressum</a></li>
								<li><a href="/kontakt">Kontakt</a></li>
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
							<p><a href="/verwaltung/report"target="_blank"><i class="icon-bug"></i> Fehler melden</a></p>
							<p>Copyright 2017 Handschriftenarchiv Dresdner Kreuzchor <a href="/impressum.php">Impressum</a> Alle Rechte vorbehalten. </p>
							<span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left"><a href=https://translate.googleusercontent.com/translate_c?act=url&depth=1&hl=de&ie=UTF8&prev=_t&rurl=translate.google.de&sl=en&sp=nmt4&tl=de&u=https://internetdefenseleague.org/&usg=ALkJrhjDQg4VshLY48zmtw4d205QQxxxMg target="_blank"><img src=images/internet.png alt="Mitglied in der Internet Defense League" width=115 height=115/></a></span>

							<div id="google_translate_element" style="align:center;"></div><script type="text/javascript">
							function googleTranslateElementInit() {
							  new google.translate.TranslateElement({pageLanguage: 'de', includedLanguages: 'en,es,fi,fr,it,ja,ru,zh-CN', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
							}
							</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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
