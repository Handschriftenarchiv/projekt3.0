<?php
require_once "misc.php";
header("Content-Type: text/xml");
header('Content-Disposition: attachment; filename="findbuch.xml"');
// Platzhalter für den Identifier
$ident="DE-1234";
?><?xml version="1.0" encoding="UTF-8"?>
<ead xsi:schemaLocation="urn:isbn:1-931666-22-9 http://www.loc.gov/ead/ead.xsd http://www.w3.org/1999/xlink http://www.loc.gov/standards/xlink/xlink.xsd">
	<eadheader>
		<eadid mainagencycode="DE-ISIL"><?php echo $ident;?></eadid>
		<filedesc>
			<titlestmt>
				<titleproper>Handschriftenarchiv Dresdner Kreuzchor</titleproper>
			</titlestmt>
		</filedesc>
		<profiledesc>
			<creation>
				<date normal="<?php echo date('Y-m-d');?>">erstellt am <?php echo date('d.m.Y');?></date>
			</creation>
		</profiledesc>
	</eadheader>
	<archdesc level="collection" type="Findbuch">
		<did>
			<unitid>HSA-Bestand</unitid>
			<repository>
				<corpname role="Sonstige">Handschriftenarchiv Dresdner Kreuzchor</corpname>
				<address>
					<adressline>Dornblüthstraße 4,01277 Dresden,handschriftenarchiv@protonmail.com</adressline>
				</address>
				<extref xlink:role="url_archive" xlink:href="archiv.handschriften.bplaced.com">Website des Handschriftenarchiv Dresdner Kreuzchor</extref>
			</repository>
		</did>
		<otherfindaid>
			<extref xlink:role="url_findbuch" xlink:href="archiv.handschriften.bplaced.de/suche/export.php">Findbuch Handschriftenarchiv Dresdner Kreuzchor</extref>
		</otherfindaid>
		<dsc>
			<c level="collection" id="HSA-Bestand">
				<did>
					<unitid>HSA-Bestand</unitid>
					<!-- evtl. <origination>Dresdner Kreuzchor</origination> -->
				</did>
<?php
				$res=mysqli_query($con,'SELECT * FROM archivalien');
				while($dsatz=mysqli_fetch_assoc($res)){
					$sig=formatSig($dsatz['Signatur']);
?>				<c level="file" id="<?php echo $ident.'-'.$sig; ?>">
					<did>
						<unitid><?php echo $sig; ?></unitid>
						<unittitle type="title"><?php echo $dsatz['Titel']; ?></unittitle>
						<origination label="Autor"><?php echo $dsatz['Komponist']?></origination>
						<physdesc>
<?php
$norm_type="";
switch($dsatz['Typus']){
	case 'Handschrift':$norm_type='Handschriften';break;
/* ?! */case 'Kopie von Handschrift':$norm_type='Sonstige';break;
	case 'Druck':$norm_type='Drucksachen';break;
}
?>							<genreform normal="<?php echo $norm_type; ?>"><?php echo $dsatz['Typus']; ?></genreform>
						</physdesc>
						<langmaterial>
							<language langcode="<?php echo $dsatz['Sprache']; ?>" scriptcode="<?php echo $dsatz['Schrift'];?>"><?php echo translate_iso639_2B($dsatz['Sprache']); ?></language>
						</langmaterial>
<?php
if(!empty($dsatz['Bemerkungen'])){
?>						<note>
							<p><?php echo $dsatz['Bemerkungen']?></p>
						</note>
<?php
}
?>					</did>
					<otherfindaid>
						<extref xlink:role="url_archivalunit" xlink:href="archiv.handschriften.bplaced.de/suche/details.php?id=<?php echo $dsatz['ID'];?>">Titelaufnahme im Angebot des Archivs</extref>
					</otherfindaid>
					<odd>
						<head>Anzahl</head>
						<p><?php echo $dsatz['Anzahl']; ?></p>
					</odd>
<?php
if(!empty($dsatz['Dokumentlink'])){
?>					<daogrp id="<?php echo $ident.'-'.$sig; ?>_digit">
						<daodesc>
							<list>
<?php
$docs=explode(' ',$dsatz['Dokumentlink']);
foreach($docs as $doc){
?>								<item>
									<title>Scan <?php
switch($dsatz['Typus']){
	case 'Handschrift':
		echo "der Handschrift";
		break;
	case 'Kopie von Handschrift':
		echo "der Kopie der Handschrift";
		break;
	case 'Druck':
		echo "des Druckes";
		break;
}									?></title>
									<genreform>BILD</genreform>
								</item>
<?php
}
?>
							</list>
						</daodesc>
<?php
foreach($docs as $doc){
?>						<daoloc xlink:role="externer_viewer" xlink:href="<?php echo $doc; ?>"/>
<?php }
?>					</daogrp>
<?php }
?>
				</c>
<?php } ?>	</c>
		</dsc>
	</archdesc>
</ead>
