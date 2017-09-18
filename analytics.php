<?php
include 'suche/misc.php';

view();

function view(){
	$con=dbCon();
	$ip=$_SERVER['REMOTE_ADDR'];
	$page=$_SERVER['SCRIPT_NAME'];
	$sql="INSERT INTO analytics(`page`)VALUES('','$page')";
	mysqli_query($con,$sql);
	mysqli_close($con);
}

function getPages($interval="1 MONTH"){
	$con=dbCon();
	$res=mysqli_query($con,"SELECT page FROM analytics WHERE created > (NOW() - INTERVAL $interval) GROUP BY page ORDER BY page ASC");
	$val=array();
	while($dsatz=mysqli_fetch_assoc($res)){
		$val[]=$dsatz['page'];
	}
	mysqli_close($con);
	return $val;
}

function getByCountry($interval="1 MONTH"){
	$con=dbCon();
	$val=array();
	$sql="SELECT page,COUNT(*) as views FROM analytics WHERE created > (NOW() - INTERVAL $interval) GROUP BY page ORDER BY page ASC";
	$res=mysqli_query($con,$sql);
	mysqli_close($con);
	/* TODO
	while($dsatz=mysqli_fetch_assoc($res)){
		if(!isset($val[$dsatz['country']])){
			$val[$dsatz['country']]=array($dsatz['views']);
		}else{
			$val[$dsatz['country']][]=$dsatz['views'];
		}
	}
	foreach($val as $key => $value){
		if(empty($key)){
			$key="unknown";
		}
		$ret[]=array('name'=>$key,'data'=>$value);
	}
	return $ret;
	*/
}
