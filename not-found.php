<?php
// erst versuchen, zu richtiger Datei zu vermitteln
$urip=explode('/',$_SERVER['REQUEST_URI']);
// Array säubern
$urip=array_values(array_filter($urip,function($value){return $value !== '';}));
// mögliche Ursache: Anfrage enthält Sprache
if(preg_match('~^[a-z]{2}(-[a-z]{2})*$~i',$urip[0])){
	// Umleitung 'hinter den Kulissen'
	// Sprache in GET-Parameter einfangen
	$_GET['lang']=$urip[0];
	// Pfad finden
	array_shift($urip);
	$path=$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR,$urip);
	if(file_exists($path)){
		if(is_dir($path)){
			chdir($path);
			// find index file
			$files=scandir($path);
			foreach ($files as $f) {
				if(substr($f,0,5)=='index'){
					$path.=DIRECTORY_SEPARATOR.$f;
					break;
				}
			}
			$_SERVER['SCRIPT_NAME']=substr($path,strlen($home));
			include $path;
			exit;
		}else{
			chdir(substr($path,0,strrpos($path,'/')));
			$_SERVER['SCRIPT_NAME']=substr($path,strlen($home)-1);
			include $path;
			exit;
		}
	}elseif(file_exists($path.'.php')){
		$path.=".php";
		chdir(substr($path,0,strrpos($path,'/')));
		$_SERVER['SCRIPT_NAME']=substr($path,strlen($home)-1);
		include $path;
		exit;
	}
}

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
		<title>404 - <?php echo __('hsa');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Seite nicht gefunden" />
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
		<?php echo __chunk('nav');?>

		<div id="fh5co-page">
			<header>
				<div class="container">
					<div class="fh5co-navbar-brand">
						<div class="row">
							<div class="col-xs-6">
								<h1 class="text-left"><a class="fh5co-logo" href="index.php"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
							</div>
						</div>
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					</div>
				</div>
			</header>
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						<li style="background-image: url(/images/404.svg);">
							<div class="overlay-gradient">
							</div>
							<div class="container">
								<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<?php echo __chunk('404');?>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</aside>
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
