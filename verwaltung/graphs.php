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
			Highcharts.chart('chart',{
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
					showFirstLabel: false
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
					showFirstLabel: false
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
						point: {
							events: {
								click: function (e) {
									hs.htmlExpand(null, {
										pageOrigin: {
											x: e.pageX || e.clientX,
											y: e.pageY || e.clientY
										},
										headingText: this.series.name,
										maincontentText: Highcharts.dateFormat('%A, %b %e, %Y', this.x) + ':<br/> ' +
											this.y + ' visits',
										width: 200
									});
								}
							}
						},
						marker: {
							lineWidth: 1
						}
					}
				},

				series: [{
					name: 'All visits',
					lineWidth: 4,
					marker: {
						radius: 4
					}
				}, {
					name: 'New visitors'
				}]
			});
		</script>
	</body>
</html>
