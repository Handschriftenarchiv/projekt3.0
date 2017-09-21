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

		<script>
			Highcharts.chart('chart',{
				chart: {
					zoomType: 'x'
				},
				data:{
					csv: "<?php echoData(); ?>"
				},
				title: {
					text: 'Zugriffe pro Tag'
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
					align: 'left',
					verticalAlign: 'top',
					y: 20,
					floating: true,
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
				// [{
				// 	name: 'All visits',
				// 	lineWidth: 4,
				// 	marker: {
				// 		radius: 4
				// 	}
				// }, {
				// 	name: 'New visitors'
				// }]
			});
		</script>
	</body>
</html>
