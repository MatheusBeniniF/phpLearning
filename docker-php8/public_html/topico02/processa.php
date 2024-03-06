<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?="O nome digitado é {$_POST["nome"]}<br>"?>
    <?="Estado civil: {$_POST["estCivil"]} <br>" ?>
    <?= "Estado é: {$_POST["selEstado"]}<br>" ?>
    <?= "O mes é: {$_POST["selMes"]}<br>" ?>
    <?= "Os extras sao: <br>"?>
    <?php $extras = $_POST["Extras"]; 
        foreach($extras as $extra):
            echo "$extra<br>";
        endforeach;
    ?>
</body>
</html>