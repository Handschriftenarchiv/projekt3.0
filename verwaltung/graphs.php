<?php
require_once '../analytics.php';
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Auswertung Web-Traffic</title>
	</head>
	<body>
		<script src="highcharts.js"></script>
		<script src="highcharts-data.js"></script>

		<div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">

		<script>
			Highcharts.chart('chart',{
				chart: {
					zoomType: 'x'
				},
				data:{
					csv: "<?php echoData(); ?>"
				},
				title: {
					text: 'Zugriffe pro Tag',
				},
				xAxis: {
					tickInterval: 7 * 24 * 3600 * 1000, // one week
					tickWidth: 0,
					gridLineWidth: 1,
					labels: {
						align: 'left',
						x: 3,
						y: -3
					}
				},
				yAxis: [{ // left y axis
					title: {
						text: null
					},
					labels: {
						align: 'left',
						x: 3,
						y: 16,
						format: '{value:.,0f}'
					},
					showFirstLabel: false,
					allowDecimals: false
				}, { // right y axis
					linkedTo: 0,
					gridLineWidth: 0,
					opposite: true,
					title: {
						text: null
					},
					labels: {
						align: 'right',
						x: -3,
						y: 16,
						format: '{value:.,0f}'
					},
					showFirstLabel: false,
					allowDecimals: false
				}],
				legend: {
					verticalAlign: 'bottom',
					borderWidth: 0
				},
				tooltip: {
					shared: true,
					crosshairs: true
				},
				plotOptions: {
					series: {
						cursor: 'pointer',
						marker: {
							lineWidth: 1
						}
					}
				},
				series: <?php echoSeries(); ?>
			});
		</script>
		<style>
		body {
		  font-family: "Karla", Arial, sans-serif;
		  line-height: 1.8;
		  font-size: 20px;
		  background: #f0f0f0;
		  background-image: url(images/photography.png);
		  font-weight: 300;
		  overflow-x: hidden;
		}
		p, span {
		  margin-bottom: 1.5em;
		  font-size: 18px;
		  color: #929292;
		  font-weight: 300;
		  font-family: "Karla", Arial, sans-serif;
			text-decoration: none;
			text-underline: none;
		}
		a {
		  color: #5c5c5c;
		  -webkit-transition: 0.5s;
		  -o-transition: 0.5s;
		  transition: 0.5s;
			text-decoration: none;
			text-underline: none;
		}
		a:hover {
		  color: #000000;
			text-decoration: none;
			text-underline: none;
		}
		a:focus, a:active {
		  outline: none;
			text-decoration: none;
			text-underline: none;
		}
		</style>
		<center>
		<p>
		<a href="../index.php">Zurück zur Startseite</a><br>
		<a href="index.php">Zurück zum Verwaltungsportal</a><br>
		<?php if(isset($_GET['archivalien'])||isset($_GET['notfound'])){ ?>
		<a href="graphs.php">Seitenzugriffe</a><br>
		<?php }
		if(!isset($_GET['notfound'])){ ?>
		<a href="graphps.php?notfound">nicht gefundene Dokumente</a><br>
		<?php }
		if(!isset($_GET['archivalien'])){ ?>
		<a href="graphs.php?archivalien">Zugriffe auf den Katalog</a>
		<?php } ?>
	</p>
</center>
	</body>
</html>
