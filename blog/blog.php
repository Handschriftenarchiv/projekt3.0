<?php
$blog_entry=explode('blog/',$_SERVER['REQUEST_URI'])[1];
require_once "../translate.php";
$data=json_decode(file_get_contents('entries.json'),true);
foreach($data as $key => $value){
	if($value['title']==$blog_entry){
		$index=$key;
		break;
	}
}
if(!isset($index)){
	// Blog-Artikel existiert nicht
	require_once '../not-found.php';
	exit;
}
$bg_img=$data[$index]['background'];
$author=$data[$index]['author'];
$index--;
if($index<0){
	$index+=count($data);
}
$translation=preg_split('~[\r\n]+~',__chunk("blog-${blog_entry}-prev"));
$title=$translation[2];
$_GET['id']=$title;// für analytics
require_once "../analytics.php";
$prev=$data[$index]['title'];
$index=($index+2)%count($data);
$next=$data[$index]['title'];
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
		<link rel="shortcut icon" href="/favicon.ico">

		<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

		<!-- Animate.css -->
		<link rel="stylesheet" href="/css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="/css/icomoon.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="/css/bootstrap.css">
		<!-- Blog-Stylesheet -->
		<link rel="stylesheet" href="/blog/blog.css">

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
	<a href="/<?php echo $use_lang; ?>/blog" id="exit"></a>

	<body style=" background-image: url(<?php echo $bg_img; ?>);">

		<div class="blog-div">
			<div><?php echo __chunk('blog-'.$blog_entry); ?></div>
		</div>

		<div id="spacer-author"></div>

		<div class="author">
			<!-- <img src="/images/logo.jpg" alt="Logo Handschriftenarchiv"> -->
			<?php
				echo '<table class="author" style="margin:auto;"><tbody align="center"><tr>';
				foreach($author as $val){
					echo "<td class='author'>$val[1]</td>";
				}
				echo '</tr><tr>';
				foreach($author as $val){
					echo "<td class='author'><strong>$val[0]</strong></td>";
				}
				echo '</tr></tbody></table>';
			?>
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

		<script>
			window.onscroll = function(){
				// nach wieviel gescrollten px soll Autor-div angezeigt werden
				const offset=100;
				if(document.body.scrollTop>offset||document.documentElement.scrollTop>offset){
					// anzeigen
					document.querySelector('div.author').classList.add("show");
				}else{
					// nicht mehr anzeigen
					document.querySelector('div.author').classList.remove("show");
				}
			}
		</script>

		<!--
		<div id="navigation">
			<a href="<?php echo $prev; ?>" class="btn btn-primary"> ← </a>
			<a href="/<?php echo $use_lang; ?>/blog" class="btn btn-primary"><i class="icon-home"></i></a>
			<a href="<?php echo $next; ?>" class="btn btn-primary"> → </a>
		</div>-->


	</body>
</html>
