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

require "index.asoc.php"
?>
