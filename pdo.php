<?php
require "kl.zadaci.php";
require "konekcija/connect.php";
require "konekcija/query.php";

$pdo = Konekcija::uspostavi();
$build = new QueryBuilder($pdo);
$zadace = $build -> prikaziSveRezultate('task');


require "pdo.index.php";
?>
