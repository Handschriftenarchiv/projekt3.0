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
	<title>Fehlermeldung - Handschriftenarchiv Dresdner Kreuzchor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Melden Sie einen Fehler" />
	<meta name="keywords" content="Bug, Report, Handschriftenarchiv, Archiv, Dresden, Kreuzchor, Handschriftenarchiv, Dresdner Kreuzchor" />
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
		<?php include "../lang/nav.php"; ?>

 <div id="fh5co-page">
	 <header>
		 <div class="container">
			 <div class="fh5co-navbar-brand">
				 <div class="row">
					 <div class="col-xs-6">
						 <h1 class="text-left"><a class="fh5co-logo" href="/<?php echo $use_lang; ?>/"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
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
			   	<li style="background-image: url(/images/verwaltung/report/start.svg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>Report a Bug</span>
			   						<h2>Fehler melden</h2>
			   						<p class="fh5co-lead">Helfen Sie uns bei der Verbesserung unseres Services.</p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

<?php
$process=isset($_POST['location']);
$valid_location=!empty($_POST['location']);
$valid_mail=empty($_POST['email'])||filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
if($process&&$valid_location&&$valid_mail){
	str_replace(array('"',"'"),"",$_POST['name']);
	if(!empty($_POST['email'])){
		$header="From: ";
		if(!empty($_POST['name'])){
			$header.='"'.$_POST['name'].'"<'.$_POST['email'].'>';
		}else{
			$header.=$_POST['email'];
		}
		$header.="\n";
	}
	$header.="Content-Type: text/plain\n";
	$text="Kategorie: $_POST[type]\nOrt, an dem der Fehler aufgetreten ist: $_POST[location]\nFehler gemeldet von:";
	if(!empty($_POST['name'])){
		$text.=$_POST['name'];
	}else{
		$text.="<kein Name angegeben>";
	}
	$text.="\n$_POST[text]";
	if(@mail('handschriftenarchiv@protonmail.com','Fehlermeldung Kontakt - Handschriftenarchiv Dresdner Kreuzchor',$text,$header)){
		echo "<p></p>";
		$mail=true;
?>
		<div id="fh5co-contact-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-push-1 animate-box">
						<p>Der Fehler wurde gemeldet. Danke für Ihre Mithilfe zur Verbesserung unserer Services.</p>
					</div>
				</div>
			</div>
		</div>
<?php
	}else{
		$fail=true;
	}
}
if(!isset($mail)){
?>
		<form method="POST">
			<div id="fh5co-contact-section">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-md-push-1 animate-box">
							<p>Fehler-Kategorie wählen:</p>
							<ul class="contact-info">
								<style>
									.toggle + label{
										transition:color .5s;
										color:#929292;
									}
									input.toggle:checked + label{
										color:#c39f00;
									}
									.toggle + label>i::before{
										transition:color .5s;
										color:#929292;
									}
									input.toggle:checked + label>i::before{
										color:#c39f00;
									}
								</style>
								<li>
									<input type="radio" style="display:none;" class="toggle" id="db" name="type" value="Datenbank"/>
									<label for="db"><i class="icon-database"></i>Datenbankeintrag</label>
								</li>
								<li>
									<input type="radio" style="display:none;" class="toggle" id="gram" name="type" value="Grammatik"/>
									<label for="gram"><i class="icon-pencil2"></i>Rechtschreibung</label>
								</li>
								<li>
									<input type="radio" style="display:none;" class="toggle" id="func" name="type" value="fehlerhafte Funktion"/>
									<label for="func"><i class="icon-cog"></i>fehlerhafte Funktion</label>
								</li>
								<li>
									<input type="radio" style="display:none;" class="toggle" id="misc" name="type" value="sonstiger Fehler" checked="checked"/>
									<label for="misc"><i class="icon-bug"></i>sonstiger Fehler</label>
								</li>
							</ul>
						</div>
						<div class="col-md-7 col-md-push-1 animate-box">
							<div class="row">
								<?php
								if($process){
									if(isset($fail)){
										echo "<p>Es ist ein Fehler beim Übermitteln der Meldung aufgetreten.</p>";
									}
									if(!$valid_mail){
										echo "<p>Bitte geben sie keine oder eine gültige E-Mail-Adresse an.</p>";
									}
									if(!$valid_location){
										echo "<p>Bitte geben Sie den Ort bzw. die Seite an, auf der sich der Fehler befindet.</p>";
									}
								}
								?>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name (optional)" name="name" <?php if(isset($_POST['name'])){echo " value=\"$_POST[name]\"";}?>/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="E-Mail-Adresse (optional)" name="email" <?php if(isset($_POST['email'])){echo " value=\"$_POST[email]\"";}?>/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Wo?" name="location" <?php if(isset($_POST['location'])){echo " value=\"$_POST[location]\"";}elseif(isset($_GET['page'])){echo " value=\"$_GET[page]\"";}?>/>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="text" class="form-control" cols="30" rows="7" placeholder="Beschreibung des Fehlers"><?php if(isset($_POST['text'])){echo $_POST['text'];}?></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<button type="submit" class="btn btn-primary">Fehler melden</button>
									</div>
								</div>
							</div>
						<div>
							<a href="https://protonmail.com/" target="_blank"><img src="/images/kontakt/protonmail.svg" width="174px" alt="Secured by ProtonMail"></a>
						</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		<?php
	}
			echo __chunk('footer');
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
	</body>
</html>
