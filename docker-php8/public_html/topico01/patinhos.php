<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patinhos</title>
</head>
<body>
    <?php
        $patinhos = 99;
        while($patinhos > 0) : 
    ?>
    <p>
       <?= $patinhos ?> patinhos foram passear
        Além das montanhas para brincar
        A mamãe gritou: <?php
        for ($i = 0; $i < $patinhos; $i++) {
            echo "Quá, ";
        }
        ?>
         mas so <?= (--$patinhos) ?> <?php if($patinhos <= 1) {echo "patinho";} else {echo "patinhos";} ?> voltaram de lá <br>
    </p>
    <?php:endwhile;?>
</body>
</html>