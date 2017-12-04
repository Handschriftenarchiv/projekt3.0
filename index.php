<?php
require_once "analytics.php";
require_once "translate.php";
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo __('welcome');?> - <?php echo __('hsa'); ?></title>
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
	<?php include "lang/nav.php"; ?>

	<div id="fh5co-page">
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<div class="row">
						<div class="col-xs-6">
							<h1 class="text-left"><a class="fh5co-logo" href="/<?php echo $use_lang; ?>/"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
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
					<li style="background-image: url(/images/index/slider/5.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span>10. 10. 2017</span>
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
										<span>10. 10. 2017</span>
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
										<span>10. 06. 2017</span>
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
										<span>10. 09. 2017</span>
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
							<h2 class="intro-heading"><?php echo __('hsa'); ?></h2>
							<p><span><?php echo __('intro'); ?></span></p>
							<blockquote>
								<p><?php echo __('hsa-summary'); ?></p>
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
							<p><?php echo __('twit-recent').' '.__('followus'); ?></p>
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
					<p><?php echo __('3.0-about'); ?></p>
					<br>
					<iframe src="https://player.vimeo.com/video/225288372?color=fff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
		</div>

		<div id="fh5co-blog" class="fh5co-bg-section">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2><?php echo __('blog'); ?></h2>
						<p><?php echo __('blog-lead'); ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="blog/ratser-liste"><img class="img-responsive" src="/images/blog/liste/1.svg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">01. 10. 2017</span>
								<span class="comment"><i class="icon-pencil"></i> Archivar, Wissenschaftliche Mitarbeiter</span>
								<h3><a href="blog/ratser-liste">Ratsdiskandisten von 1935 bis 2017</a></h3>
								<p>Hall of Fame der Notenbibliotheksgeschichte: Eine Übersicht über alle Notenschreiber und Notenbiblothekare, sogenannte Ratsdiskandisten von 1935 bis 2017.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="blog/gunter-gross"><img class="img-responsive" src="/images/blog/gross/1.jpg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">29. 07. 2017</span>
								<span class="comment"><i class="icon-pencil"></i> Gunter Gross</span>
								<h3><a href="blog/gunter-gross">Gunter Groß erinnert sich</a></h3>
								<p>Gunter Groß: ein ehemaligen Kruzianer, Notenschreiber und Ratsdiskandist unter Rudolf Mauersberger.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="fh5co-blog animate-box">
							<a href="blog/tools-1"><img class="img-responsive" src="/images/blog/tools/1/1.svg" alt=""></a>
							<div class="blog-text">
								<span class="posted_on">28. 09. 2017</span>
								<span class="comment"><i class="icon-pencil"></i> Archivar</span>
								<h3><a href="blog/tools-1">Protonmail</a></h3>
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
						<h2><?php echo __('insight'); ?></h2>
						<p><?php echo __('insight-about'); ?></p>
					</div>
				</div>
				<div id="werk">
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="work" style="background-image: url(images/archiv/werke/1.jpg);">
							<a href="suche/details?id=3" class="view">
								<span>Der Faulbeerbaum - Alexander Tichonowitsch Gretschaninow</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url(images/archiv/werke/2.jpg);">
							<a href="suche/details?id=1" class="view">
								<span>Gott der Herr ist Sonn und Schild - Johann Sebastian Bach</span>
							</a>
						</div>
					</div>
					<div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url(images/archiv/werke/3.jpg);">
							<a href="suche/details?id=182" class="view">
								<span>Magnificat - Franz Schubert</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url(images/archiv/werke/4.jpg);">
							<a href="suche/details.php?id=213" class="view">
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
						<span class="fh5co-counter-label"><?php echo __('h-pl'); ?></span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="289" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label"><?php echo __('kvh-pl'); ?></span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="20" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label"><?php echo __('d-pl'); ?></span>
					</div>
				</div>
			</div>
		</div>

		<?php echo __chunk('footer'); ?>

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
