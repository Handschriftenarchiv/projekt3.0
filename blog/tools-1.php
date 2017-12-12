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
	<title>Tools des Archivs - Handschriftenarchiv Dresdner Kreuzchor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Reihe: Tools eines Archivs. Teil Eins "/>
	<meta name="keywords" content="Tools, Archiv, Geschichte, Handschriftenarchiv, Kreuzchor, Dresden, Protonmail" />
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
 <nav id="fh5co-main-nav" role="navigation">
	 <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
	 <div class="js-fullheight fh5co-table">
		 <div class="fh5co-table-cell js-fullheight">
			 <h1 class="text-center"><a class="fh5co-logo" href="../index.php">Handschriftenarchiv Dresdner Kreuzchor</a></h1>
			 <ul>
				 <li><a href="../index">Willkommen</a></li>
				 <li><a href="../archiv">Archiv</a></li>
				 <li><a href="../blog/">Blog</a></li>
				 <li><a href="../mediathek">Mediathek</a></li>
				 <li><a href="../suche/">Datenbank</a></li>
				 <li><a href="../impressum">Impressum</a></li>
				 <li><a href="../kontakt">Kontakt</a></li>
			 </ul>
			 <p class="fh5co-social-icon">
				 <a href="https://twitter.com/NotenarchivDKC"target="_blank"><i class="icon-twitter2"></i></a>
				 <a href="https://issuu.com/hsa6"target="_blank"><i class="icon-book"></i></a>
				 <a href="https://vimeo.com/handschriftenarchiv"target="_blank"><i class="icon-vimeo"></i></a>
				 <a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"target="_blank"><i class="icon-youtube"></i></a>
				 <a href="https://plus.google.com/108785494716898198379"target="_blank"><i class="icon-google"></i></a>
				 <a href="https://github.com/handschriftenarchiv"target="_blank"><i class="icon-github2"></i></a>
				 <a href="https://be.net/handschriftenarchiv"target="_blank"><i class="icon-behance"></i></a>
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
			   	<li style="background-image: url(../images/blog/tools/1/1.svg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span>02. Okt. 2017</span>
			   						<h2>Tools I</h2>
			   						<p class="fh5co-lead">Das Handschriftenarchiv präsentiert seine Arbeitsmittel.</p>
			   					</div>
			   				</div>
			   			</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div class="container">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Intro</h2>
					<p>Im Rahmen der Protonmailnutzung und dem Projelkt 3.0 gibt dieser Film einen kleinen Überblick</p>
					<br>
					<iframe src="https://player.vimeo.com/video/228385931?color=fff" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					<br>
					<br>
					<h2 class="intro-heading">Protonmail</h2>
					<p><span>Der sichere E-Mail Anbieter aus der Schweiz.</span></p>
					<blockquote>
						<p>
							Das Handschriftenarchiv Dresdner Kreuzchor legt sehr viel Wert auf Datenschutz und ein freies Internet,
							da es selbst mehr eine Online-Einrichtung als eine "analoge" Institution ist. Umso schwieriger ist es jedoch,
							diesen Anforderungen in der heutigen Zeit gerecht zu werden; einer Zeit, in der Google oder auch die NSA
							auf der Suche nach immer neuem Datenmaterial sind.<br>
							Für eine sichere Unternehmens- und Kundenkommunikation nutzt das Handschriftenarchiv Dresdner Kreuzchor
							aus diesem Grund ProtonMail: Der E-Mail Anbieter ist in der Schweiz ansässig und betreibt auch dort seine Server.
							Somit unterliegt der Datenverkehr über diesen Dienst den strengen Schweizer Datenschutzbedingungen.
							Desweiteren ist ProtonMail einer der wenigen Mail-Anbieter, die auf das Prinzip der End-to-End-Verschlüsselung setzen.
							Das bedeutet, dass der gesamte Mail-Verkehr durch einmalig vergebene Fingerprints verifiziert wird und auf der Strecke
							vom Sender zum Empfänger verschlüsselt und nur über diesen Fingerprint wieder entschlüsselt werden kann.
							Allerdings funktioniert dies nur, wenn beide Seiten auch ProtonMail nutzen,
							denn die meisten anderen E-Mail-Anbieter unterstützen diese Methode der verschlüsselung nicht.
						</p>
					</blockquote>
					<a href="https://protonmail.com/" target="_blank"><img src="../images/kontakt/protonmail.svg" width="174px" alt="Secured by ProtonMail"></a><br>
					<blockquote>
						<p>
							Ein weiterer Aspekt, warum das Handschriftenarchiv Dresdner Kreuzchor auf die Dienste von ProtonMail setzt ist der,
							dass dieser Mail-Abieter auch Free-Plans, also kostenlose Accounts, anbietet.
							Da es sich beim Handschriftenarchiv um eine komplett ehrenamtliche Institution handelt,
							die ohne jegliches Budget operiert, ist dies natürlich ein weiterer Aspekt, der für ProtonMail spricht:<br>
							Somit auf kostenlosem Wege, die Datensicherheit unserer Mitglieder, Kunden und Nutzer garantieren.
						</p>
					</blockquote>
					<a href="https://protonmail.com/" target="_blank"><img src="../images/blog/tools/1/3.png" width="4%" alt="Protonmail Logo-Klein"></a><br>
					<blockquote>
						<p>
							Die Institutionskommunikation des Handschriftenarchivs verläuft somit komplett über <stong>handschriftenarchiv@protonmail.com</strong>.
							Auch die Kontaktformulare und Anwendung zum Melden von Fehlern läuft über diese Adresse.
						</p>
					</blockquote><br><br>
					<div class="author">
					<img src="../images/blog/avatar.jpg" alt="Logo Handschriftenarchiv" style="width:10%;height:10%;position: relative;top: 25px;left: 30px;" vertical-align:"middle" align="left">
					<center>
						<table class="author">
							<tbody align="center">
								</tr>
								<tr style="text-align: center;">
									<td class="author"><strong>Marc Eric Mitzscherling</strong></td>
									<td class="author"><strong> </strong></td>
									<td class="author"><strong></strong></td>
									<td class="author"><strong> </strong></td>
									<td class="author"><strong>Archivar</strong></td>
								</tr>
								<tr style="text-align: center;">
									<td class="author">Autor</td>
									<td class="author"><strong> </strong></td>
									<td class="author"></td>
									<td class="author"><strong> </strong></td>
									<td class="author">Veröffentlicher</td>
								</tr>
							</tbody>
						</table>

					<!--<div class="links-social">
						<a href="http://twitter.com/share?text=Blog%20@NotenarchivDKC:%20Gunter%20Gross%20erinnert%20sich&url=http://archiv.handschriften.bplaced.de/blog/gunter-gross" target="_blank"><i class="icon-twitter-with-circle"></i></a>
						<a href="https://plus.google.com/share?url=http://archiv.handschriften.bplaced.de/blog/gunter-gross/" target="_blank"><i class="icon-google-with-circle"></i></a>
						<a href="http://www.facebook.com/sharer.php?u=http://archiv.handschriften.bplaced.de/blog/gunter-gross" target="_blank"><i class="icon-facebook-with-circle"></i></a>
					</div>-->
					</div>
					<br>
					<table class="author" media="screen">
						<tbody align="center">
							</tr>
							<tr style="align: center;">
								<td class="author"><a style='font-family:"Karla",Arial,serif;' href="behance" class="btn btn-primary">← Vorheriger Blogeintrag</a></td>
								<td class="author"><strong> </strong></td>
								<td class="author"><a style='font-family:"Karla",Arial,serif;' href="." class="btn btn-primary">Zur Eintragsübersicht</a></td>
								<td class="author"><strong> </strong></td>
								<td class="author"><a style='font-family:"Karla",Arial,serif;' href="netzneutralität" class="btn btn-primary">Nächster Blogeintrag →</a></td>
						</tbody>
					</table>
					</center>
					</div>
				</div>

	<footer>
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3 class="section-title">Über das HSA</h3>
						<p>Das Handschriftenarchiv Dresdner Kreuzchor sammelt, archiviert, digitalisiert und bereitet alte Drucke, Handschriften und Kopien des Dresdner Kreuzchores auf.</p>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h3 class="section-title">Links</h3>
						<ul>
							<li><a href="../index">Willkommen</a></li>
		 				 <li><a href="../archiv">Archiv</a></li>
		 				 <li><a href="../blog/">Blog</a></li>
		 				 <li><a href="../mediathek">Mediathek</a></li>
		 				 <li><a href="../suche/">Datenbank</a></li>
						 <li><a href="/verwaltung#presse">Mediakit</a></li>
		 				 <li><a href="../impressum">Impressum</a></li>
		 				 <li><a href="../kontakt">Kontakt</a></li>
						</ul>
					</div>

					<div class="col-md-3">
						<h3 class="section-title">Mitglied</h3>
						<p>
						<a href=https://www.deutsche-digitale-bibliothek.de/about-us/institutions/item/PXYIJUCJ654QX5KHG6E34VNE3UG3IXR2?query=Handschriftenarchiv+Dresdner+Kreuzchor target="_blank"><img src=../images/ddb.png alt="Mitglied der Deutschen Digitalen Bibliothek" width=216 height=100 /></a>
					</div>
					<div class="col-md-3">
						<h3 class="section-title">Handschriftenarchiv 3.0</h3>
						<img src="../images/wrapper-img.gif" width=231 height=130>
						<!--<form class="form-inline" id="fh5co-header-subscribe">
							<div class="row">
								<div class="col-md-12 col-md-offset-0">
									<div class="form-group">
										<input type="text" class="form-control" id="email" placeholder="Enter your email">
										<button type="submit" class="btn btn-default"><i class="icon-paper-plane"></i></button>
									</div>
								</div>
							</div>
						</form>-->
					</div>
				</div>
				<div class="row copy-right">
					<div class="col-md-6 col-md-offset-3 text-center">
						<p class="fh5co-social-icon">
							<a href="https://twitter.com/NotenarchivDKC"target="_blank"><i class="icon-twitter2"></i></a>
							<a href="https://issuu.com/hsa6"target="_blank"><i class="icon-book"></i></a>
							<a href="https://vimeo.com/handschriftenarchiv"target="_blank"><i class="icon-vimeo"></i></a>
							<a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"target="_blank"><i class="icon-youtube"></i></a>
							<a href="https://plus.google.com/108785494716898198379"target="_blank"><i class="icon-google"></i></a>
							<a href="https://github.com/handschriftenarchiv"target="_blank"><i class="icon-github2"></i></a>
							<a href="https://be.net/handschriftenarchiv"target="_blank"><i class="icon-behance"></i></a>
						</p>
						<p><a href="../verwaltung/report"target="_blank"><i class="icon-bug"></i> Fehler melden</a></p>
						<p>Copyright 2017 Handschriftenarchiv Dresdner Kreuzchor <a href="/impressum.php">Impressum</a> Alle Rechte vorbehalten. </p>
						<span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left"><a href=https://translate.googleusercontent.com/translate_c?act=url&depth=1&hl=de&ie=UTF8&prev=_t&rurl=translate.google.de&sl=en&sp=nmt4&tl=de&u=https://internetdefenseleague.org/&usg=ALkJrhjDQg4VshLY48zmtw4d205QQxxxMg target="_blank"><img src=../images/internet.png alt="Mitglied in der Internet Defense League" width=115 height=115/></a></span>
					</div>
				</div>
			</div>
		</div>
	</footer>

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
