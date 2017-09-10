<?php
require_once 'misc.php';
header('Content-Type: application/x-research-info-systems');
$sql="SELECT* FROM archivalien";
if(isset($_GET['id'])){
	$sql.=" WHERE id=".intval($_GET['id']);
	$res=mysqli_query($con,$sql);
	$dsatz=mysqli_fetch_assoc($res);
	@header('Content-Disposition: attachment; filename="'.formatSig($dsatz['Signatur']).'.ris"');
?>TY  - MUSIC
DB  - Handschriftenarchiv Dresdner Kreuzchor
DP  - Handschriftenarchiv Dresdner Kreuzchor
AN  - <?php
	echo $dsatz['ID'];
	echo "\nLB  - ".formatSig($dsatz['Signatur']);
	echo "\nTI  - $dsatz[Titel]";
	if(!empty($dsatz['Komponist'])){
		echo "\nAU  - $dsatz[Komponist]";
	}
	if(!empty($dsatz['Dichter'])){
		echo "\nAU  - $dsatz[Dichter]";
	}
	if(!empty($dsatz['Setzer'])){
		echo "\nAU  - $dsatz[Setzer]";
	}
	if(!empty($dsatz['Bearbeiter'])){
		echo "\nA2  - $dsatz[Bearbeiter]";
	}
	if(!empty($dsatz['Verfassungsdatum'])){
		$date=preg_replace('~.*(\d?\d[./-]\d?\d[./-]\d\d\d\d).*~','$1',$dsatz['Verfassungsdatum']);
		echo "\nDA  - ".date('Y/m/d',strtotime($date));
		$year=date_parse($date)['year'];
		echo "\nPY  - $year";
	}
	if(!empty($dsatz['Verlag'])){
		echo "\nPB  - $dsatz[Verlag]";
	}
	echo "\nLA  - $dsatz[Sprache]";
	if(!empty($dsatz['Bemerkungen'])){
		echo "\nRN  - $dsatz[Bemerkungen]";
	}
	echo "\nUR  - http://$_SERVER[SERVER_NAME]$_SERVER[REQUEST_URI]";
	echo "\nY2  - ".date('Y/m/d');
	echo "\nER  - \n";
}else{
	$res=mysqli_query($con,$sql);
	// TODO
}
