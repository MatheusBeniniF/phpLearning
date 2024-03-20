<?php
spl_autoload_register(function ($class) {
    require_once str_replace('\\', '/', $class. '.php');
})

use Seguranca\Conta as Seguranca;
use Financas\Conta as Financas;

$financas = new Seguranca();
$seguranca = new Financas();
// $seguranca->setIdentidade(789.00, "batatinha", true);
// echo $seguranca->getNome()