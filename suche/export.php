<?php
require_once "../analytics.php";
// Dafür sorgen, dass der Seiten-Inhalt als XML-Datei heruntergeladen wird
header("Content-Type: text/xml");
header('Content-Disposition: attachment; filename="findbuch.xml"');
// ISIL-Nummer
$ident="DE-2535";
// muss mit echo ausgegeben werden, da ein '<?' sonst einen öffnenden PHP-Block symbolisieren würde
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<ead xmlns="urn:isbn:1-931666-22-9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xlink="http://www.w3.org/1999/xlink" xsi:schemaLocation="urn:isbn:1-931666-22-9 http://www.loc.gov/ead/ead.xsd http://www.w3.org/1999/xlink http://www.loc.gov/standards/xlink/xlink.xsd" audience="external">
	<eadheader countryencoding="iso3166-1" dateencoding="iso8601" langencoding="iso639-2b" repositoryencoding="iso15511" scriptencoding="iso15924">
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
					<addressline>Dornblüthstraße 4,01277 Dresden,handschriftenarchiv@protonmail.com</addressline>
				</address>
				<extref xlink:role="url_archive" xlink:href="archiv.handschriften.bplaced.com">Website des Handschriftenarchiv Dresdner Kreuzchor</extref>
			</repository>
		</did>
		<otherfindaid>
			<extref xlink:role="url_findbuch" xlink:href="archiv.handschriften.bplaced.de/suche/export.php">aus aktuellen Daten generiertes Findbuch des Archives</extref>
		</otherfindaid>
		<dsc>
			<c level="collection" id="HSA-Bestand">
				<did>
					<unittitle>HSA-Bestand</unittitle>
					<unitid><?php echo $ident; ?></unitid>
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
$norm_type="Sonstige";
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
							<p><?php echo str_ireplace('<br>','<lb>',$dsatz['Bemerkungen']);?></p>
						</note>
<?php
}
?>					</did>
					<otherfindaid>
						<extref xlink:role="url_archivalunit" xlink:href="hsa.bplaced.de/suche/details.php?id=<?php echo $dsatz['ID'];?>">Titelaufnahme im Angebot des Archivs</extref>
					</otherfindaid>
					<odd>
						<head>Anzahl</head>
						<p><?php echo str_ireplace('<br>','<lb>',$dsatz['Anzahl']); ?></p>
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
