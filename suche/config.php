<?php
if($_SERVER['HTTP_HOST']=='localhost'){
	$con=mysqli_connect("localhost","root","apäoxui","notenarchiv");
}else{
	$con=mysqli_connect("localhost","hsa3","mjuedc00","hsa3");
}
mysqli_set_charset($con,'utf8');

function formatSig($sig){
	$sig=str_pad($sig,6,'0',STR_PAD_LEFT);
	return substr($sig,0,2).'-'.substr($sig,2,2).'-'.substr($sig,4);
}

function stripSig($str){
	return preg_replace('/(\d\d)-(\d\d)-(\d\d)/',"\\1\\2\\3",$str);
}

$errors=array();

function error($code){
	if(in_array($code,$errors)){
		return;
	}
	$errors[]=$code;
	switch($code){
		case "A0":
		case "A1":
		case "A2":
		echo "Es gab einen Fehler mit der Datenbank.";break;
		default:"Ein schwerwiegender Fehler ist aufgetreten.";
	}
	echo " (#$code)";
}
