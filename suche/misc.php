<?php

function formatSig($sig){
	$sig=str_pad($sig,6,'0',STR_PAD_LEFT);
	return substr($sig,0,2).'-'.substr($sig,2,2).'-'.substr($sig,4);
}

function stripSig($str){
	return preg_replace('/(\d\d)-(\d\d)-(\d\d)/',"\\1\\2\\3",$str);
}
