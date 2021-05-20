<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$str = <<< XML
<?xml version="1.0" encoding="UTF-8"?>
<shapes>
    <shape type = "circle" radius = "2" />
    <shape type = "rectangle" length = "5" width = "3" />
    <shape type = "square" length = "8" />
</shapes>
XML;

$xml = simplexml_load_string($str) or die ("Unable to load!!!");

foreach ($xml->shape as $shape){
    if ($shape['type'] == "circle")
        $area = pi () * $shape['radius'] * $shape['radius'];
    elseif ($shape['type'] == "square")
        $area = $shape['length'] * $shape['length'];
    else
        $area = $shape['length'] * $shape['width'];
    echo $area. "<br>";
}
?>