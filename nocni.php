<?php
function proveriGodine($godine)
{
    foreach($godine as $g => $value)
    if($value < 18)
    {
        echo "Vase ime je $g";
        echo "<h2 style='background-color:red'> Niste dovoljno stari </h2>";
        echo "<hr>";
    }
    else {
        echo "Vase ime je $g";
        echo "<h2 style='background-color:green'>Mozete uci</h2>";
        echo "<hr>";
    }
}
$godine = [
    'Krsmanija' => 18,
    'Ljeposava' => 11,
    'Hranoslava' => 22
];
proveriGodine($godine);

?>
