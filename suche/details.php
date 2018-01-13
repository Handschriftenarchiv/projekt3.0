<?php
if(empty($_GET['id'])){
	header('Location: .');
	exit;
}
require_once "misc.php";
require_once "../translate.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title><?php echo __('db');?> - <?php echo __('hsa');?></title>
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

		<style>
			#export{
				transform-origin: 50% 0%;
				transform:perspective(800px) rotateX(90deg);
				transition:transform 0.3s linear 0s;
				background-color: #f2f2f2;
				border-radius:4px;
				padding:1em;
				text-align:center;
			}
			#export>a{
				font-face:"Playfair Display",Arial,serif;
			}
			#sidebar{
				float:right;
				text-align:center;
			}
			@media only screen and (max-device-width : 1024px){
				#sidebar{
					display:none;
				}
			}
		</style>

		<!-- Modernizr JS -->
		<script src="/js/modernizr-2.6.2.min.js"></script>
		<!-- FOR IE9 below -->
		<!--[if lt IE 9]>
		<script src="js/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<?php include '../lang/nav.php';?>

		<div id="fh5co-page">
			<header>
				<div class="container">
					<div class="fh5co-navbar-brand">
						<div class="row">
							<div class="col-xs-6">
								<h1 class="text-left"><a class="fh5co-logo" href="index.php"><span>Archiv</span> Handschriftenarchiv <span>Dresdner Kreuzchor</span></a></h1>
							</div>
							<div class="col-xs-6">
								<!--
								<p class="fh5co-social-icon text-right">
									<a href="https://twitter.com/NotenarchivDKC"><i class="icon-twitter2"></i></a>
									<a href="https://issuu.com/hsa6"><i class="icon-book"></i></a>
									<a href="https://vimeo.com/handschriftenarchiv"><i class="icon-vimeo"></i></a>
									<a href="https://www.youtube.com/channel/UCLuX1DzvPkx1OBjjuKQhXPw"><i class="icon-youtube"></i></a>
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
					<li style="background-image: url(/images/database/start.jpg);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-8 col-md-offset-2 col-md-push-4 js-fullheight slider-text">
								<div class="slider-text-inner">
									<div class="desc">
										<span><?php echo __('db');?></span>
										<h2>Details</h2>
										<p class="fh5co-lead"><?php
										if((int)$_GET['id']>0){
											require_once "../analytics.php";
											$res=mysqli_query($con,"SELECT * FROM archivalien WHERE ID=".$_GET['id']);
											if($res&&mysqli_num_rows($res)>0){
												$dsatz=mysqli_fetch_assoc($res);
												if(empty($dsatz['Komponist'])){
													$dsatz['Komponist']="unbekannt";
												}
												if(empty($dsatz['Dichter'])){
													$dsatz['Dichter']='unbekannt';
												}
												if(empty($dsatz['Setzer'])){
													$dsatz['Setzer']='unbekannt';
												}
												if(empty($dsatz['Verlag'])){
													$dsatz['Verlag']='unbekannt';
												}
												if(empty($dsatz['Verfassungsdatum'])){
													$dsatz['Verfassungsdatum']='unbekannt';
												}
												$dsatz['Signatur']=formatSig($dsatz['Signatur']);
												switch($dsatz['Typus']){
													case 'Handschrift':
														echo "zur Handschrift";
														break;
													case 'Kopie von Handschrift':
														echo "zur Kopie der Handschrift";
														break;
													case 'Druck':
														echo "zum Druck";
														break;
												}
												echo " &quot;".$dsatz['Titel']."&quot;";
											}
										}else{
											echo "Nichts gefunden";
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

<?php if(isset($dsatz)){ ?>
			<div id="fh5co-about">
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center animate-box">
							<div class="about-content">
								<style>
								th{
								vertical-align: text-top;
								text-align:right;}
								td{
								text-align:left;}
								</style>
								<h2><?php echo $dsatz['Titel']; ?></h2>
								<h3><i><?php echo $dsatz['Komponist']; ?></i></h3>
								<table style="margin:auto;">
									<tr><th><?php echo __('title');?>:&nbsp;</th><td><?php echo $dsatz['Titel'];?></td></tr>
									<tr><th><?php echo __('comp');?>:&nbsp;</th><td><?php echo $dsatz['Komponist']; ?></td></tr>
									<?php
									if(!empty($dsatz['Bearbeiter'])){
										echo "<tr><th>Bearbeiter:&nbsp;</th><td>".$dsatz['Bearbeiter'].'</td></tr>';
									}
									?>
									<tr><th>Dichter:&nbsp;</th><td><?php echo $dsatz['Dichter']; ?></td></tr>
									<tr><th>Setzer:&nbsp;</th><td><?php echo $dsatz['Setzer']; ?></td></tr>
									<tr><th>Typus:&nbsp;</th><td><?php echo $dsatz['Typus'];?></td></tr><?php
									if($dsatz['Typus']=='Druck'){
										echo "<tr><th>Verlag:&nbsp;</th><td>$dsatz[Verlag]</td></tr>\n";
									}
									?><tr><th>Verfassungsdatum:&nbsp;</th><td><?php echo $dsatz['Verfassungsdatum']; ?></td></tr>
									<tr><th>Sprache:&nbsp;</th><td><?php echo translate_iso639_2B($dsatz['Sprache']);?></td></tr>
									<tr><th>Schriftsystem:&nbsp;</th><td><?php echo translate_iso15924($dsatz['Schrift']);?></td></tr>
									<tr><th>Anzahl:&nbsp;</th><td><?php echo $dsatz['Anzahl'];?></td></tr>
									<tr><th>Sammlung:&nbsp;</th><td><?php echo $dsatz['Sammlung'];?></td></tr>
									<tr><th>Standort:&nbsp;</th><td><?php echo $dsatz['Standort'];?></td></tr>
									<!-- <tr><th>vorläufge Signatur:&nbsp;</th><td><?php echo $dsatz['Signatur'];?></td></tr> -->
									<?php
									if(!empty($dsatz['Bemerkungen'])){
										echo '<tr><th>Bemerkungen:&nbsp;</th><td>'.$dsatz['Bemerkungen'].'</td></tr>';
									}
									if(!empty($dsatz['Audiolink'])){
										echo "<tr><th>Hörbeispiel:&nbsp;</th><td><audio controls><source src=\"$dsatz[Audiolink]\" type=\"audio/mpeg\" />"
											."Ihr Browser unterstütz HTML5 leider nicht.<br>Wir können ihnen leider kein Hörbeispiel vorspielen.</audio></td></tr>";
									}
									if(!empty($dsatz['Dokumentlink'])){
										$docs=explode(' ',$dsatz['Dokumentlink']);
										echo "<tr><th rowspan=\"".count($docs)."\">Digitalisate:&nbsp;</th><td class=\"d\">";
										echo "<div class=\"digitalisat\"><div class=\"text\"><a href=\"https://issuu.com/hsa6/docs/".array_shift($docs)."\">$dsatz[Titel] auf Issuu</a></div></div></td></tr>";
											// ."<iframe width=\"50%\" height=\"394\" src=\"".array_shift($docs)."\" frameborder=\"0\" allowfullscreen>"
											// ."Ihr Browser unterstützt leider keine iframes.<br>Wir können ihnen leider keine Digitalisate anzeigen.</iframe></td></tr>";
										foreach($docs as $doc){
											echo "<tr><td><div class=\"digitalisat\"><a href=\"https://issuu.com/hsa6/docs/$doc\"></a></div></td></tr>";
											// echo "<tr><td><iframe width=\"50%\" height=\"394\" src=\"$doc\" frameborder=\"0\" allowfullscreen></iframe></td></tr>";
										}
									}
									?>
								</table>
								<br>
								<a href="javascript:history.back()"><p>zurück zum Suchergebnis</p></a>
								<a href="."><p>neue Suche</p></a>
								<p><a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons Lizenzvertrag" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />Dieses Werk ist lizenziert unter einer <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Namensnennung - Weitergabe unter gleichen Bedingungen 4.0 International Lizenz</a>.</p>
							</div>
						</div>
						<div id="sidebar">
							<a type="button" onclick="export_toggle()" class="btn btn-primary"><i class="icon-export"></i></a>
							<div id="export" data-open="no">
								<a style='font-family:"Karla",Arial,serif; font-style:italic;' href="export-ris.php?id=<?php echo $_GET['id'];?>" class="btn btn-primary">RIS</a><br>
								<a style='font-family:"Karla",Arial,serif; font-style:italic;' href="export.php" class="btn btn-primary">EAD</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php }else{ ?>
		<div id="fh5co-about">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center animate-box">
						<div class="about-content">
							<p>Die eingegebene ID konnte in der Datenbank nicht gefunden werden.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php } ?>
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
			function export_toggle(){
				var menu=document.getElementById('export')
				if(menu.dataset.open=="yes"){
					menu.dataset.open="no";
					menu.style="";
				}else{
					menu.dataset.open="yes";
					menu.style="transform:perspective(800px) rotateX(0deg);";
				}
			}
		</script>

		<style>
			.digitalisat{
				position:relative;
				margin:10px;
			}
			.digitalisat .text{
				padding:10px;
				text-align: center;
				background-color: rgba(0,0,0,.4);
				border-radius: 4px;
			}
			.digitalisat .text a:link{
				/* funktionniert nicht: */
				color: #fff !important;
			}
			.digitalisat .bg-img{
				z-index: -1;
				position: absolute;
				left: 0;
				right: 0;
				top: 0;
				bottom: 0;
				filter:blur(2px);
				background-position: top center;
				background-size: cover;
				border-radius: 4px;
			}
		</style>

		<script src="embed.js"></script>
	</body>
</html>
