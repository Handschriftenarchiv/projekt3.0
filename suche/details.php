<?php
require_once "../translate.php";
if(empty($_GET['id'])){
	header("Location: /$use_lang/suche");
	exit;
}elseif(empty($_GET['rewrite'])){
	header("Location: /$use_lang/suche/details/$_GET[id]");
}
require_once "misc.php";
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

		<link href="/fonts/karla/include.css" rel="stylesheet"/>
		<link href="/fonts/playfair-display/include.css" rel="stylesheet"/>

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
			<?php include '../lang/header.php'; ?>
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
										<h2><?php echo __('det');?></h2>
										<p class="fh5co-lead"><?php
										if(!ctype_digit($_GET['id'])){
											// Es handelt sich wahrscheinlich um eine Signatur
											$sig=stripSig($_GET['id']);
											// ID der zugehörigen Signatur finden
											if($sig){
												$res=mysqli_query($con,"SELECT ID FROM archivalien WHERE Signatur='$sig'");
												if(mysqli_num_rows($res)){
													$_GET['id']=mysqli_fetch_array($res,MYSQLI_NUM)[0];
												}else{
													$_GET['id']=0;
												}
											}
										}
										if(ctype_digit($_GET['id'])&&(int)$_GET['id']>0){
											require_once "../analytics.php";
											$res=mysqli_query($con,"SELECT * FROM archivalien LEFT JOIN komponisten ON komponisten.Name=archivalien.Komponist WHERE ID=$_GET[id]");
											if($res&&mysqli_num_rows($res)>0){
												$dsatz=mysqli_fetch_assoc($res);
												if(empty($dsatz['Komponist'])){
													$dsatz['Komponist']='unbekannt';
													$dsatz['Abk']='UNB';
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
														echo __('4h');
														break;
													case 'Kopie von Handschrift':
														echo __('4kvh');
														break;
													case 'Druck':
														echo __('4d');
														break;
												}
												echo " &quot;".$dsatz['Titel']."&quot;";
											}
										}else{
											echo __('404');
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
								.highlight{
								text-decoration:underline dashed;}
								</style>
								<h2><?php echo $dsatz['Titel']; ?></h2>
								<h3><a href="<?php echo "/$use_lang/komponist/$dsatz[Abk]"; ?>" class="highlight"><i><?php echo $dsatz['Komponist']; ?></i></a></h3>
								<table style="margin:auto;">
									<tr><th><?php echo __('title');?>:&nbsp;</th><td><?php echo $dsatz['Titel'];?></td></tr>
									<tr><th><?php echo __('comp');?>:&nbsp;</th><td><?php echo $dsatz['Komponist']; ?></td></tr>
									<?php
									if(!empty($dsatz['Bearbeiter'])){
										echo "<tr><th>Bearbeiter:&nbsp;</th><td>".$dsatz['Bearbeiter'].'</td></tr>';
									}
									?>
									<tr><th><?php echo __('poet');?>:&nbsp;</th><td><?php echo $dsatz['Dichter']; ?></td></tr>
									<tr><th><?php echo __('setter');?>:&nbsp;</th><td><?php echo $dsatz['Setzer']; ?></td></tr>
									<tr><th><?php echo __('typ');?>:&nbsp;</th><td><?php echo $dsatz['Typus'];?></td></tr><?php
									if($dsatz['Typus']=='Druck'){
										echo "<tr><th>Verlag:&nbsp;</th><td>$dsatz[Verlag]</td></tr>\n";
									}
									?><tr><th><?php echo __('pub');?>:&nbsp;</th><td><?php echo $dsatz['Verfassungsdatum']; ?></td></tr>
									<tr><th><?php echo __('lang');?>:&nbsp;</th><td><?php echo translate_iso639_2B($dsatz['Sprache']);?></td></tr>
									<tr><th><?php echo __('script');?>:&nbsp;</th><td><?php echo translate_iso15924($dsatz['Schrift']);?></td></tr>
									<tr><th><?php echo __('num');?>:&nbsp;</th><td><?php echo $dsatz['Anzahl'];?></td></tr>
									<tr><th><?php echo __('collection');?>:&nbsp;</th><td><?php echo $dsatz['Sammlung'];?></td></tr>
									<tr><th><?php echo __('loc');?>:&nbsp;</th><td><?php echo $dsatz['Standort'];?></td></tr>
									<tr><th><?php echo __('sig');?>:&nbsp;</th><td><?php echo $dsatz['Signatur'];?></td></tr>
									<?php
									if(!empty($dsatz['Bemerkungen'])){
										echo '<tr><th>'.__('rem').':&nbsp;</th><td>'.$dsatz['Bemerkungen'].'</td></tr>';
									}
									if(!empty($dsatz['Audiolink'])){
										echo "<tr><th>".__('audiolink').":&nbsp;</th><td><audio controls><source src=\"$dsatz[Audiolink]\" type=\"audio/mpeg\" />"
											."Ihr Browser unterstütz HTML5 leider nicht.<br>Wir können ihnen leider kein Hörbeispiel vorspielen.</audio></td></tr>";
									}
									if(!empty($dsatz['Dokumentlink'])){
										$docs=explode(' ',$dsatz['Dokumentlink']);
										echo "<tr><th rowspan=\"".count($docs)."\">".__('digi').":&nbsp;</th><td class=\"d\">";
										echo "<div class=\"digitalisat\"><a href=\"https://issuu.com/hsa6/docs/".array_shift($docs)."\">".__('digi')." @ issuu.com</a></div></td></tr>";
											// ."<iframe width=\"50%\" height=\"394\" src=\"".array_shift($docs)."\" frameborder=\"0\" allowfullscreen>"
											// ."Ihr Browser unterstützt leider keine iframes.<br>Wir können ihnen leider keine Digitalisate anzeigen.</iframe></td></tr>";
										foreach($docs as $doc){
											echo "<tr><td><div class=\"digitalisat\"><a href=\"https://issuu.com/hsa6/docs/$doc\">".__('digi')." @ issuu.com</a></div></td></tr>";
											// echo "<tr><td><iframe width=\"50%\" height=\"394\" src=\"$doc\" frameborder=\"0\" allowfullscreen></iframe></td></tr>";
										}
									}
									?>
								</table>
								<br>
								<a href="javascript:history.back()"><p><?php echo __('back');?></p></a>
								<a href="."><p><?php echo __('new-src');?></p></a>
							</div>
						</div>
						<div id="sidebar">
							<a type="button" onclick="export_toggle()" class="btn btn-primary"><i class="icon-export"></i></a>
							<div id="export" data-open="no">
								<a style='font-family:"Karla",Arial,serif; font-style:italic; width:100%;' href="/suche/export-ris.php?id=<?php echo $_GET['id'];?>" class="btn btn-primary">RIS</a><br>
								<a style='font-family:"Karla",Arial,serif; font-style:italic; width:100%;' href="/suche/export.php" class="btn btn-primary">EAD</a>
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

		<?php include '../lang/footer.php'; ?>

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
			.digitalisat a{
				display: block;
				padding: 10px;
				text-align: center;
				background-color: rgba(0,0,0,.4);
				border-radius: 4px;
				color: #ffffff;
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
			#footer{
				background-color: white;
			}
		</style>

		<script src="/suche/embed.js"></script>
	</body>
</html>
