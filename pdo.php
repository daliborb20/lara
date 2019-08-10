<?php
require "kl.zadaci.php";
require "konekcija/connect.php";
require "konekcija/query.php";

$pdo = Konekcija::uspostavi();
$build = new QueryBuilder($pdo);
$zadace = $build -> prikaziSveRezultate('task');
echo "<h1>_______________</h1>";
$nova = $build -> izaberiPrvi('task');
foreach($nova as $n){
    echo $n -> opis;
}



require "pdo.index.php";
?>
