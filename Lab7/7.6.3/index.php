<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file = "SinCity.xhtml";
$xml = simplexml_load_file($file) or die ("Unable to load");

foreach ($xml->sin as $s){
    echo "$s <br>";
}