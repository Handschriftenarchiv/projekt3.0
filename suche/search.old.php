<?php
require_once "config.php";

if(isset($_POST['val'])&&count($_POST['val'])>0){
	$res=mysqli_query($con,"DESCRIBE archivalien");
	while($dsatz=mysqli_fetch_array($res,MYSQLI_NUM)){
		$cols[]=$dsatz[0];
	}
	if(count($_POST['search'])!==count($_POST['val'])){
		error("A0");
		mysqli_close($con);
		exit;
	}
	$sql="SELECT * FROM archivalien WHERE ";
	for($i=0;$i<count($_POST['val']);$i++){
		if(!in_array($_POST['search'][$i],$cols)){
			error("A1");
			continue;
		}
		$sql.=$_POST['search'][$i]." like '%".mysqli_real_escape_string($con,$_POST['val'][$i])."%' ";
		if($i+1<count($_POST['val'])){
			$sql.="AND ";
		}
	}
	$res=mysqli_query($con,$sql);
	mysqli_close($con);
	if(!$res){
		error(mysqli_errno($con));
		exit;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Handschriftenarchiv Dresdner Kreuzchor</title>
		<link rel="stylesheet" type="text/css" href="search.css"/>
	</head>
	<body>
		<table id="result">
			<tr><th>Titel</th><th>Komponist</th><th>Bearbeiter</th><th>Dichter</th><th>Setzer</th><th>Typus</th><th>Verlag</th><th>Verfassungsdatum</th>
				<th>Sprache</th><th>Anzahl</th><th>Sammlung</th><th>Standort</th><th>Signatur</th><th>Bemerkungen</th></tr>
<?php
while ($dsatz=mysqli_fetch_assoc($res)){
	echo "<tr><td>".$dsatz['Titel']."</td><td>";
	if(!empty($dsatz['Komponist'])){
		echo $dsatz['Komponist'];
	}else{
		echo 'unbekannt';
	}
	echo "</td><td>";
	if(!empty($dsatz['Bearbeiter'])){
		echo $dsatz['Bearbeiter'];
	}else{
		echo '-';
	}
	echo "</td><td>";
	if(!empty($dsatz['Dichter'])){
		echo $dsatz['Dichter'];
	}else{
		echo 'unbekannt';
	}
	echo "</td><td>";
	if(!empty($dsatz['Setzer'])){
		echo $dsatz['Setzer'];
	}else{
		echo 'unbekannt';
	}
	echo "</td><td>";
	echo $dsatz['Typus'];
	echo "</td><td>";
	if($dsatz['Typus']=='Druck'){
		if(!empty($dsatz['Verlag'])){
			echo $dsatz['Verlag'];
		}else{
			echo 'unbekannt';
		}
	}else{
		echo '-';
	}
	echo "</td><td>";
	if(!empty($dsatz['Verfassungsdatum'])){
		echo $dsatz['Verfassungsdatum'];
	}else{
		echo 'unbekannt';
	}
	echo "</td><td>".$dsatz['Sprache']."</td><td>".$dsatz['Anzahl']."</td><td>".$dsatz['Sammlung']."</td><td>".$dsatz['Standort']."</td><td>".formatSig($dsatz['Signatur'])."</td><td>";
	if(!empty($dsatz['Bemerkungen'])){
		echo $dsatz['Bemerkungen'];
	}
	echo "</td></tr>";
}
?>
		</table>
	</body>
</html>
<?php }else{
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Handschriftenarchiv Dresdner Kreuzchor</title>
		<script type="text/html" id="template">
			<td><select name="search[]" onchange="checkSelect(this);">
				<option>ID</option>
				<option>Titel</option>
				<option>Komponist</option>
				<option>Bearbeiter</option>
				<option>Dichter</option>
				<option>Setzer</option>
				<option>Typus</option>
				<option>Verlag</option>
				<option>Sprache</option>
				<option>Anzahl</option>
				<option>Sammlung</option>
				<option>Standort</option>
				<option>Signatur</option>
			</select></td><td><input name="val[]"></td><td><button type="button" onclick="removeP(this);" class="remove"/></td>
		</script>
		<link rel="stylesheet" type="text/css" href="search.css"/>
		<script type="text/javascript" src="search.js"></script>
	</head>
	<body onload="nfield()">
		<form method="POST">
			<table id="searchelems"></table>
			<button type="button" onclick="nfield()">+</button><br>
			<button type="submit">Suchen</button>
		</form>
	</body>
</html>
<?php }
