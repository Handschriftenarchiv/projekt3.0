<?php
include "../../translate.php";
if(isset($_GET['langs'])){
	header("Content-type:application/json");
	echo json_encode($dictionary);
}elseif(isset($_GET['chunks'])){
	header("Content-Type: application/json");
	$path=$dict_dir.DIRECTORY_SEPARATOR.'chunk-translations';
	$files=scandir($path);
	$chunks=array();
	foreach ($files as $f) {
		if($f!='..'&&$f!='.'&&is_dir($path.DIRECTORY_SEPARATOR.$f)){
			$subfiles=scandir($path.DIRECTORY_SEPARATOR.$f);
			$langs=array();
			foreach ($subfiles as $subf) {
				if(is_file($path.DIRECTORY_SEPARATOR.$f.DIRECTORY_SEPARATOR.$subf)){
					$chunks[]=$f.'/'.$subf;
				}
			}
		}
	}
	echo json_encode($chunks);
}elseif(isset($_GET['chunk'])){
	header('Content-Type: text/plain');
	$_GET['chunk']=str_replace('/',DIRECTORY_SEPARATOR,$_GET['chunk']);
	$path=$dict_dir.DIRECTORY_SEPARATOR.'chunk-translations'.DIRECTORY_SEPARATOR.$_GET['chunk'];
	if(file_exists($path)){
		readfile($path);
	}
}elseif(isset($HTTP_RAW_POST_DATA)){
	header_remove();
	http_response_code(200);
	save($HTTP_RAW_POST_DATA);
}

function save($data){
	global $dictionary;
	global $dict_dir;
	$data=json_decode($data);
	if($data->type=='table'){
		$data=$data->table;
		$dictionary=array();
		for ($i=0; $i < count($data); $i++) {
			$alias='';
			foreach ($data[$i] as $key => $value) {
				if($key=='Key'){
					$alias=$value;
				}else{
					$dictionary[$key][$alias]=$value;
				}
			}
		}
		$keys=array_keys($dictionary[array_keys($dictionary)[0]]);
		$path=$dict_dir.DIRECTORY_SEPARATOR.'dictionary';
		file_put_contents($path,implode("\n",$keys));
		foreach ($dictionary as $lang => $value){
			$path=$dict_dir.DIRECTORY_SEPARATOR.$lang;
			file_put_contents($path,implode("\n",$value));
		}
	}elseif($data->type=='chunk'){
		$c=substr_count($data->name,'/');
		if($c>1){
			echo "Error: Too many slashes. Only chunk names with exactly one slash are allowed!";
			exit;
		}elseif($c<1){
			echo "Error: Not enough slashes. Only chunk names with exactly one slash are allowed!";
			exit;
		}
		$name=explode($data->name,'/');
		$path=$dict_dir.DIRECTORY_SEPARATOR.'chunk-translations'.DIRECTORY_SEPARATOR.$name[0];
		/*
		make sure said chunk already exists
		if not, create it
		*/
		if(!is_dir($path)){
			mkdir($path);
		}
		$path=$dict_dir.DIRECTORY_SEPARATOR.'chunk-translations'.DIRECTORY_SEPARATOR.$data->name;
		file_put_contents($path,$data->text);
		echo "OK";
	}
}
