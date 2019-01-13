<?php
require_once 'suche/misc.php';
require_once 'translate.php';

if(strlen($_GET['id'])!=3){
	header("Location: /$use_lang/404");
	exit;
}

$_GET['id']=mysqli_real_escape_string($con,$_GET['id']);
$res=mysqli_query($con,"SELECT * FROM komponisten WHERE Abk='$_GET[id]'");
if(!$res||mysqli_num_rows($res)==0){
	header("Location: /$use_lang/404");
	exit;
}
$daten=mysqli_fetch_assoc($res);

require_once 'analytics.php';
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?php echo __('compos-info'); ?> - <?php echo __('hsa');?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Komponisten-Informationen" />
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
						<?php
						if(empty($daten['Name'])){
							$img="404.svg";
							$daten['Name']=__('UNB');
						}else{
							$img="/database/composer.jpeg";
						}
						?>
						<li style="background-image: url(/images/<?php echo $img; ?>);">
							<div class="overlay-gradient">
							</div>
							<div class="container">
								<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<span><?php echo __('compos-info'); ?></span>
											<h2><?php echo $daten['Name']; ?></h2>
											<p><?php
												$sql="SELECT Titel,Signatur FROM archivalien WHERE Komponist";
												if($_GET['id']=='UNB'){
													$sql.=" IS NULL";
												}else{
													$sql.="='$daten[Name]'";
												}
												$titles=mysqli_query($con,$sql);
												$num=mysqli_num_rows($titles);
												if($num==1){
													echo __('num-composed-sg');
												}else{
													printf(__('num-composed'),$num);
												}
											?>
											</p>
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
$res=mysqli_query($con,"SELECT Info FROM komponisten WHERE Abk='$_GET[id]'");
@$info=mysqli_fetch_assoc($res)['Info'];
if(empty($info)){
	echo __('no-info');
}else{
	if(strpos($use_lang,'de')!==0){
?>
<style>
	.about-content::before{
		content:'<?php echo __('only-ger'); ?>';
		display:block;
		background:orange;
		border-radius:5px;
	}
</style>
<?php
	}
	echo $info;
}

echo "<br><br><h4>".__('works-of-0')." $daten[Name] ".__('works-of-1').":</h4>";
while($data=mysqli_fetch_assoc($titles)){
	echo "<blockquote><a href=\"/$use_lang/suche/details/".formatSig($data['Signatur'])."\"><p>".$data['Titel']."<br><i>".$daten['Name']."</i></p></a></blockquote><br>\n";
}
?>
<br>
<br>
<a href="javascript:history.back()"><p>zurück zum Suchergebnis</p></a>
							</div>
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
