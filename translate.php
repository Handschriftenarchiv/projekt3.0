<?php
/*
the directory in which the dictionaries reside in

standard is 'lang'
*/
$dict_dir=$_SERVER['DOCUMENT_ROOT'].'/lang';
/*
language to use by default
NULL or unset means to use the language provided by the browser
be careful though: if an unsupported language is supplied by the browser all calls to the translating function will return an empty string or even an error

can't be null if $strict is set to true
*/
$default='de';
$use_lang='de';
/*
wheter the translator module should be set up strict, meaning it stays with the default language
if set on false your users might get a better user experience
	because the page is presented in their preferred language automatically, if this language is supported
	a get parameter called lang overrides the default and browser defined language, if not in strict mode
*/
$strict=false;

$dictionary_setup_done=false;

dictionary_setup($strict);

function dictionary_setup($strict){
	global $dict_dir;
	global $use_lang;
	global $dictionary;
	global $dictionary_setup_done;
	$dictionary=array();
	if(!@file_exists($dict_dir.DIRECTORY_SEPARATOR.'dictionary')){
		echo '<!-- Translate: Datei "'.$dict_dir.DIRECTORY_SEPARATOR.'dictionary" nicht gefunden -->';
		return;
	}
	$template=file($dict_dir.DIRECTORY_SEPARATOR.'dictionary',FILE_IGNORE_NEW_LINES);
	$dir=scandir($dict_dir);
	foreach($dir as $f){
		if(!is_file($dict_dir.DIRECTORY_SEPARATOR.$f)||$f=='dictionary'||strpos($f,'.')!==FALSE) continue;
		$dictionary_file=file($dict_dir.DIRECTORY_SEPARATOR.$f,FILE_IGNORE_NEW_LINES);
		for($i=0;$i<count($dictionary_file);$i++){
			$key=$template[$i];
			$dictionary[$f][$key]=$dictionary_file[$i];
		}
	}
	if(!$strict){
		if(isset($_GET['lang'])){
			$lang=strtolower(substr($_GET['lang'],0,2));
			if(language_supported($lang)){
				$use_lang=$lang;
			}
		}elseif(isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
			//selects the users preferred language (from browser settings)
			$langs=preg_split("[,;]",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
			foreach ($langs as $l){
				if($l[0]=='q'&&$l[1]=='='){
					// this is a quality code; skip it
					continue;
				}else if(language_supported($l)){
					$use_lang=$l;
					break;
				}
			}
		}
	}else{
		if($use_lang==null){
			die('multilang error: strict mode, but no language provided');
		}
	}
	$dictionary_setup_done=true;
}

function language_supported($lang){
	global $dictionary;
	global $dictionary_setup_done;
	global $dict_dir;
	if($dictionary_setup_done){
		return array_key_exists($lang,$dictionary);
	}else{
		return file_exists($dict_dir.DIRECTORY_SEPARATOR.$lang);
	}
}

/*
the actual translating function
*/
function __($translate,$lang=null){
	global $use_lang;
	global $dictionary;
	if(empty($lang)){
		$lang=$use_lang;
	}
	return $dictionary[$lang][$translate];
}

function language_switcher(){
	global $dictionary;
	//you might add your own styling and remove this line
	echo '<style>#lang-switcher{background-color:white;position:fixed;right:5px;bottom:5px;}</style>';
	echo '<div id="lang-switcher">';
	foreach(array_keys($dictionary) as $lang){
		$language=$dictionary[$lang]['language'];
		echo '<a href="';
		// check if REQUEST_URI already contains a lang GET parameter
		$count=0;
		$_SERVER['REQUEST_URI']=preg_replace('~(&|\?)lang=.*?($|&)~',$_SERVER['REQUEST_URI'],'$1lang='.$lang.'$2',-1,$count);
		echo $_SERVER['REQUEST_URI'];
		if($count==0){
			/*
			Don't cause errors if REQUEST_URI already contains a query string!
			If the uri already contains a query string, we just append the attributes with a ampersand.
			Otherwise we have to add our query with a question mark.
			*/
			echo (strpos($_SERVER['REQUEST_URI'],'?'))?'&':'?';
			echo "lang=$lang";
		}
		echo "\">$language</a>&nbsp;";
	}
	echo '</div>';
}

function language_supported_for_chunk($lang,$chunk){
	global $dict_dir;
	$path=$dict_dir.DIRECTORY_SEPARATOR.'chunk-translations'.DIRECTORY_SEPARATOR.$chunk.DIRECTORY_SEPARATOR.$lang;
	return file_exists($path)&&is_file($path);
}

function __chunk($chunk,$lang=null){
	global $default;
	global $use_lang;
	global $dict_dir;
	if(empty($lang)){
		$lang=$use_lang;
	}
	while(strlen($lang)>2&&!language_supported_for_chunk($lang,$chunk)){
		$lang=substr($lang,0,strrpos($lang,'-'));
	}
	if(!language_supported_for_chunk($lang,$chunk)){
		$lang=$default;
	}
	$path=$dict_dir.DIRECTORY_SEPARATOR.'chunk-translations'.DIRECTORY_SEPARATOR.$chunk.DIRECTORY_SEPARATOR.$lang;
	if(is_file($path)){
		return file_get_contents($path);
	}else{
		// an error occured or default translation is missing
		return 'Das hätte nicht passieren dürfen: Es ist ein Fehler im Übersetzungsmodul aufgetreten.';
	}
}

function __blog_prev($name,$col_width='12',$lang=null){
	global $default;
	global $use_lang;
	global $dict_dir;
	$chunk="blog-${name}-prev";
	if(empty($lang)){
		$lang=$use_lang;
	}
	while(strlen($lang)>2&&!language_supported_for_chunk($lang,$chunk)){
		$lang=substr($lang,0,strrpos($lang,'-'));
	}
	if(!language_supported_for_chunk($lang,$chunk)){
		$lang=$default;
	}
	$path=$dict_dir.DIRECTORY_SEPARATOR.'chunk-translations'.DIRECTORY_SEPARATOR.$chunk.DIRECTORY_SEPARATOR.$lang;
	if(is_file($path)){
		$translation=file($path);
		$data=json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'].'/blog/entries.json'),true);
		foreach($data as $key=>$value){
			if($value['title']==$name){
				$data=$data[$key];
				break;
			}
		}
		$html="<div class=\"col-md-$col_width\"><div class=\"fh5co-blog animate-box\">";
		$html.="<a href=\"/$use_lang/blog/$name\"><img class=\"img-responsive\" src=\"".$data['thumbnail']."\" alt=\"".$translation[0]."\"/></a>";
		$html.='<div class="blog-text">';
		$html.="<span class=\"posted_on\">".$data['pubDate']."</span>";
		$html.="<span class=\"comment\"><i class=\"icon-pencil\"></i> ".$translation[1]."</span>";
		$html.="<h3><a href=\"/$use_lang/blog/$name\">".$translation[2]."</a></h3>";
		$html.='<p>'.implode(array_slice($translation,3)).'</p>';
		$html.='</div></div></div>';
		return $html;
	}else{
		// an error occured or default translation is missing
		return 'An error occured. We\'re sorry for the inconvenience.';
	}
}
