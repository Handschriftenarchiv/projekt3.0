<?php
require_once '../analytics.php';

$con=dbCon();

if(isset($_GET['archivalien'])){
	$type = 'archivalien';
	$series_sql="SELECT Signatur as additional FROM analytics JOIN archivalien ON additional = archivalien.ID "
		."WHERE page like '%details.php' "
		."AND created > CURDATE() - INTERVAL 1 YEAR GROUP BY Signatur";
	$data_sql = "SELECT DATE(created) AS dateCreated,COUNT(*) AS views,Signatur as additional FROM analytics "
		."JOIN archivalien ON additional = archivalien.ID "
		."WHERE page like '%details.php' AND created > CURDATE() - INTERVAL 1 YEAR "
		."GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
}elseif(isset($_GET['notfound'])){
	$type = 'notfound';
	$series_sql="SELECT additional FROM analytics WHERE page like '%not-found.php' "
		."AND created > CURDATE() - INTERVAL 1 YEAR GROUP BY additional";
	$data_sql="SELECT DATE(created) AS dateCreated,COUNT(*) AS views,additional FROM analytics "
		."WHERE page like '%not-found.php' AND created > CURDATE() - INTERVAL 1 YEAR "
		."GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
}elseif(isset($_GET['blog'])){
	$type = 'blog';
	$series_sql="SELECT additional FROM analytics WHERE page like '%blog.php' "
		."AND created > CURDATE() - INTERVAL 1 YEAR GROUP BY additional";
	$data_sql="SELECT DATE(created) AS dateCreated,COUNT(*) AS views,additional FROM analytics "
		."WHERE page like '%blog.php' AND created > CURDATE() - INTERVAL 1 YEAR "
		."GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
}elseif(isset($_GET['komponist'])){
	$type = 'komponist';
	$series_sql="SELECT Name as additional FROM analytics LEFT JOIN komponisten ON additional = Abk WHERE page like '%komponist-info.php' "
		."AND created > CURDATE() - INTERVAL 1 YEAR GROUP BY additional";
	$data_sql="SELECT DATE(created) as dateCreated,COUNT(*) AS views,Name as additional FROM analytics "
		."LEFT JOIN komponisten ON analytics.additional = komponisten.Abk WHERE page like '%komponist-info.php' "
		."AND created > CURDATE() - INTERVAL 1 YEAR GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
}else{
	$type = 'default';
	$series_sql="SELECT page as additional FROM analytics WHERE created > CURDATE() - INTERVAL 1 YEAR "
		."GROUP BY page";
	$data_sql="SELECT DATE(created) AS dateCreated,COUNT(*) AS views,page as additional FROM analytics "
		."WHERE created > CURDATE() - INTERVAL 1 YEAR "
		."GROUP BY page,dateCreated ORDER BY dateCreated,page ASC";
}

$res_data=mysqli_query($con,$data_sql);
$count=mysqli_num_rows($res_data);

if($count>0){
	// Daten laden
	$con=dbCon();

	// Kategorien laden
	$res_series=mysqli_query($con,$series_sql);
	$series=array();
	while($dsatz=mysqli_fetch_assoc($res_series)){
		$series[] = $dsatz['additional'];
	}

	// eigentliche Daten laden

	/*
	$res_data enthält Daten gruppiert nach Tag und "Kategorie" (z.B. Archivalie)
	Nun müssen Daten nach Datum je in eine Zeile zusammengefasst werden. Dazu
	Gruppierung nun abbilden als mehrdimensionales Array
	1. Index: Datum
	2. Index: Kategorie
	*/
	$data=array();
	while($dsatz=mysqli_fetch_assoc($res_data)){
		$data[date('j/n/y',strtotime($dsatz['dateCreated']))][$dsatz['additional']]=$dsatz['views'];
	}

	$csv='Tag,"'.implode('","',$series)."\"\n";
	foreach($data as $date => $views) {
		$csv.=$date.',';
		foreach($series as $s) {
			if(isset($views[$s])) {
				$csv.=$views[$s].',';
			}else{
				$csv.='0,';
			}
		}
		$csv.="\n";
	}

	// series in entsprechende JSON-Objekte umwandeln
	$series_obj = array();
	foreach($series as $s) {
		$series_obj[] = array('name' => $s);
	}
	$series = json_encode($series_obj);

	mysqli_close($con);
}

?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Auswertung Web-Traffic</title>
		<style>
		body {
			font-family: "Karla", Arial, sans-serif;
			line-height: 1.8;
			font-size: 20px;
			background: #f0f0f0;
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
	</head>
	<body>
<?php if($count>0){ ?>
		<script src="highcharts.js" type="application/javascript"></script>
		<script src="highcharts-data.js" type="application/javascript"></script>

		<div id="chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		<link href="/fonts/karla/include.css" rel="stylesheet"/>

		<script>
			Highcharts.chart('chart',{
				chart: {
					zoomType: 'x'
				},
				data:{
					csv: <?php echo json_encode($csv); ?>
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
				series: <?php echo $series; ?>
			});
		</script>
<?php }else{ ?>
		<h3>keine Daten</h3>
<?php } ?>
		<center>
			<p>
				<a href="/<?php echo $use_lang; ?>/">Zurück zur Startseite</a><br>
				<a href=".">Zurück zum Verwaltungsportal</a><br>
<?php if($type!=='default'){ ?>
				<a href="graphs">Seitenzugriffe</a><br>
<?php }
if($type!=='notfound'){ ?>
				<a href="graphs?notfound">nicht gefundene Dokumente</a><br>
<?php }
if($type!=='archivalien'){ ?>
				<a href="graphs?archivalien">Zugriffe auf den Katalog</a><br>
<?php }
if($type!=='blog'){ ?>
				<a href="graphs?notfound">Zugriffe auf den Blog</a><br>
<?php }
if($type!=='komponist'){ ?>
				<a href="graphs?notfound">Zugriffe auf Komponisten-Informationen</a><br>
<?php } ?>
			</p>
		</center>
	</body>
</html>
