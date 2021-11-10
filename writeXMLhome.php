<?php
$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$feed=$xml->createElement("feed");
$xml->appendChild($feed);
$rev=$xml->createElement("rev");
$feed->appendChild($rev);
$name=$xml->createElement("name","Nirzar");
$rev->appendChild($name);
$mail=$xml->createElement("mail","nirzar.modi@gmail.com");
$rev->appendChild($mail);
$country=$xml->createElement("country","India");
$rev->appendChild($country);
$subject=$xml->createElement("subject","Inquiry");
$rev->appendChild($subject);

$rev=$xml->createElement("rev");
$feed->appendChild($rev);
$name=$xml->createElement("name","Suyash");
$rev->appendChild($name);
$mail=$xml->createElement("mail","hkeshri2011@gmail.com");
$rev->appendChild($mail);
$country=$xml->createElement("country","India");
$rev->appendChild($country);
$subject=$xml->createElement("subject","Damaged Goods");
$rev->appendChild($subject);
echo"<xmp>".$xml->saveXML()."<xmp>";
$xml->save("feed.xml");
?>