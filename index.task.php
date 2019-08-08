<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booleen</title>
</head>
<body>
    <table>
        <tr>
            
            <?php foreach ($zadaci as $naslov => $vrednost) :   ?> 
            <td><?= ucwords($naslov) . ":  " ?><?= $vrednost;?></td>
        </tr>
           <?php endforeach; ?>
    </table>
        <h1>Drugi podnaslov</h1>

    <h2>Naslov: <?= $zadaci['naslov'] ?></h2>
    <h2>Rok: <?= $zadaci['rok'] ?></h2>
    <h2>Zaduzen: <?= $zadaci['zaduzenje'] ?></h2>
    <h2>Zavrsen: <?= $zadaci['zavrsen'] ? "Zavrsen" : "Nije zavrsen" ?></h2>
    <h2>Zavrsen druga varijanta: <?php if ($zadaci['zavrsen']) {
    echo "Zavrsen &#9762";
} else {
    echo "Nije zavrsen";
} ?>
</h2>
<hr>
<?php if ($zadaci['zavrsen']):    ?>
    <h1>Zavrsen &#9742</h1>
<?php else:    ?>
    <h1>Nije zavrsen &#9442</h1>
<?php endif    ?>

</body>
</html>
