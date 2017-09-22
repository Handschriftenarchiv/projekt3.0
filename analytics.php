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
	$sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views,additional FROM analytics ";
	if(isset($_GET['archivalien'])){
		$sql.="WHERE page='/suche/details.php' GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
		$res=mysqli_query($con,$sql);
		echo 'Tag';
		$val=array();
		while($dsatz=mysqli_fetch_assoc($res)){
			if(!array_key_exists($dsatz['additional'],$val)){
				$val[$dsatz['additional']]="";
			}
		}
		$sql="SELECT ID,Titel FROM archivalien WHERE ID=";
		$sql.=implode(' OR ID=',array_keys($val));
		$res2=mysqli_query($con,$sql);
		$documents=array();
		while($dsatz=mysqli_fetch_assoc($res)){
			$documents[$dsatz['ID']]=$dsatz['Titel'];
		}
		echo implode(',',$documents);
		mysqli_data_seek($res,0);
		$date="";
		while($dsatz=mysqli_fetch_assoc($res)){
			if($dsatz['dateCreated']!=$date){
				if(!empty($val)){
					echo implode(',',$val).'\n';
				}
				foreach($documents as $s){
					$val[$s]=0;
				}
				$date=$dsatz['dateCreated'];
				echo date('j/n/y',strtotime($date)).',';
			}
			$val[$dsatz['additional']]=$dsatz['views'];
		}
	}elseif(isset($_GET['notfound'])){
		$sql.="GROUP BY page,dateCreated ORDER BY dateCreated,page ASC";
		$res=mysqli_query($con,$sql);
		echo 'Tag';
		// TODO
	}else{
		$sql.="GROUP BY page,dateCreated ORDER BY dateCreated,page ASC";
		$res=mysqli_query($con,$sql);
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
	}
	echo implode(',',$val);
	mysqli_close($con);
}

function echoSeries(){
	echo '[';
	if(isset($_GET['archivalien'])){
		$sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views,additional FROM analytics "
			."WHERE page='/suche/details.php' GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
		$con=dbCon();
		$res=mysqli_query($con,$sql);
		$val=array();
		while($dsatz=mysqli_fetch_assoc($res)){
			if(!array_key_exists($dsatz['additional'],$val)){
				$val[$dsatz['additional']]="";
			}
		}
		$sql="SELECT ID,Titel FROM archivalien WHERE ID=";
		$sql.=implode(' OR ID=',array_keys($val));
		$res2=mysqli_query($con,$sql);
		$documents=array();
		while($dsatz=mysqli_fetch_assoc($res)){
			$documents[$dsatz['ID']]=$dsatz['Titel'];
		}
		foreach ($documents as $s){
			echo "{name:\"$s\"},";
		}
	}elseif(isset($_GET['notfound'])){
		// TODO
	}else{
		$pages=getPages();
		foreach($pages as $s){
			echo "{name:\"$s\"},";
		}
	}
	echo ']';
}
