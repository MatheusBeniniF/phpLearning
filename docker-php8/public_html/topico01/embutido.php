<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se fude tmj</title>
    <style>
        .blue{
            color:blue;
        }
    </style>
</head>
<body>
    <div class="principal">
        <h1>Quadrados</h1>
        <p>
<?php

    $j = 1;
    while ($j <= 20):
        $quadrado = $j * $j;
        echo "O quadrado de $j é ".$j * $j."<br>\n";
        $j++;
    endwhile;

    $nome = "Gildo";
    $sobrenome = "Leonel";
?>            
        <h2 class="blue"><?= "$nome $sobrenome" ?></h2>
        </p>
    </div>
</body>
</html>