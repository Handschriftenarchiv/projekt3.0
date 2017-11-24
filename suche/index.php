<?php
require_once '../analytics.php';
require_once '../translate.php';
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo __('db');?> - <?php echo __('hsa')?></title>
		<link rel="shortcut icon" href="../favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400" rel="stylesheet">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<script type="text/javascript" src="/suche/search.js"></script>
		<script type="text/html" id="template">
		</script>
	</head>
	<body onload="start()">
		<a href=".."><img border="0" src="/favicon.ico" id="icon"/></a>
		<div id="search">
			<span style="font-size:16pt;"><?php echo __('fulltextsrc');?></span>
			<form method="GET" action="search.php" autocomplete="off" onsubmit="return checkSubmit(0);">
				<input type="search" list="suggestions" name="search" id="searchBox" style="width:80%" oninput="lookup();"/>
				<div id="livesearch"></div><br>
				<input type="submit" value="<?php echo __('src!')?>" style="float:right;margin-top:7%;margin-right:10%;"/>
			</form>
		</div>
		<div id="search-b">
			<span style="font-size:16pt;"><?php echo __('advsrc');?></span>
			<form method="GET" action="search.php" autocomplete="off" onsubmit="return checkSubmit(1);">
				<?php echo __('logicalcon');?>:
				<select name="mode" onchange="checkModeSwitch()">
					<option selected value="AND"><?php echo __('and');?></option>
					<option value="OR"><?php echo __('or');?></option>
				</select>
				<table>
					<tbody id="searchelems"><tr><td><select name="search[]" class="srch" onfocus="this.oldvalue=this.value;" onchange="checkSelect(this);this.oldvalue=this.value;">
						<option><?php echo __('id');?></option><option><?php echo __('title');?></option><option><?php echo __('comp');?></option><option><?php echo __('editor');?></option><option><?php echo __('poet');?></option><option><?php echo __('setter');?></option>
						<option><?php echo __('typ');?></option><option><?php echo __('pub');?></option><option><?php echo __('lang');?></option><option><?php echo __('script');?></option><option><?php echo __('num');?></option><option><?php echo __('collection');?></option>
						<option><?php echo __('loc');?></option><option><?php echo __('sig');?></option><option value="Audiolink"><?php echo __('audiolink+');?></option>
						<option value="Dokumentlink"><?php echo __('digi+');?></option></select></td><td class="text"><input name="val[]" type="number"></td><td></td></tr></tbody>
					<tfoot><tr><td><button type="button" onclick="nfield()" id="add"/></td><td colspan="2"></td></tr></tfoot>
				</table>
				<button type="submit" class="go"/>
			</form>
		</div>

		<div id="details">
			<img border="0" src="../images/database/info.svg" id="details"/>
			<div id="info">
				<a href="http://archiv.handschriften.bplaced.de/suche/details.php?id=134">
					<img border="0" src="../images/database/background.scharf.png" style="border-radius: 5px;"/>
					<p class="title">Mai</p>
					<p class="composer">Ernst Pepping</p>
				</a>
			</div>
		</div>

		<datalist id="suggestions"></datalist>
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
