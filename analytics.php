<?php
require_once 'suche/misc.php';

view();

function view(){
	$page=strtolower(preg_replace('~.*[/\\\\](.+)$~','\\1',$_SERVER['SCRIPT_NAME']));
	$sql='INSERT INTO analytics(`page`';
	$requires_additional=array('not-found.php','details.php','komponist-info.php','blog.php');
	if(in_array($page,$requires_additional)){
		$sql.=',`additional`';
	}
	$sql.=")VALUES('$page'";
	switch($page){
		case 'not-found.php':
			$sql.=",'$_SERVER[REQUEST_URI]'";
			break;
		case 'details.php':
		case 'komponist-info.php':
		case 'blog.php':
			$sql.=",'$_GET[id]'";
			break;
	}
	$sql.=')';
	$con=dbCon();
	if(!@mysqli_query($con,$sql)){
		// Fehler mit Datenbank-Verbindung
		echo '<!-- Datenbank-Fehler analytics.php -->';
	}else{
		mysqli_close($con);
	}
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
			."LEFT JOIN archivalien ON analytics.additional = archivalien.ID WHERE page like '%details.php' "
			."GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
	}elseif(isset($_GET['notfound'])){
		$analytics_sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views,additional FROM analytics "
			."WHERE page like '%not-found.php' GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
	}elseif(isset($_GET['blog'])){
		$analytics_sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views,additional FROM analytics "
			."WHERE page like '%blog.php' GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
	}elseif(isset($_GET['komponist'])){
		$analytics_sql="SELECT page,DATE(created) as dateCreated,COUNT(*) AS views,Name FROM analytics "
			."LEFT JOIN komponisten ON analytics.additional = komponisten.Abk WHERE page like '%komponist-info.php' "
			."GROUP BY additional,dateCreated ORDER BY dateCreated,additional ASC";
	}else{
		$analytics_sql="SELECT page,DATE(created) AS dateCreated,COUNT(*) AS views FROM analytics "
			."GROUP BY page,dateCreated ORDER BY dateCreated,page ASC";
	}
	$count=mysqli_num_rows(mysqli_query($con,$analytics_sql));
	mysqli_close($con);
	return $count;
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
			$documents[$dsatz['additional']]=addslashes($dsatz['Titel']);
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
	}elseif(isset($_GET['notfound'])||isset($_GET['blog'])){
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
	}elseif(isset($_GET['komponist'])){
		$res=mysqli_query($con,$analytics_sql);
		if(mysqli_num_rows($res)==0)
			return; // keine Daten
		echo 'Tag';
		$komponisten=array();
		while($dsatz=mysqli_fetch_assoc($res)){
			$komponisten[]=$dsatz['Name'];
			echo ','.$dsatz['Name'];
		}
		echo '\n';
		mysqli_data_seek($res,0);
		$date="";
		while($dsatz=mysqli_fetch_assoc($res)){
			if($dsatz['dateCreated']!=$date){
				if(!empty($val)){
					echo implode(',',$val).'\n';
				}
				foreach($komponisten as $s){
					$val[$s]=0;
				}
				$date=$dsatz['dateCreated'];
				echo date('j/n/y',strtotime($date)).',';
			}
			$val[$dsatz['Name']]=$dsatz['views'];
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
		mysqli_close($con);
	}elseif(isset($_GET['blog'])){
		$sql="SELECT additional FROM analytics WHERE page like '%blog.php' GROUP BY additional";
		$con=dbCon();
		$res=mysqli_query($con,$sql);
		while($dsatz=mysqli_fetch_assoc($res)){
			echo "{name:\"$dsatz[additional]\"},";
		}
		mysqli_close($con);
	}elseif(isset($_GET['notfound'])){
		$sql="SELECT additional FROM analytics WHERE page like '%not-found.php' GROUP BY additional";
		$con=dbCon();
		$res=mysqli_query($con,$sql);
		while($dsatz=mysqli_fetch_assoc($res)){
			echo "{name:\"$dsatz[additional]\"},";
		}
		mysqli_close($con);
	}elseif(isset($_GET['komponist'])){
		$sql="SELECT Name FROM analytics LEFT JOIN komponisten ON additional = Abk WHERE page like '%komponist-info.php' GROUP BY additional";
		$con=dbCon();
		$res=mysqli_query($con,$sql);
		while($dsatz=mysqli_fetch_assoc($res)){
			echo "{name:\"$dsatz[Name]\"},";
		}
		mysqli_close($con);
	}else{
		$pages=getPages();
		foreach($pages as $s){
			echo "{name:\"$s\"},";
		}
	}
	echo ']';
}
