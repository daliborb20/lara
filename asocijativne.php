<?php

$obican_array = ['prvi', 'drugi', 'treci', 'cetvrt'];

$zarada = [
    'koeficijent_neto' => 0.701,
    'koeficijent_delu' => 1.23232,
    'koeficijent_penzioner' => 0.521
];
//dodavanje u asoc array:
$zarada['koeficijent_prevoz'] = 0.90;

//dodvanje u obican array:
$obican_array[] = 'peti';
//brisanje odredjenih delova iz array:
unset($zarada['koeficijent_penzioner']);


//echo-ing arrary:
echo "<pre>";
//koriscenje funkcije die(var_dump($zarada)); -> prikazi i ne radi nista vise
var_dump($zarada);

echo "</pre>";

//require "index.asoc.php"
?>
