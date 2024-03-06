<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="processa.php" method="POST">
        <?php
            $name = $_POST["name"];
        ?>
        <input type="text" name="nome" value="<?= $name ?>"> <br>
        <input type="radio" name="estCivil" value="Solteiro"> Solteiro
        <input type="radio" name="estCivil" value="Casado"> Casado <br>
        <select name="selEstado">
            <option value="SP">SP</option>
            <option value="RJ">RJ</option>
            <option value="MG">MG</option>
            <option value="ES">ES</option>
        </select><br>
        <select name="selMes">
            <option value="Janeiro">1</option>
            <option value="Fevereiro">2</option>
            <option value="Marco">3</option>
            <option value="Abril">4</option>
            <option value="Maio">5</option>
            <option value="Junho">6</option>
            <option value="Julho">7</option>
            <option value="Agosto">8</option>
            <option value="Setembro">9</option>
            <option value="Outubro">10</option>
            <option value="Novembro">11</option>
            <option value="Dezembro">12</option>
        </select>
        <input type="checkbox" name="Extras[]" value="Garagem"> Garagem <br>
        <input type="checkbox" name="Extras[]" value="Piscina"> Piscina <br>
        <input type="checkbox" name="Extras[]" value="Jardim"> Jardim <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>