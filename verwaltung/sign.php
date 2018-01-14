<?php
// aus Sicherheitsgründen sollte diese Datei nicht ausführbar sein
// hiermit könnte eine "Denial of Service"-Atacke ausgeführt werden
exit(0);

header("Content-Type: text/plain");
require_once "../suche/config.php";
$pdo=dbConPDO();
$stmnt=$pdo->prepare('SELECT row FROM (SELECT @row := @row + 1 as row,ID FROM archivalien, (SELECT @row:=0)r WHERE Komponist=? ORDER BY Titel) AS a WHERE ID=?');
$upd_stmnt=$pdo->prepare('UPDATE archivalien SET Signatur = ? WHERE ID = ?');
$unbekannt=0;
foreach($pdo->query('SELECT ID,Titel,Komponist,Abk,Typus FROM archivalien LEFT JOIN komponisten ON Komponist=Name ORDER BY Titel') as $dsatz){
	if(empty($dsatz['Abk'])){
		$dsatz['Abk']="UNB";
	}else{
	}
	$sig=$dsatz['Abk'].substr($dsatz['Typus'],0,1);
	if($dsatz['Abk']=='UNB'){
		$n=++$unbekannt;
	}else{
		$stmnt->execute(array($dsatz['Komponist'],$dsatz['ID']));
		$n=$stmnt->fetchColumn(0);
	}
	$sig.=str_pad($n,3,'0',STR_PAD_LEFT);
	echo $dsatz['Titel'].' '.$sig."\n";
	$upd_stmnt->execute(array($sig,$dsatz['ID']));
	echo "-----------------------------------\n";
}
?>
