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
	<title><?php echo __('blog');?> - <?php echo __('hsa');?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Der Blog des  Handschriftenarchivs Dresdner Kreuzchor: Geschichten, Fakten und Handschriften." />
	<meta name="keywords" content="Blog, Archiv, Geschichte, Handschriftenarchiv, Kreuzchor, Dresden" />
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
		<link rel="shortcut icon" href="../favicon.ico">

		<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

		<!-- Animate.css -->
		<link rel="stylesheet" href="../css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="../css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="../css/bootstrap.css">

		<!-- Flexslider  -->
		<link rel="stylesheet" href="../css/flexslider.css">

		<link rel="stylesheet" href="../css/style.css">


		<!-- Modernizr JS -->
		<script src="../js/modernizr-2.6.2.min.js"></script>
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

		<?php echo __chunk('nav'); ?>

		<div id="fh5co-page">
			<header>
				<div class="container">
					<div class="fh5co-navbar-brand">
						<div class="row">
							<div class="col-xs-6">
								<h1 class="text-left"><a class="fh5co-logo" href="../index.php"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
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
						<li style="background-image: url(../images/blog/start.jpg);">
							<div class="overlay-gradient"></div>
							<div class="container">
								<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<span>Lesen Sie unseren Blog</span>
											<h2><?php echo __('blog');?></h2>
											<p class="fh5co-lead">Hier schreibt das Handschriftenarchiv über Noten, Komponisten und Geschichte.</p>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</aside>

			<div id="fh5co-blog" class="fh5co-bg-section">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="fh5co-blog animate-box">
										<a href="netzneutralität"><img class="img-responsive" src="../images/blog/netzneutralitaet/1.png" alt="Wallpaper Netneutrality"></a>
										<div class="blog-text">
											<span class="posted_on">03. Nov. 2017</span>
											<span class="comment"><i class="icon-pencil"></i> Archivar</span>
											<h3><a href="netzneutralität">Netzneutralität</a></h3>
											<p>Das Handschriftenarchiv Dresdner Kreuzchor und der Kampf für die Netzneutralität.</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="fh5co-blog animate-box">
										<a href="isil-nummer"><img class="img-responsive" src="../images/blog/isil/1.png" alt=""></a>
										<div class="blog-text">
											<span class="posted_on">07. Okt. 2017</span>
											<span class="comment"><i class="icon-pencil"></i> Archivar</span>
											<h3><a href="isil-nummer">ISIL Nummer</a></h3>
											<p>Das Handschriftenarchiv in der Loge international genormter Archive.</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="fh5co-blog animate-box">
										<a href="datenbankentwicklung"><img class="img-responsive" src="../images/blog/datenbank/1.png" alt="Beta-Version"></a>
										<div class="blog-text">
											<span class="posted_on">07. Okt. 2017</span>
											<span class="comment"><i class="icon-pencil"></i> Archivar</span>
											<h3><a href="datenbankentwicklung">Zur Datenbank</a></h3>
											<p>Aktuelle Information zu Online-Datenbank des Handschriftenarchivs.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="fh5co-blog animate-box">
										<a href="ratser-liste"><img class="img-responsive" src="/images/blog/liste/1.svg" alt="Illustration Ratserliste"></a>
										<div class="blog-text">
											<span class="posted_on">01. Okt. 2017</span>
											<span class="comment"><i class="icon-pencil"></i> Archivar, Wissenschaftliche Mitarbeiter</span>
											<h3><a href="ratser-liste">Ratsdiskandisten von 1935 bis 2017</a></h3>
											<p>Hall of Fame der Notenbibliotheksgeschichte: Eine Übersicht über alle Notenschreiber und Notenbiblothekare, sogenannte Ratsdiskandisten von 1935 bis 2017.</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="fh5co-blog animate-box">
										<a href="tools-1"><img class="img-responsive" src="/images/blog/tools/1/1.svg" alt=""></a>
										<div class="blog-text">
											<span class="posted_on">28. Sep. 2017</span>
											<span class="comment"><i class="icon-pencil"></i> Archivar</span>
											<h3><a href="tools-1">Protonmail</a></h3>
											<p>Teil I der Serie "Die Tools des Handschriftenarchivs Dresdner Kreuzchor"</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<div class="fh5co-blog animate-box">
										<a href="gunter-gross"><img class="img-responsive" src="/images/blog/gross/1.jpg" alt="Gunter Gross beim Notenschreiben"></a>
										<div class="blog-text">
											<span class="posted_on">29. Jul. 2017</span>
											<span class="comment"><i class="icon-pencil"></i>Gunter Gross</span>
											<h3><a href="gunter-gross">Gunter Groß erinnert sich</a></h3>
											<p>Gunter Groß: ein ehemaligen Kruzianer, Notenschreiber und Ratsdiskandist unter Rudolf Mauersberger.</p>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="fh5co-blog animate-box">
										<a href="behance"><img class="img-responsive" src="/images/blog/behance/1.jpg" alt="Behance-Profil Screenshot"></a>
										<div class="blog-text">
											<span class="posted_on">05 Aug. 2017</span>
											<span class="comment"><i class="icon-pencil"></i> Archivar</span>
											<h3><a href="behance">Behance...</a></h3>
											<p>...als neues Soziales Netzwerk für das Handschriftenarchiv</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?php echo __chunk('footer');?>

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
