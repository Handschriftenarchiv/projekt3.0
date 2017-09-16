<?php
include 'suche/misc.php';

function view(){
	$con=dbCon();
	$ip=$_SERVER['REMOTE_ADDR'];
	$geo=unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
	$country=$geo['geoplugin_countryName'];
	$page=$_SERVER['SCRIPT_NAME'];
	$sql="INSERT INTO analytics(`country`,`page`,`date`)VALUES('$country','$page',now())";
	mysqli_query($con,$sql);
}
