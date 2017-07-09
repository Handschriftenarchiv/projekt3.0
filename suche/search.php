<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title>Datenbank - Handschriftenarchiv Dresdner Kreuzchor</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Offizielle Website des Handschriftenarchiv Dresdner Kreuzchor" />
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
		<nav id="fh5co-main-nav" role="navigation">
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
			<div class="js-fullheight fh5co-table">
				<div class="fh5co-table-cell js-fullheight">
					<h1 class="text-center"><a class="fh5co-logo" href="index.html">Handschriftenarchiv Dresdner Kreuzchor</a></h1>
					<ul>
						<li><a href="index.html">Willkommen</a></li>
						<li><a href="archiv.html">Archiv</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="mediathek.html">Mediathek</a></li>
						<li><a href="/suche/">Datenbank</a></li>
						<li><a href="impressum.html">Impressum</a></li>
						<li><a href="kontakt.html">Kontakt</a></li>
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
		<div id="fh5co-page">
			<header>
				<div class="container">
					<div class="fh5co-navbar-brand">
						<div class="row">
							<div class="col-xs-6">
								<h1 class="text-left"><a class="fh5co-logo" href="index.html"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
							</div>
							<div class="col-xs-6">
								<p class="fh5co-social-icon text-right">
									<a href="https://twitter.com/NotenarchivDKC"><i class="icon-twitter2"></i></a>
									<a href="https://issuu.com/hsa6"><i class="icon-book"></i></a>
									<a href="https://vimeo.com/handschriftenarchiv"><i class="icon-vimeo"></i></a>
									<a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"><i class="icon-youtube"></i></a>
								</p>
							</div>
						</div>
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					</div>
				</div>
			</header>
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
				<li style="background-image: url(images/slide_1.jpg);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
							<div class="slider-text-inner">
								<div class="desc">
									<span>Datenbank</span>
									<h2>Suchergebnisse</h2>
									<p class="fh5co-lead"><?php
									if(isset($_GET['mode'])){
										echo "erweiterte Suche";
									}else{
										$s=$_GET['search'];
										echo "Sie suchten nach &quot;$s&quot;";
									}
									?></p>
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
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="about-content">
<?php
require_once "config.php";

if(!isset($_GET['mode'])){
	$s=$_GET['search'];
	$sql="SELECT * FROM archivalien WHERE Titel like '%$s%' OR Komponist like '%$s%' OR Bearbeiter like '%$s%' OR Dichter like '%$s%' OR Setzer like '%$s%' OR Typus like '%$s%' OR Verlag like '%$s%' ".
	"OR Verfassungsdatum like '%$s%' OR Sprache like '%$s%' OR Anzahl like '%$s%' OR Sammlung like '%$s%'OR Standort like '%$s%' OR Signatur like '%".stripSig($s)."%'";
	$res=mysqli_query($con,$sql);
	while($dsatz=mysqli_fetch_assoc($res)){
		echo "\t\t\t\t\t\t\t<blockquote><a href=\"details.php?id=".$dsatz['ID']."\"><p>".$dsatz['Titel']."<br><i>".$dsatz['Komponist']."</i></p></a></blockquote><br>\n";
	}
}elseif(isset($_GET['val'])&&count($_GET['val'])>0){
	$res=mysqli_query($con,"DESCRIBE archivalien");
	while($dsatz=mysqli_fetch_array($res,MYSQLI_NUM)){
		$cols[]=$dsatz[0];
	}
	if(count($_GET['search'])!==count($_GET['val'])){
		error("A0");
		mysqli_close($con);
		exit;
	}
	$sql="SELECT * FROM archivalien WHERE ";
	for($i=0;$i<count($_GET['val']);$i++){
		if(!in_array($_GET['search'][$i],$cols)){
			error("A1");
			continue;
		}
		if($_GET['search'][$i]=='ID'){
			$sql.=$_GET['search'][$i]." like '".mysqli_real_escape_string($con,$_GET['val'][$i])."' ";
		}else{
			$sql.=$_GET['search'][$i]." like '%".mysqli_real_escape_string($con,$_GET['val'][$i])."%' ";
		}
		if($i+1<count($_GET['val'])){
			$sql.=$_GET['mode']." ";
		}
	}
	$res=mysqli_query($con,$sql);
	mysqli_close($con);
	if(!$res){
		error(mysqli_errno($con));
		exit;
	}
	while($dsatz=mysqli_fetch_assoc($res)){
		echo "\t\t\t\t\t\t\t<blockquote><a href=\"details.php?id=".$dsatz['ID']."\"><p>".$dsatz['Titel']."<br><i>".$dsatz['Komponist']."</i></p></a></blockquote><br>\n";
	}
}else{
	header("Location: ./");
	exit;
}
if(isset($_GET['search'])){
?>
							<a href="."><p>neue Suche</p></a>
<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

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
