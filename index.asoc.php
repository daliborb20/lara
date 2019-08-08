<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
<style>
u{
background-color: black;
color:white; 
}

</style>
</head>
<body>
    <ul>
    <?php foreach ($zarada as $koeficijent => $vrednost):    ?>
       <li> <strong><?= $koeficijent . ": "?></strong><u><?= $vrednost ?></u></li>
    <?php endforeach    ?>

    </ul>
</body>
</html>
