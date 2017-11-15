<?php
require_once "analytics.php";
require_once "translate.php";
?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo __('sitenotice');?> - <?php echo __('hsa'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Impressum des Handschriftenarchiv Dresder Kreuzchor" />
	<meta name="keywords" content="Impressum, Archiv, Kreuchor, Dresdner, Handschriften" />
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
 <link rel="shortcut icon" href="favicon.ico">

 <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">

 <!-- Animate.css -->
 <link rel="stylesheet" href="css/animate.css">
 <!-- Icomoon Icon Fonts-->
 <link rel="stylesheet" href="css/icomoon.css">
 <!-- Bootstrap  -->
 <link rel="stylesheet" href="css/bootstrap.css">

 <!-- Flexslider  -->
 <link rel="stylesheet" href="css/flexslider.css">

 <link rel="stylesheet" href="css/style.css">


 <!-- Modernizr JS -->
 <script src="js/modernizr-2.6.2.min.js"></script>
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
			 <h1 class="text-center"><a class="fh5co-logo" href="index.php">Handschriftenarchiv Dresdner Kreuzchor</a></h1>
			 <ul>
				 <li><a href="."><?php echo __('welcome');?></a></li>
				 <li><a href="/archiv"><?php echo __('archive');?></a></li>
				 <li><a href="/blog/"><?php echo __('blog');?></a></li>
				 <li><a href="/mediathek"><?php echo __('medialib');?></a></li>
				 <li><a href="/suche/"><?php echo __('db');?></a></li>
				 <li><a href="/impressum"><?php echo __('sitenotice');?></a></li>
				 <li><a href="/kontakt"><?php echo __('contact');?></a></li>
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
						 <h1 class="text-left"><a class="fh5co-logo" href="index.php"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
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
			   	<li style="background-image: url(images/impressum/start.jpg);">
			   		<div class="overlay-gradient"></div>
			   		<div class="container">
			   			<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
			   				<div class="slider-text-inner">
			   					<div class="desc">
			   						<span><?php echo __('sitenotice-top');?></span>
			   						<h2><?php echo __('sitenotice');?></h2>
			   						<p class="fh5co-lead">Das Impressum des Handschriftenarchivs. Hier finden Sie Kontakt Daten, Rechtliche und Datenschutz-Hinweise und Copyright-Informationen.</a></p>
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
							<h2>Impressum</h2>
							<h3>Herausgeber:</h3>
							<blockquote>
								<p>Handschriftenarchiv Dresdner Kreuzchor <br> <i>Privatprojekt von Marc Eric Mitzscherling</i></p>
							</blockquote>
							<br>
							<h3>Leitung/Verantwortung:</h3>
							<blockquote>
								<p>Marc Eric Mitzscherling<br> <i>Archivleiter, Archivar, Ansprechpartner</i></p>
							</blockquote>
							<br>
							<h3>Mitarbeiter</h3>
							<blockquote>
								<p>Johann Galle<br> <i>Programmiertechnischer Support, Digitale Datenübernahme</i></p>
							</blockquote>
							<blockquote>
								<p>Dr. Vera Keller<br> <i>Wissenschaftliche Beratung und Betreuung</i></p>
							</blockquote>
							<blockquote>
								<p>Annett Schmerler<br> <i>Standort-Verwaltung, Wissenschaftliche Beratung</i></p>
							</blockquote>
							<br>
							<h3>Kontakt</h3>
							<blockquote>
								<p>Marc Eric Mitzscherling<br> <i>Webmaster</i></p>
							</blockquote>
							<blockquote>
								<p>E-Mail<br> <i>handschriftenarchiv[ät]protonmail.com</i></p>
							</blockquote>
							<blockquote>
								<p>Adresse<br> <i>Dornblüthstraße 4, 01277 Dresden, Deutschland</i></p>
							</blockquote>
							<blockquote>
								<p>Telefon<br> <i><span>0351</span><span>3153572</span></i></p>
							</blockquote>
							<br>
							<h3>Standort</h3>
							<blockquote>
								<p>Archiv des Evangelischen Kreuzgymnasiums Dresden und des Dresdner Kreuzchores<br> <i>Stadtarchiv Dresden</i></p>
							</blockquote>
							<br>
							<h3>Website</h3>
							<blockquote>
								<p>Grundausstattung, Website-Basis<br> <i><a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></i></p>
							</blockquote>
							<blockquote>
								<p>Inhalte (Bilder, Texte, Audio-Datein, Video-Datein, etc.)<br> <i>Marc Eric Mitzscherling, Handschriftenarchiv Dresdner Kreuzchor</i></p>
							</blockquote>
							<blockquote>
								<p>Server: Kosteloser Domain-Service von <a href="http://bplaced.net/" target="_blank">Bplaced</a>.<br> <i>Server-Standort: Österreich</i></p>
							</blockquote>
							<blockquote>
								<p>Wir danken allen weiteren Mitwirkenden, die auf GitHub mitgearbeitet haben, dieses Projekt zu realisieren.</p>
							</blockquote>
							<br>
							<div id="archiv-daten">
							<h2>Urheberrecht im Archiv</h2>
							<h3>Datenschutz der Archivalien</h3>
							<blockquote>
								<p>Das Handschriftenarchiv Dresdner Kreuzchor nimmt  den Urheber- und Datenschutz im Bezug auf Archivalien und  Digitalisierungen sehr ernst. Nach dem Archivgesetz des Freistaates Sachsen (SächsArchivG) vom 01. Februar 2014 § 10 Abs. 1 dürfen Archivalien erst 30 Jahre nach der Entstehung veröffentlicht werden, sofern sich das Archivgut nicht auf natürliche Personen bezieht. Zweites wurde vom Handschriftenarchiv ausgeschlossen, da es sich im Archivgut um Noten, Drucke und Handschriften handelt, die für die täglichen Chor- und Probengebrauch des Dresdner Kreuzchores und nicht für eine einzelne Person geschaffen wurden. Als Urheber gilt im Handschriftenarchiv Dresdner Kreuzchor der Komponist des jeweiligen Werkes. Für den Fall das der Urheber bzw. das Entstehungsdatum ermittelt werden konnte gilt das Sächsische Archiv Gesetz in seiner letzten Ausgabe vom 01. Februar 2014.  Nach § 6 Abs. 3  SächsArchivG hat jedermann Recht, zu erfahren, ob im Archivgut Daten zu seiner Person enthalten sind, soweit diese Bestände erfasst sind. <br> Aufgrund dieser Regelungen veröffentlicht das Handschriftenarchiv alle Handschriften, Drucke und Noten im Allgemeinen als Datenbankeintrag und als Digitalisierung. Dies geschieht unter der der Creative Commons Lizenz <strong>by-sa 4.0</strong> . Der Notenschreiber hat als Urheber keine Rechtsanspruch!</p>
							</blockquote>
							<br>
							</div>
							<div id="recht">
							<h2>Rechtliche Hinweise</h2>
							<h3>1. Haftungsbeschränkung</h3>
							<blockquote>
								<p>Die Inhalte des Internetauftritts wurden mit größtmöglicher Sorgfalt und nach bestem Gewissen erstellt. Dennoch übernimmt der Anbieter dieser Webseite keine Gewähr für die Aktualität, Vollständigkeit und Richtigkeit der bereitgestellten Seiten und Inhalte.<br> Als Diensteanbieter ist der Anbieter dieser Webseite gemäß § 7 Abs. 1 TMG für eigene Inhalte und bereitgestellte Informationen auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich; nach den §§ 8 bis 10 TMG jedoch nicht verpflichtet, die übermittelten oder gespeicherten fremden Informationen zu überwachen. Eine Entfernung oder Sperrung dieser Inhalte erfolgt umgehend ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung. Eine Haftung ist erst ab dem Zeitpunkt der Kenntniserlangung möglich.</p>
							</blockquote>
							<br>
							<h3>2. Externe Links</h3>
							<blockquote>
								<p>Die Webseite enthält sog. „externe Links“ (Verlinkungen) zu anderen Webseiten, auf deren Inhalt der Anbieter der Webseite keinen Einfluss hat. Aus diesem Grund kann der Anbieter für diese Inhalte auch keine Gewähr übernehmen.<br> Für die Inhalte und Richtigkeit der bereitgestellten Informationen ist der jeweilige Anbieter der verlinkten Webseite verantwortlich. Zum Zeitpunkt der Verlinkung waren keine Rechtsverstöße erkennbar. Bei Bekanntwerden einer solchen Rechtsverletzung wird der Link umgehend entfernen.</p>
							</blockquote>
							<br>
							<h3>3. Urheberrecht/Leistungsschutzrecht</h3>
							<blockquote>
								<p>Die auf dieser Webseite veröffentlichten Inhalte, Werke und bereitgestellten Informationen unterliegen dem deutschen Urheberrecht und Leistungsschutzrecht. Jede Art der Vervielfältigung, Bearbeitung, Verbreitung, Einspeicherung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechts bedarf der vorherigen schriftlichen Zustimmung des jeweiligen Rechteinhabers. Das unerlaubte Kopieren/Speichern der bereitgestellten Informationen auf diesen Webseiten ist nicht gestattet und strafbar. <br><br>Das Handschriftenarchiv begrüßt es ausdrücklich, wenn Sie Dokumente zitieren und Links auf diese Website setzen, solange Sie kenntlich machen, dass es sich um Inhalte der Website des Handschriftenarchivs handelt und diese Inhalte nicht in Verbindung mit Inhalten Dritter gebracht werden, die den Interessen des Handschriftenarchivs widersprechen. <br><br> Für das Urheberrecht an Archivalien nehmen Sie bitte den Punkt "Urheberrecht im Archiv" zur Kenntnis. Wenn Sie Informationen oder Medien für anderweitige Zwecke, wie zum Beispiel Medienberichte benötigen, kontaktieren Sie uns. Wir werden Ihnen ein Presse-Kit Paket mit gewünschtem Material bereitstellen, was dann auch, nach Absprache mit dem Archivar, für Ihre Zwecke frei verwendet werden kann und nicht unter dieses Urheberrechtserklärungen fällt.</p>
							</blockquote>
							<br>
							</div>
							<div id="daten">
							<h2>Datenschutz</h2>
							<h3>Einführung</h3>
							<blockquote>
								<p>Das Handschriftenarchiv Dresdner Kreuzchor nimmt den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung. Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder E-Mail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben. Wir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.</p>
							</blockquote>
							<br>
							<h3>Cookies</h3>
							<blockquote>
								<p>Das Handschriftenarchiv Dresdner Kreuzchor verwendet teilweise so genannte Cookies. Cookies richten auf Ihrem Rechner keinen Schaden an und enthalten keine Viren. Cookies dienen dazu, unser Angebot nutzerfreundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Rechner abgelegt werden und die Ihr Browser speichert. Die meisten der von uns verwendeten Cookies sind so genannte „Session-Cookies“. Sie werden nach Ende Ihres Besuchs automatisch gelöscht. Andere Cookies bleiben auf Ihrem Endgerät gespeichert, bis Sie diese löschen. Diese Cookies ermöglichen es uns, Ihren Browser beim nächsten Besuch wiederzuerkennen. Sie können Ihren Browser so einstellen, dass Sie über das Setzen von Cookies informiert werden und Cookies nur im Einzelfall erlauben, die Annahme von Cookies für bestimmte Fälle oder generell ausschließen sowie das automatische Löschen der Cookies beim Schließen des Browser aktivieren. Bei der Deaktivierung von Cookies kann die Funktionalität dieser Website eingeschränkt sein. </p>
							</blockquote>
							<br>
							<h3>Kontaktformular</h3>
							<blockquote>
								<p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter. Es werden keine weiteren Daten (IP-Adresse, etc.), als die im visull sichtbaren Kontaktformular erhoben.</p>
							</blockquote>
							<br>
							<h3>Google Analytics</h3>
							<blockquote>
								<p>Diese Website nutzt Funktionen des Webanalysedienstes Google Analytics. Anbieter ist die Google Inc., 1600 Amphitheatre Parkway Mountain View, CA 94043, USA. <br> Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite, wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: http://tools.google.com/dlpage/gaoptout. Nähere Informationen zu Nutzungsbedingungen und Datenschutz finden Sie unter den Google Analytics Bedingungen bzw. unter der Google Analytics Übersicht. Wir weisen Sie darauf hin, dass auf dieser Webseite Google Analytics um den Code „gat._anonymizeIp();“ erweitert wurde, um eine anonymisierte Erfassung von IP-Adressen (sog. IP-Masking) zu gewährleisten.</p>
							</blockquote>
							<br>
							<h3>Twitter</h3>
							<blockquote>
								<p>Wir haben auf unserer Webseite auch den Webmessagedienst twitter.com integriert. Dieser wird durch die Twitter Inc., 1355 Market St, Suite 900, San Francisco, CA 94103, USA bereitgestellt. Twitter bietet die sog. „Tweet“ – Funktion an. Damit kann man 140 Zeichen lange Nachrichten auch mit Webseitenlinks in seinem eigenen Twitteraccount veröffentlichen. Wenn Sie die „Tweet“-Funktion von Twitter auf unseren Webseiten nutzen, wird die jeweilige Webseite mit Ihrem Account auf Twitter verknüpft und dort ggf. öffentlich bekannt gegeben. Hierbei werden auch Daten an Twitter übertragen. Von dem Inhalt der übermittelten Daten und deren Nutzung durch Twitter erhalten wir keine Kenntnis. Konsultieren Sie daher für weitere Informationen die Datenschutzerklärung von Twitter: http://twitter.com/privacyTwitter bietet Ihnen unter nachfolgendem Link die Möglichkeit, Ihre Datenschutzeinstellungen selbst festzulegen: http://twitter.com/account/settings.</p>
							</blockquote>
							<br>
							<h3>Auskunft, Löschung, Sperrung</h3>
							<blockquote>
								<p>Sie haben jederzeit das Recht auf unentgeltliche Auskunft über Ihre gespeicherten personenbezogenen Daten, deren Herkunft und Empfänger und den Zweck der Datenverarbeitung sowie ein Recht auf Berichtigung, Sperrung oder Löschung dieser Daten. Hierzu sowie zu weiteren Fragen zum Thema personenbezogene Daten können Sie sich jederzeit unter der im Impressum angegebenen Adresse oder E-Mail-Adresse an uns wenden.</p>
							</blockquote>
							<br>
							</div>
						</div>
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
										<li><a href=".">Willkommen</a></li>
										<li><a href="/archiv">Archiv</a></li>
										<li><a href="/blog/">Blog</a></li>
										<li><a href="/mediathek">Mediathek</a></li>
										<li><a href="/suche/">Datenbank</a></li>
										<li><a href="/verwaltung#presse">Mediakit</a></li>
										<li><a href="/kontakt">Kontakt</a></li>
									</ul>
								</div>

								<div class="col-md-3">
									<h3 class="section-title">Mitglied</h3>
									<p>
									<a href=https://www.deutsche-digitale-bibliothek.de/about-us/institutions/item/PXYIJUCJ654QX5KHG6E34VNE3UG3IXR2?query=Handschriftenarchiv+Dresdner+Kreuzchor target="_blank"><img src=images/ddb.png alt="Mitglied der Deutschen Digitalen Bibliothek" width=216 height=100 /></a>
								</div>
								<div class="col-md-3">
									<h3 class="section-title">Handschriftenarchiv 3.0</h3>
									<img src="images/wrapper-img.gif" width=231 height=130>
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
									<p>Copyright 2017 Handschriftenarchiv Dresdner Kreuzchor <a href="/impressum.php">Impressum</a> Alle Rechte vorbehalten. </p>
									<span class="notranslate" onmouseover="_tipon(this)" onmouseout="_tipoff()"><span class="google-src-text" style="direction: ltr; text-align: left"><a href=https://translate.googleusercontent.com/translate_c?act=url&depth=1&hl=de&ie=UTF8&prev=_t&rurl=translate.google.de&sl=en&sp=nmt4&tl=de&u=https://internetdefenseleague.org/&usg=ALkJrhjDQg4VshLY48zmtw4d205QQxxxMg target="_blank"><img src=images/internet.png alt="Mitglied in der Internet Defense League" width=115 height=115/></a></span>
								</div>
							</div>
						</div>
					</div>
				</footer>

			</div>

			<!-- jQuery -->
			<script src="js/jquery.min.js"></script>
			<!-- jQuery Easing -->
			<script src="js/jquery.easing.1.3.js"></script>
			<!-- Bootstrap -->
			<script src="js/bootstrap.min.js"></script>
			<!-- Waypoints -->
			<script src="js/jquery.waypoints.min.js"></script>
			<!-- Counters -->
			<script src="js/jquery.countTo.js"></script>
			<!-- Flexslider -->
			<script src="js/jquery.flexslider-min.js"></script>

			<!-- Main JS (Do not remove) -->
			<script src="js/main.js"></script>
			</body>
		</html>
