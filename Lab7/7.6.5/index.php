<?php

$file = "ingredients.xhtml";

$xml = simplexml_load_file($file) or die ("Unable to load!!!");

foreach($xml->xpath('//desc') as $desc){
    echo $desc."<br>";
}


