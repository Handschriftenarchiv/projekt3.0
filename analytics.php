<?php
require_once 'suche/misc.php';

view();

function view(){
	$page=strtolower(preg_replace('~.*[/\\\\](.+)$~','\\1',$_SERVER['SCRIPT_NAME']));
	$sql='INSERT INTO analytics(`page`';
	$requires_additional=array('not-found.php','details.php','komponist-info.php','blog.php');
	if(in_array($page,$requires_additional)){
		$sql.=',`additional`';
	}
	$sql.=")VALUES('$page'";
	switch($page){
		case 'not-found.php':
			$sql.=",'$_SERVER[REQUEST_URI]'";
			break;
		case 'details.php':
		case 'komponist-info.php':
		case 'blog.php':
			$sql.=",'$_GET[id]'";
			break;
	}
	$sql.=')';
	$con=dbCon();
	if(!@mysqli_query($con,$sql)){
		// Fehler mit Datenbank-Verbindung
		echo '<!-- Datenbank-Fehler analytics.php -->';
	}else{
		mysqli_close($con);
	}
}
