<?php
// erst versuchen, zu richtiger Datei zu vermitteln
// GET-Parameter entfernen
$_SERVER['REQUEST_URI']=strtok($_SERVER['REQUEST_URI'],'?');
$urip=explode('/',$_SERVER['REQUEST_URI']);
// Array säubern
$urip=array_values(array_filter($urip,function($value){return $value !== '';}));
// mögliche Ursache: Anfrage enthält Sprache
if(preg_match('~^[a-z]{2}(-[a-z]{2})*$~i',$urip[0])){
	// Umleitung 'hinter den Kulissen', wenn "Nur Sprache"-URL nicht mit / endet
	if(count($urip)==1&&substr($_SERVER['REQUEST_URI'],-1)!='/'){
		header("Location: $_SERVER[REQUEST_URI]/");
		exit;
	}
	// Sprache in GET-Parameter einfangen
	$_GET['lang']=$urip[0];
	// Pfad finden
	array_shift($urip);
	$path=$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR,$urip);
	if(file_exists($path)){
		if(is_dir($path)){
			if(substr($_SERVER['REQUEST_URI'],-1)!='/'){
				// Slash an URL anhängen, vermeidet viele Fehler
				header("Location: $_SERVER[REQUEST_URI]/");
				exit;
			}
			chdir($path);
			// Index-Datei suchen
			$files=scandir($path);
			foreach ($files as $f) {
				if($f=='index.php'||$f=='index.html'){
					// Index-Datei gefunden
					$path.=DIRECTORY_SEPARATOR.$f;
					// für Analytics
					$_SERVER['SCRIPT_NAME']=substr($path,strlen($_SERVER['DOCUMENT_ROOT']));
					include $path;
					exit;
				}
			}
			// wenn keine Index-Datei gefunden wird, fährt das Script fort
		}else{
			chdir(substr($path,0,strrpos($path,DIRECTORY_SEPARATOR)));
			// für Analytics
			$_SERVER['SCRIPT_NAME']=substr($path,strlen($_SERVER['DOCUMENT_ROOT'])-1);
			include $path;
			exit;
		}
	}
}
$path=$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR,$urip);
if(file_exists($path.'.php')){
	$path.=".php";
	// für Analytics
	$_SERVER['SCRIPT_NAME']=substr($path,strlen($_SERVER['DOCUMENT_ROOT']));
	chdir(substr($path,0,strrpos($path,DIRECTORY_SEPARATOR)));
	include $urip[count($urip)-1].".php";
	exit;
}elseif(strtolower($urip[0])=='blog'){
	require_once 'translate.php';
	array_shift($urip);
	if(file_exists($dict_dir."/chunk-translations/blog-".implode($urip))){
		// Blog-Artikel
		chdir($_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.'blog');
		// für Analytics
		$_SERVER['SCRIPT_NAME']="/blog/blog.php";
		include "blog/blog.php";
		exit;
	}
}elseif(strtolower($urip[0])=='komponist'&&!empty($urip[1])){
	$_GET['id']=$urip[1];
	// für Analytics
	$_SERVER['SCRIPT_NAME']="komponist-info.php";
	include 'komponist-info.php';
	exit;
}elseif(strtolower($urip[0])=='suche'&&strtolower($urip[1])=='details'){
	$_GET['id']=$urip[2];
	$_GET['rewrite']=true;
	// für Analytics
	chdir("suche");
	$_SERVER['SCRIPT_NAME']="suche/details.php";
	include 'details.php';
	exit;
}

require_once 'translate.php';
require_once 'analytics.php';
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

		<?php include "lang/nav.php";?>

		<div id="fh5co-page">
			<?php include 'lang/header.php'; ?>
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
