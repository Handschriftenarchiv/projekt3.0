<?php
include 'suche/misc.php';

view();

function view(){
	$con=dbCon();
	$ip=$_SERVER['REMOTE_ADDR'];
	$geo=unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
	$country=$geo['geoplugin_countryName'];
	$page=$_SERVER['SCRIPT_NAME'];
	$sql="INSERT INTO analytics(`country`,`page`,`date`,`time`)VALUES('$country','$page',CURRENT_DATE,CURRENT_TIME)";
	mysqli_query($con,$sql);
	mysqli_close($con);
}

function getPages(){
	$con=dbCon();
	$res=mysqli_query($con,"SELECT page FROM analytics GROUP BY page");
	$val=array();
	while($dsatz=mysqli_fetch_assoc($res)){
		$val[]=$dsatz['page'];
	}
	mysqli_close($con);
	return $val;
}

function getByCountry(){
	// TODO
}
