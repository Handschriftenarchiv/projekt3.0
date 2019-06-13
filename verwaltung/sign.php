<?php
session_start();
require_once '../suche/config.php';
if(empty($_SESSION['login'])&&empty($_POST['user'])){
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Signaturvergabe</title>
		<style>
			*{
				font-family: monospace;
			}
		</style>
	</head>
	<body>
		<form method="post">
			User:<input type="text" name="user"/><br>
			Pass:<input type="password" name="pass"/><br>
			<button type="submit">Authentifizieren</button>
		</form>
	</body>
</html>
<?php
}else{
	if(isset($_POST['user'])){
		if(sig_auth($_POST['user'],$_POST['pass'])){
			$_SESSION['login']=1;
		}else{
			session_destroy();
			header("Location: /");
		}
	}
	if(isset($_GET['logout'])){
		session_destroy();
		header("Location: sign.php");
	}
?>
<a href="sign.php?logout">Logout</a>
<h3>Vergebene Signaturen:</h3>
<a href="sign.php">wiederholen</a>
<pre>
-----------------------------------
<?php
require_once "../suche/config.php";
$pdo=dbConPDO();
$stmnt=$pdo->prepare('SELECT row FROM (SELECT @row := @row + 1 as row,ID FROM archivalien, (SELECT @row:=0)r WHERE Komponist=? ORDER BY ID) AS a WHERE ID=?');
$upd_stmnt=$pdo->prepare('UPDATE archivalien SET Signatur = ? WHERE ID = ?');
$unbekannt=0;
foreach($pdo->query('SELECT ID,Titel,Komponist,Abk,Typus FROM archivalien LEFT JOIN komponisten ON Komponist=Name ORDER BY ID') as $dsatz){
	if(empty($dsatz['Abk'])){
		$dsatz['Abk']="UNB";
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
echo '</pre>';
}
