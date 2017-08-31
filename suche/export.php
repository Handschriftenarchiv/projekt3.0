<?php
require_once "misc.php";
header("Content-Type: text/plain");
$ident="DE-HSA";
$res=mysqli_query($con,"SELECT * FROM archivalien");
while($dsatz=mysqli_fetch_assoc($res)){
	$sig=formatSig($dsatz['Signatur']);
	$f=fopen("export".DIRECTORY_SEPARATOR."$sig.xml","w");
	fprintf($f,"<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<ead xsi:schemaLocation=\"urn:isbn:1-931666-22-9 http://www.loc.gov/ead/ead.xsd http://www.w3.org/1999/xlink http://www.loc.gov/standards/xlink/xlink.xsd\">\n<eadheader>");
	fprintf($f,"<eadid>%s</eadid>\n<filedesc>\n<titlestmt>\n<titleproper>%s</titleproper>\n</titlestmt>\n</filedesc>\n",$ident,$dsatz['Titel']);
	$date=strtotime(preg_replace('~^[a-zA-Zäöüß.\s]*(.+)[a-zA-Zäöüß.\s]*$~', '$1', $dsatz['Verfassungsdatum']));
	fprintf($f,"<profiledesc>\n<creation><date normal=\"%s\">%s</date>\n</creation>\n</profiledesc>\n</eadheader>\n",date('Y-m-d',$date),$dsatz['Verfassungsdatum']);
	fprintf($f,"<archdesc level=\"collection\" type=\"Findbuch\">\n<did>\n<repository>\n<corpname role=\"Sonstige\">Handschriftenarchiv Dresdner Kreuzchor</corpname>\n");
	fprintf($f,"<address><adressline>Dornblüthstraße 4,01277 Dresden,handschriftenarchiv@protonmail.com</adressline>\n<address>\n<extref xlink:role=\"url_archive\" xlink:href=\"archiv.handschriften.bplaced.com\">Handschriftenarchiv Dresdner Kreuzchor</extref>\n</repository>\n</did>\n");
	fprintf($f,"<otherfindaid>\n<extref xlink:role=\"url_findbuch\" xlink:href=\"archiv.handschriften.bplaced.com/suche/details.php?id=%d\">%s im Katalog</extref>\n</otherfindaid>\n",$dsatz['ID'],$dsatz['Titel']);
	fprintf($f,"<dsc>\n<c level=\"collection\" id=\"$sig\">\n<did>\n<unitid>$sig</unitid>\n<unittitle>%s</unittitle>\n",$dsatz['Titel']);
	$norm_type="";
	switch($dsatz['Typus']){
		case 'Handschrift':$norm_type='Handschriften';break;
/* ?! */case 'Kopie von Handschrift':$norm_type='Sonstige';break;
		case 'Druck':$norm_type='Drucksachen';break;
	}
	fprintf($f,"<physdesc>\n<genreform normal=\"%s\">%s</genreform>\n</physdesc>\n<langmaterial>\n<language",$norm_type,$dsatz['Typus']);
	if($dsatz['Sprache']=="Deutsch"){
		fprintf($f," langcode=\"ger\"");
	}
	if($dsatz['Schrift']=="Latein"){
		fprintf($f," scriptcode=\"Latn\"");
	}
	fprintf($f,">%s</language>\n</langmaterial>\n</did>\n</c>\n</dsc>\n</archdesc>\n</ead>",$dsatz['Sprache']);
}
