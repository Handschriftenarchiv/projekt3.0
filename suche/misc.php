<?php

require_once 'config.php';
$con=dbCon();

function formatSig($sig){
	$sig=str_pad($sig,6,'0',STR_PAD_LEFT);
	return substr($sig,0,2).'-'.substr($sig,2,2).'-'.substr($sig,4);
}

function stripSig($str){
	return preg_replace('/(\d\d)-(\d\d)-(\d\d)/',"\\1\\2\\3",$str);
}

function translate_iso639_2B($langcode){
	switch($langcode){
		case 'ger':return 'Deutsch';
		case 'lat':return 'Latein';
		case 'rus':return 'Russisch';
		case 'jpn':return 'Japanisch';
		case 'chi':return 'Chinesisch';
		case 'eng':return 'Englisch';
		case 'mul':return 'mehrere Sprachen';
		case 'zxx':return 'kein linguistischer Inhalt';
		case 'und':
		default:return 'nicht zu entscheiden';
	}
}

function translate_iso15924($scriptcode){
	switch($scriptcode){
		case 'Latf':
		case 'Latg':
		case 'Latn':return 'Latein';
		case 'Cyrl':return 'Kyrillisch';
	}
}
