<?php

$file = "7.6.2.xhtml";
$xml = simplexml_load_file($file) or die ("Unable to load!!!");

//Print xml file
//echo "Name: " . $xml->name . "\n <br>"; 
//echo "Age: " . $xml->age . "\n <br>";
//echo "Species: " . $xml->species . "\n <br>";
//echo "Parents: " . $xml->parents->mother . " and " . $xml->parents->father. "\n";

//Edit xml file
$xml->name = "Ri Cat";
$xml->age = 2.5;
$xml-> species = "cat";
$xml->parents->mother = "Cloud Cat";
$xml->parents->father = "Dave Cat";
file_put_contents($file, $xml->asXML());




?>