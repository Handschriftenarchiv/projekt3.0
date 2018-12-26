<?php
require_once "analytics.php";
require_once "translate.php";
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>

		<title><?php echo __('welcome');?> - <?php echo __('hsa'); ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Das Handschriftenarchiv Dresdner Kreuzchor sammelt, archiviert, digitalisiert und bereitet alte Drucke, Handschriften und Kopien des Dresdner Kreuzchores auf.">

		<!-- Google / Search Engine Tags -->
		<meta itemprop="name" content="Willkommen - Handschriftenarchiv Dresdner Kreuzchor">
		<meta itemprop="description" content="Das Handschriftenarchiv Dresdner Kreuzchor sammelt, archiviert, digitalisiert und bereitet alte Drucke, Handschriften und Kopien des Dresdner Kreuzchores auf.">
		<meta itemprop="image" content="http://archiv.handschriften.bplaced.de/images/index/slider/5.jpg">

		<!-- Facebook Meta Tags -->
		<meta property="og:url" content="http://archiv.handschriften.bplaced.de/">
		<meta property="og:type" content="website">
		<meta property="og:title" content="Willkommen - Handschriftenarchiv Dresdner Kreuzchor">
		<meta property="og:description" content="Das Handschriftenarchiv Dresdner Kreuzchor sammelt, archiviert, digitalisiert und bereitet alte Drucke, Handschriften und Kopien des Dresdner Kreuzchores auf.">
		<meta property="og:image" content="http://archiv.handschriften.bplaced.de/images/index/slider/5.jpg">

		<!-- Twitter Meta Tags -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:title" content="Willkommen - Handschriftenarchiv Dresdner Kreuzchor">
		<meta name="twitter:description" content="Das Handschriftenarchiv Dresdner Kreuzchor sammelt, archiviert, digitalisiert und bereitet alte Drucke, Handschriften und Kopien des Dresdner Kreuzchores auf.">
		<meta name="twitter:image" content="http://archiv.handschriften.bplaced.de/images/index/slider/5.jpg">

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

	<?php include "lang/nav.php"; ?>

	<div id="fh5co-page">
		<?php include 'lang/header.php'; ?>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(/images/index/slider/5.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<?php echo __chunk('index-0'); ?>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(/images/index/slider/6.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<?php echo __chunk('index-1'); ?>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(/images/index/slider/2.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<?php echo __chunk('index-2'); ?>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(/images/index/slider/4.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<?php echo __chunk('index-3'); ?>
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
								<input type="submit" value="Version Eins Punkt Zwei" class="btn-lable">
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
						<p><?php echo __('blog-lead'); ?> <a href="blog"><?php echo __('more'); ?></a></p>
					</div>
				</div>
				<div class="row">
					<?php
					echo __blog_prev('ratser-liste','4')
						.__blog_prev('gunter-gross','4')
						.__blog_prev('selbststaendigkeit-2019','4');
					?>
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
						<div class="work" style="background-image: url(/images/archiv/werke/1.jpg);">
							<a href="suche/details?id=3" class="view">
								<span>Der Faulbeerbaum - Alexander Tichonowitsch Gretschaninow</span>
							</a>
						</div>
					</div>
					<div class="col-md-8 text-center animate-box">
						<div class="work" style="background-image: url(/images/archiv/werke/2.jpg);">
							<a href="suche/details?id=1" class="view">
								<span>Gott der Herr ist Sonn und Schild - Johann Sebastian Bach</span>
							</a>
						</div>
					</div>
					<div class="col-md-7 text-center animate-box">
						<div class="work" style="background-image: url(/images/archiv/werke/3.jpg);">
							<a href="suche/details?id=182" class="view">
								<span>Magnificat - Franz Schubert</span>
							</a>
						</div>
					</div>
					<div class="col-md-5 text-center animate-box">
						<div class="work" style="background-image: url(/images/archiv/werke/4.jpg);">
							<a href="suche/details.php?id=213" class="view">
								<span>Verstohlen geht der Mond auf - Johannes Brahms</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>

		<?php
			// Counter-Werte abfragen
			require_once "suche/misc.php";
			$res=mysqli_query($con,"SELECT Typus,COUNT(*) as c FROM archivalien GROUP BY Typus");
			// Anzahl Handschriften
			$h=0;
			$kvh=0;
			// Anzahl Kopien
			// Anzahl Drucke
			$d=0;
			while($data=mysqli_fetch_assoc($res)){
				switch($data['Typus']){
				case 'Handschrift':$h=$data['c'];break;
				case 'Kopie von Handschrift':$kvh=$data['c'];break;
				case 'Druck':$d=$data['c'];break;
				}
			}
		?>
		<div class="fh5co-counters" style="background-image: url(/images/index/counter-blur.jpg);" data-stellar-background-ratio="0.5" id="counter-animate">
			<div class="fh5co-narrow-content animate-box">
				<div class="row" >
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $h; ?>" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label"><?php echo __('h-pl'); ?></span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $kvh; ?>" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label"><?php echo __('kvh-pl'); ?></span>
					</div>
					<div class="col-md-4 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="<?php echo $d; ?>" data-speed="5000" data-refresh-interval="40"></span>
						<span class="fh5co-counter-label"><?php echo __('d-pl'); ?></span>
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
