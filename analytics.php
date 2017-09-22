<?php
include 'suche/misc.php';

view();

function view(){
	$con=dbCon();
	$page=$_SERVER['SCRIPT_NAME'];
	$sql='INSERT INTO analytics(`page`';
	if(stripos($page,'not-found.php')>-1||stripos($page,'details.php')>-1){
		$sql.=',`additional`';
	}
	$sql.=")VALUES('$page'";
	if(stripos($page,'not-found.php')>-1){
		$sql.="'$_SERVER[REQUEST_URI]'";
	}elseif(stripos($page,'details.php')>-1){
		$sql.="'$_GET[id]'";
	}
	$sql.=')';
	mysqli_query($con,$sql);
	mysqli_close($con);
}

function getPages(){
	$con=dbCon();
	$res=mysqli_query($con,"SELECT page FROM analytics GROUP BY page ORDER BY page ASC");
	while($dsatz=mysqli_fetch_assoc($res)){
		$val[]=$dsatz['page'];
	}
	mysqli_close($con);
	return $val;
}

function echoData(){
	$con=dbCon();
	$res=mysqli_query($con,"SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views FROM analytics GROUP BY page,dateCreated ORDER BY dateCreated,page ASC");
	echo 'Tag';
	$pages=getPages();
	foreach($pages as $page){
		echo ",$page";
	}
	echo '\n';
	$date="";
	while($dsatz=mysqli_fetch_assoc($res)){
		if($dsatz['dateCreated']!=$date){
			if(!empty($val)){
				echo implode(',',$val).'\n';
			}
			foreach($pages as $page){
				$val[$page]=0;
			}
			$date=$dsatz['dateCreated'];
			echo date('j/n/y',strtotime($date)).',';
		}
		$val[$dsatz['page']]=$dsatz['views'];
	}
	echo implode(',',$val);
	mysqli_close($con);
}

function echoSeries(){
	$pages=getPages();
	echo '[';
	foreach($pages as $page){
		echo "{name:\"$page\"},";
	}
	echo ']';
}
