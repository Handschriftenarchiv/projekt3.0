<?php
$blog_entry=explode('blog/',$_SERVER['REQUEST_URI'])[1];
echo "<!-- $blog_entry -->";
require_once "../translate.php";
$data=preg_split('~[\r\n]+~',__chunk("blog-${blog_entry}-prev"));
$title=$data[4];
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo $title; ?> - <?php echo __('hsa'); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Behance und das Zusammenspiel von Archiv und Design." />
		<meta name="keywords" content="Behance, Archiv, Geschichte, Handschriftenarchiv, Kreuzchor, Dresden" />
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
		<link rel="shortcut icon" href="../favicon.ico">

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

		<?php include "../lang/nav.php"; ?>

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

			<?php echo __chunk('blog-'.$blog_entry); ?>

			<style>
			#fh5co-about{
				padding-bottom: 0;
			}
			#navigation{
				display:flex;
				flex-direction: row;
				justify-content: space-evenly;
				padding-bottom: 5em;
			}
			</style>
			<div id="navigation">
				<a href="tools-1" class="btn btn-primary"> ← </a>
				<a href="." class="btn btn-primary"><i class="icon-home"></i></a>
				<a href="datenbankentwicklung" class="btn btn-primary"> → </a>
			</div>

			<?php echo __chunk('footer'); ?>

		</div>

		<!-- jQuery -->
		<script src="../js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="../js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="../js/jquery.waypoints.min.js"></script>
		<!-- Counters -->
		<script src="../js/jquery.countTo.js"></script>
		<!-- Flexslider -->
		<script src="../js/jquery.flexslider-min.js"></script>

		<!-- Main JS (Do not remove) -->
		<script src="../js/main.js"></script>
	</body>
</html>
