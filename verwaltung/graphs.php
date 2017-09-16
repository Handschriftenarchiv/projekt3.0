<!DOCTYPE html>
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
					categories: ['/index.php', '/suche/index.php', '/suche/details.php', '/suche/search.php', '/suche/export.php', '/suche/export-ris.php', '/mediathek.php', '/impressum.html', '/kontakt.php']
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
				series: [{
					name: 'Germany',
					data: [5, 3, 4, 7, 2,5, 3, 4, 7]
				}, {
					name: 'Swizerland',
					data: [3, 4, 4, 2, 5,3, 4, 4, 2]
				}, {
					name: 'United States',
					data: [2, 2, 3, 2, 1,2, 2, 3, 2]
				}]
			});
		</script>
	</body>
</html>
