<?php
/*
the directory in which the dictionaries reside in

standard is 'lang'
*/
$dict_dir='lang';
/*
language to use by default
NULL or unset means to use the language provided by the browser
be careful though: if an unsupported language is supplied by the browser all calls to the translating function will return an empty string or even an error

can't be null if $strict is set to true
*/
$use_lang='de';
/*
wheter the translator module should be set up strict, meaning it stays with the default language
if set on false your users might get a better user experience
	because the page is presented in their preferred language automatically, if this language is supported
	a get parameter called lang overrides the default and browser defined language, if not in strict mode
*/
$strict=false;

dictionary_setup($strict);

function dictionary_setup($strict=false){
	global $dict_dir;
	global $use_lang;
	global $dictionary;
	$dictionary=array();
	$template=file($dict_dir.DIRECTORY_SEPARATOR.'dictionary',FILE_IGNORE_NEW_LINES);
	$dir=scandir($dict_dir);
	foreach($dir as $f){
		if($f=='.'||$f=='..'||$f=='dictionary'||!is_file($dict_dir.DIRECTORY_SEPARATOR.$f)) continue;
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
			$langs=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
			foreach($langs as $l){
				if(language_supported($l)){
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
}

function language_supported($lang){
	global $dict_dir;
	return file_exists($dict_dir.DIRECTORY_SEPARATOR.$lang);
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
		echo '<a href="'.$_SERVER['REQUEST_URI'];
		/*
		Don't cause errors if REQUEST_URI already contains a query string!
		If the uri already contains a query string, we just append the attributes with a ampersand.
		Otherwise we have to add our query with a question mark.
		*/
		echo (strpos($_SERVER['REQUEST_URI'],'?'))?'&':'?';
		echo "lang=$lang\">$language</a>&nbsp;";
	}
	echo '</div>';
}

function __page($page,$lang=null){
	global $use_lang;
	global $dict_dir;
	if(empty($lang)){
		$lang=$use_lang;
	}
	/*
	TODO: überprüfen, ob diese ÜBersetzung verfügbar
	falls nicht verfügbar, alternative Sprache wählen
	*/
	$path=$dict_dir.DIRECTORY_SEPARATOR.'page-translations'.DIRECTORY_SEPARATOR.$page.DIRECTORY_SEPARATOR.$lang;
	return file_get_contents($path);
}
