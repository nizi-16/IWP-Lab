<?php
$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$xml->load("feed.xml");
if(!$xml)
{
	$feed=$xml->createElement("feed");
	xml->appendChild($feed);
}
else
{
	$feed=$xml->firstChild;
}
$rev=$xml->createElement("rev");
$feed->appendChild($rev);
$name=$xml->createElement("name","JaiShankar");
$rev->appendChild($name);
$mail=$xml->createElement("mail","Shankarjai.2020@gmail.com");
$rev->appendChild($mail);
$country=$xml->createElement("country","Jakarta");
$rev->appendChild($country);
$subject=$xml->createElement("subject","Delayed Service");
$rev->appendChild($subject);
echo"<xmp>".$xml->saveXML()."<xmp>";
$xml->save("feed.xml");

$rev=$xml->createElement("rev");
$feed->appendChild($rev);
$name=$xml->createElement("name","LeChongWi");
$rev->appendChild($name);
$mail=$xml->createElement("mail","Chonglee.sing@gmail.com");
$rev->appendChild($mail);
$country=$xml->createElement("country","Singapore");
$rev->appendChild($country);
$subject=$xml->createElement("subject","Thank you");
$rev->appendChild($subject);
echo"<xmp>".$xml->saveXML()."<xmp>";
$xml->save("feed.xml");
?>