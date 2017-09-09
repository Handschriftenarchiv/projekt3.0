<?php
require_once 'misc.php';
header('Content-Type: application/x-research-info-systems');
$sql="SELECT* FROM archivalien";
if(isset($_POST['id'])){
	$sql.=" WHERE id=".intval($_POST['id']);
	$res=mysqli_query($con,$sql);
	$dsatz=mysqli_fetch_assoc($res);
	echo 'TY  - MUSIC\nAN  - ';
	echo $dsatz['id'];
	if(!empty($dsatz['Komponist'])){
		echo 'AU  - '.$dsatz['Komponist'];
	}
	if(!empty($dsatz['Verfassungsdatum'])){
		$date=preg_replace('~.*(\d?\d[./-]\d?\d[./-]\d\d\d\d).*~','$1',$dsatz['Verfassungsdatum']);
		echo date('Y/m/d',strtotime());
		$year=date_parse($date)['year'];
		echo "PY  - $year";
	}
	// ...
}else{
	$res=mysqli_query($con,$sql);
	// TODO
}
