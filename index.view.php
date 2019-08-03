<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Naslovna stranica</title>
    <style>
        header{
            background-color: pink;
            padding: 2em;
            text-align: center;
}
    </style>
</head>
<body>
  <header>
     <h1>
<?php
foreach($niz as $ime){
    echo "<li>$ime</li>";
}
?>
    <?php  foreach($niz as $ime2) :?>
        <li><u> <?= $ime2; ?></u></li>
    <?php endforeach ?>

     </h1>
</header>
</body>
</html>


