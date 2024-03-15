<?php
// require_once("UsuarioSessao.php");
// $usu1 = new UsuarioSessao("jose", "Jose da Silva");
// $usu1->salvar("Jose da Silva");
// $usu1->ler();
// $usu2 = new UsuarioSessao("maria", "Maria da Silva");
// $usu2->salvar(null);

// $nome = "Jose da Silva";
// $atributo = "nome";

// echo $$atributo;

// var_dump($usu1);
// require_once("UsuarioSessaoPermissao.php");
// $usu1 = new UsuarioSessaoPermissao("jose", "Jose da Silva", "admin");
// $usu1->salvar("Jose da Silva");
// $usu1->ler();
// $usu2 = new UsuarioSessaoPermissao("maria", "Maria da Silva", "admin");
// $usu2->salvar(null);

// var_dump($usu1);

require_once("Funcionario.php");
require_once("Departamento.php");
$func = new Funcioario(1220.00, "Murilo");

$dep = new Departamento($func);
$dep->addFuncionario(0);
echo $dep->getFuncionarios()->getNome();

var_dump($dep);
