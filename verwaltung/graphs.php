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

		<div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

		<script>
			Highcharts.chart('chart', {
				chart: {
					type: 'column'
				},
				title: {
					text: 'Zugriffe auf Seiten pro Land'
				},
				xAxis: {
					categories: <?php
						echo json_encode(getPages());
					?>
				},
				yAxis: {
					min: 0,
					title: {
						text: 'Anzahl Aufrufe'
					},
					stackLabels: {
						enabled: true,
						style: {
							fontWeight: 'bold',
							color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
						}
					}
				},
				legend: {
					align: 'center',
					verticalAlign: 'bottom',
					floating: false,
					backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
					borderColor: '#CCC',
					borderWidth: 1,
					shadow: false
				},
				tooltip: {
					headerFormat: '<b>{point.x}</b><br/>',
					pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
				},
				plotOptions: {
					column: {
						stacking: 'normal',
						dataLabels: {
							enabled: true,
							color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white'
						}
					}
				},
				series: <?php echo json_encode(getByCountry(),JSON_NUMERIC_CHECK|JSON_PRETTY_PRINT); ?>
			});
		</script>
	</body>
</html>
