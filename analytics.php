<?php
require_once 'suche/misc.php';

view();

function view(){
	$page=$_SERVER['SCRIPT_NAME'];
	$sql='INSERT INTO analytics(`page`';
	if(stripos($page,'not-found.php')>-1||stripos($page,'details.php')>-1){
		$sql.=',`additional`';
	}
	$sql.=")VALUES('$page'";
	if(stripos($page,'not-found.php')>-1){
		$sql.=",'$_SERVER[REQUEST_URI]'";
	}elseif(stripos($page,'details.php')>-1){
		$sql.=",'$_GET[id]'";
	}
	$sql.=')';
	$con=dbCon();
	mysqli_query($con,$sql);
	mysqli_close($con);
}

function getPages(){
	$con=dbCon();
	$res=mysqli_query($con,"SELECT page FROM analytics GROUP BY page ORDER BY page ASC");
	mysqli_close($con);
	while($dsatz=mysqli_fetch_assoc($res)){
		$val[]=$dsatz['page'];
	}
	return $val;
}

function hasData(){
	global $analytics_sql;
	$con=dbCon();
	if(isset($_GET['archivalien'])){
		$analytics_sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views,additional,Titel FROM analytics "
			."LEFT JOIN archivalien ON analytics.additional = archivalien.ID WHERE page like '%/details.php' "
			."GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
	}elseif(isset($_GET['notfound'])){
		$analytics_sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views,additional FROM analytics "
			."WHERE page like '%/not-found.php' GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
	}else{
		$analytics_sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views FROM analytics "
			."GROUP BY page,dateCreated ORDER BY dateCreated,page ASC";
	}
	$data=mysqli_num_rows(mysqli_query($con,$analytics_sql));
	mysqli_close($con);
}

function echoData(){
	global $analytics_sql; // set in hasData()
	$con=dbCon();
	if(isset($_GET['archivalien'])){
		$res=mysqli_query($con,$analytics_sql);
		if(mysqli_num_rows($res)==0)
			return; // keine Daten
		$resx=mysqli_store_result($con);
		echo 'Tag';
		while($dsatz=mysqli_fetch_assoc($res)){
			$documents[$dsatz['additional']]=$dsatz['Titel'];
		}
		echo ','.implode(',',$documents).'\n';
		mysqli_data_seek($res,0);
		$date="";
		while($dsatz=mysqli_fetch_assoc($res)){
			if($dsatz['dateCreated']!=$date){
				if(!empty($val)){
					echo implode(',',$val).'\n';
				}
				foreach(array_keys($documents) as $key){
					$val[$key]=0;
				}
				$date=$dsatz['dateCreated'];
				echo date('j/n/y',strtotime($date)).',';
			}
			$val[$dsatz['additional']]=$dsatz['views'];
		}
		echo implode(',',$val);
	}elseif(isset($_GET['notfound'])){
		$res=mysqli_query($con,$analytics_sql);
		if(mysqli_num_rows($res)==0)
			return; // keine Daten
		echo 'Tag';
		$documents=array();
		while($dsatz=mysqli_fetch_assoc($res)){
			if(!in_array($dsatz['additional'],$documents)){
				$documents[]=$dsatz['additional'];
				echo ','.$dsatz['additional'];
			}
		}
		echo '\n';
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
		echo implode(',',$val);
	}else{
		$res=mysqli_query($con,$analytics_sql);
		if(mysqli_num_rows($res)==0)
			return; // keine Daten
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
	}
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
