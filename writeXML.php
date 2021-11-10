<?php
$xml= new DomDocument("1.0","UTF-8");
$xml->formatOutput=true;
$xml->preserveWhiteSpace=false;
$reg=$xml->createElement("reg");
$xml->appendChild($reg);
$user=$xml->createElement("user");
$reg->appendChild($user);
$name=$xml->createElement("name","Nirzar");
$user->appendChild($name);
$email=$xml->createElement("email","nirzar.modi@gmail.com");
$user->appendChild($email);
$website=$xml->createElement("website","modigrp.in");
$user->appendChild($website);
$comment=$xml->createElement("comment","Cool");
$user->appendChild($comment);
$gender=$xml->createElement("gender","Male");
$user->appendChild($gender);

$user=$xml->createElement("user");
$reg->appendChild($user);
$name=$xml->createElement("name","Sparsh");
$user->appendChild($name);
$email=$xml->createElement("email","sparsh.jain@gmail.com");
$user->appendChild($email);
$website=$xml->createElement("website","jainindustries.in");
$user->appendChild($website);
$comment=$xml->createElement("comment","Coolio");
$user->appendChild($comment);
$gender=$xml->createElement("gender","Male");
$user->appendChild($gender);
echo"<xmp>".$xml->saveXML()."<xmp>";
$xml->save("reg.xml");
?>



