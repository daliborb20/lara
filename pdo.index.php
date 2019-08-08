<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klase </title>
</head>
<body>
    <h1>Zadaci</h1>    
    <ul>
    <?php foreach ($zadace as $zadatak) :  ?>
<li>
    <?php if ($zadatak -> zavrsen) : ?> 
        <strike> <?= $zadatak -> opis;?></strike>
    <?php else:   ?> 
    <?= $zadatak -> opis;?>
<?php endif ?>
</li>

    <?php endforeach;   ?> 
    </ul>




</body>
</html>
