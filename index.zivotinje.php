<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zivotinje</title>
    <style>
        .zivotinja{
            background-color: red;
}


    </style>
</head>
<body>
<ol>
    <?php foreach ($zivotinje as $ziv): ?>
        <li class="zivotinja"><?= $ziv;   ?></li>
    <?php endforeach    ?> 

</ol>

</body>
</html>
