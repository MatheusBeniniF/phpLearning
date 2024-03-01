<?php

$precos["biscoito"] = 1.75;

echo "O preço do biscoito é {$precos["biscoito"]}";

$precos = array(2=> 1.56, 0=> 5.74);
var_dump($precos);

$tas = array("MD", "BH", "KK", "HM", "JP");

for ($i=0; $i < count($tas); $i++) { 
    echo "{$i}: {$tas[$i]} <br>";
}

foreach ($tas as $key => $value) {
    echo "{$key} : {$value} <br>";
}

$dados = array(
    array(0, "Joao", "joao@email.com", "123", 'm', 1), 
    array(1, "Marcola", "joao@email.com", "123", 'm', 1), 
    array(2, "Beni", "joao@email.com", "123", 'm', 1), 
    array(3, "Thiago", "joao@email.com", "123", 'm', 1), 
    array(4, "Webert", "joao@email.com", "123", 'm', 1), 
)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Genero</th>
                <th>Receber email?</th>
            </tr>
<?php
    foreach ($dados as $key => $registro):
?>
        <tr>
            <td><?= $registro[0] ?></td>
            <td><?= $registro[1] ?></td>
            <td><?= $registro[2] ?></td>
            <td><?= $registro[3] ?></td>
            <td><?= ($registro[4] === 'm')? 'Masculino' : 'Feminino' ?></td>
            <td><?= ($registro[5])? 'Sim':'Não' ?></td>
        </tr>       
        <?php endforeach ?>     
        </table>
    </div>    
</body>
</html>