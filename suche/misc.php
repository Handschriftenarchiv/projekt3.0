<?php

require_once 'config.php';
$con=dbCon();

function formatSig($sig){
	return preg_replace('/([A-Z]{3})([A-Z])([0-9]{3})/','\1-\2-\3',$sig);
}

function stripSig($str){
	return preg_replace('/([A-Z]{3})-([A-Z])-([0-9]{3})/','\1\2\3',$str);
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
