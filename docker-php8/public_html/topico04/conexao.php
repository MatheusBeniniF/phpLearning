<?php
$db = new msqli("localhost", "root", "root", "tads");

$query = "SELECT nome FROM tads.alunos";

$result = $db->query($query);

while ($linha = $result->fetch_assoc()) {
    echo $linha["nome"] . "<br>";
}